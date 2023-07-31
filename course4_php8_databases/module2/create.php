<html>
<body>
<br />
<a href="index.php">menu</a>
<br />
<form action="#" method="post">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="John"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Smith"><br><br>
    <label for="email">Last name:</label><br>
    <input type="text" id="email" name="email" value="John.Smith@test.com"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
    //var_dump($GLOBALS).PHP_EOL; #prints global variables defned somwhere in the php script (functions can access them)
    //var_dump($_SERVER).PHP_EOL; # prints the server infor like http_host
    //var_dump($_REQUEST).PHP_EOL; # print all requests info (get and post, headers)
    var_dump($_POST).PHP_EOL; # only print the body of the request
    if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]))
    {
        $servername = "mysql";
        $username = "root";
        $password = "root";
        $dbname = "php_course4_databases";        
        
        // open MySQL connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // only proceed if connection is healthy
        if ($conn->connect_error) {
            die("MySQL Connection failed: " . $conn->connect_error);
        }
        
        // prepare and bind the INSERT query - protects against SQL injection attacks
        $stmt = $conn->prepare("INSERT INTO person (firstname, lastname, email) VALUES (?, ?, ?)");

        // set parameters and execute
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];

        $stmt->bind_param("sss", $firstname, $lastname, $email);
        
        $stmt->execute();

        $conn->close();
    }    
?>