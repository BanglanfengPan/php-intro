<ul>
<?php

include_once 'db.php';

    $sql = 'SELECT * FROM users';

    $result = $db->query($sql);

    foreach ($result as $row) {
        # redirect to other pages where using which we an either update or delete rows we retrieved
        printf(
            '<li>
                <span style="color: %s">%s (%s)</span>
                <a href="delete.php?id=%s">delete</a>
                <a href="update.php?id=%s">update</a>
            </li>',
            htmlspecialchars($row['color'], ENT_QUOTES),
            htmlspecialchars($row['name'], ENT_QUOTES),
            htmlspecialchars($row['gender'], ENT_QUOTES),
            htmlspecialchars($row['id'], ENT_QUOTES),
            htmlspecialchars($row['id'], ENT_QUOTES),
        );
    }
?>
</ul>
