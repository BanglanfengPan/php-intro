<?php
    # name of HTML determined $_POST!!!!!!!

    $name = '';
    $password = '';
    $gender = '';
    $color = '';
    $languages = array();
    // $languages = [];
    $comments = '';
    $tc = '';

    //update.php?id=2 # we set id in the url in the select.php
    # check if there is a value for id and if it is digits
    if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header('Location: select.php'); # redirect back to php (PHP works this way)
    };

    if (isset($_POST['submit'])) {
        $ok = true;
        // insecure!!! because user can put even javarscript code into the text field
        // echo $_POST['searchterm'];
        // use htmlspecialchars() to escape special characters - < > " &
        // ENT_QUOTES escapes ', too

        // echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
        
        if (!isset($_POST['name']) || $_POST['name'] === '') {
            $ok = false;
        } else {
            $name = $_POST['name'];
        };
        if (!isset($_POST['password']) || $_POST['password'] === '') {
            $ok = false;
        } else {
            $password = $_POST['password'];
        };
        if (!isset($_POST['gender']) || $_POST['gender'] === '') {
            $ok = false;
        } else {
            $gender = $_POST['gender'];
        };
        if (!isset($_POST['color']) || $_POST['color'] === '') {
            $ok = false;
        } else {
            $color = $_POST['color'];
        };
        if (!isset($_POST['languages']) || !is_array($_POST['languages']) || count($_POST['languages']) === 0) {
            $ok = false;
        } else {
            $languages = $_POST['languages'];
        };
        if (!isset($_POST['comments']) || $_POST['comments'] === '')  {
            $ok = false;
        } else {
            $comments = $_POST['comments'];
        };
        if (!isset($_POST['tc']) || $_POST['tc'] === '') {
            $ok = false;
        } else {
            $tc = $_POST['tc'];
        };
        
        if ($ok) {
            # need to make sure mysqli package is downloaded with PHP
            include_once 'db.php';

            $sql = sprintf(
                "UPDATE users SET name='%s', gender='%s', color='%s'
                    WHERE id=%s",
                $db->real_escape_string($name), # to escape special characters like ' in these values and not have somebody inject sql code
                $db->real_escape_string($gender),
                $db->real_escape_string($color),
                $id
                ); # sprintf just formats a string

            # ----- also we could do:
            # $stmt = $db->prepare(
            #    "INSERT INTO users (col1, col2) VALUES (?, ?)");

            # $stmt->bind_param('ss', $value1, $value2); 
            # --- ss for 2 string types
            # $stmt->execute();
            # -------


            $db->query($sql);

            echo '<p>User updated.</p>/';

            $db->close();

            printf('User name: %s
                <br>Password: %s
                <br>Gender: %s
                <br>Color: %s
                <br>Language(S): %s
                <br>Comments: %s
                <br>T&amp;C: %s',
                htmlspecialchars($name, ENT_QUOTES),
                htmlspecialchars($password, ENT_QUOTES),
                htmlspecialchars($gender, ENT_QUOTES),
                htmlspecialchars($color, ENT_QUOTES),
                htmlspecialchars(implode(' ', $languages), ENT_QUOTES), //because $languages is an array
                htmlspecialchars($comments, ENT_QUOTES),
                htmlspecialchars($tc, ENT_QUOTES),
            );
        }
    } else {

        $db = new mysqli(
            'localhost', # where we are running the database
            'root', # username
            'secretpassword', # password for the user
            'php_learn', # database we are connecting to in the mysql server
        );

        $sql = "SELECT * FROM users WHERE id=$id";

        $result = $db->query($sql);
        foreach ($result as $row) {
            $name = $row['name'];
            $gender = $row['gender'];
            $color = $row['color'];
        };

        $db->close();

    };

    # readfile('header.tmpl.html');  # to load an html header that you define here
?>

<form
    action=""
    method="post">
    User name: <input type="text" name="name" value="<?php
        echo htmlspecialchars($name, ENT_QUOTES);
    ?>"><br>
    Password: <input type="password" name="password"><br>
    Gender:
        <input type="radio" name="gender" value="f"<?php
        if ($gender === 'f') {
            echo ' checked="checked"';
        }
        ?>> female
        <input type="radio" name="gender" value="m"<?php
        if ($gender === 'm') {
            echo ' checked="checked"';
        }
        ?>> male
        <input type="radio" name="gender" value="o"<?php
        if ($gender === 'o') {
            echo ' checked="checked"';
        }
        ?>> other <br/>
    Favourite color:
        <select name="color">
            <option value="">Please select</option>
            <option value="#f00"<?php
                if ($color === "#f00") {
                    echo ' selected';
                }
            ?>>red</option>
            <option value="#0f0"<?php
                if ($color === "#0f0") {
                    echo ' selected';
                }
            ?>>green</option>
            <option value="#00f"<?php
                if ($color === "#00f") {
                    echo ' selected';
                }
            ?>>blue</option>
        </select><br>
    Languages Spoken:
        <select name="languages[]" multiple size="3">
            <option value="en"<?php 
                if (in_array('en', $languages)) {
                    echo ' selected';
                }
            ?>>English</option>
            <option value="fr"<?php 
                if (in_array('fr', $languages)) {
                    echo ' selected';
                }
            ?>>French</option>
            <option value="it"<?php 
                if (in_array('it', $languages)) {
                    echo ' selected';
                }
            ?>>Italian</option>
        </select><br>
    Comments: <textarea name="comments"><?php
        echo htmlspecialchars($comments, ENT_QUOTES);
    ?></textarea><br>
    <input type="checkbox" name="tc" value="ok"<?php
        if ($tc === 'ok') {
            echo ' checked="checked"';
        }
        ?>>
        I accept the T&amp;C
    </input>
    <input type="submit" name="submit" value="Update"><br>
</form>

<!-- <?php
    readfile('footer.tmpl.html');  # to load an html header that you define here
?> -->
