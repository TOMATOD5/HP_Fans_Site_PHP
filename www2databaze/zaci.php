<?php


    $db_host = "127.0.0.1";
    $db_user = "david";
    $db_password = "admin123";
    $db_name = "skola";


    $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);


    if (mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }


    // echo "Úspěšné přihlášení do databáze";

    $sql = "SELECT * FROM student";
    // echo "<br>";


    $result = mysqli_query($connection, $sql);
    // var_dump($result);
    // echo "<br>";
    // echo "<br>";
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($students);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Seznam žáků školy</h1>

    <?php if(empty($students)): ?>
        <p>Žádní žáci nebyli nalezeni</p>
    <?php else: ?>
        <ul>
            <?php foreach($students as $one_student): ?>
                <li>
                    <?php echo $one_student["first_name"]. " " .$one_student["second_name"] ?>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>

</body>
</html>