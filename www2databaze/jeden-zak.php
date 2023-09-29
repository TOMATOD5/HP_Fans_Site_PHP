
<?php


    $db_host = "127.0.0.1";
    $db_user = "root";
    $db_password = null;
    $db_name = "skola";


    $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);


    if (mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }


    $sql = "SELECT *
            FROM student
            WHERE id = 1";


    $result = mysqli_query($connection, $sql);


    $students = mysqli_fetch_assoc($result);
    // var_dump($students);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informace o žákovi</title>
</head>
<body>
    <header>
        <h1>Informace o žákovi</h1>
    </header>

    <main>

    </main>

    <footer>

    </footer>
</body>
</html>