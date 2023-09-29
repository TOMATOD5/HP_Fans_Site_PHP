<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    require "assets/database.php";


    $sql = "INSERT INTO student (first_name, second_name, age, life, college)
    VALUES (?, ?, ?, ?, ?)";
   
    $statement = mysqli_prepare($connection, $sql);


    if ($statement === false) {
        echo mysqli_error($connection);
    } else {
        mysqli_stmt_bind_param($statement, "ssiss", $_POST["first_name"], $_POST["second_name"], $_POST["age"], $_POST["life"], $_POST["college"]);


        if(mysqli_stmt_execute($statement)) {
            $id = mysqli_insert_id($connection);
            echo "Úspěšně vložen žák s id: $id";
        } else {
            echo mysqli_stmt_error($statement);
        }
    }
}


?>



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadávání nových žáků</title>
</head>
    <body>
        
    <?php require "assets/header.php"; ?>

    <main>

    <section class="add-form">

        <form action="pridat-zaka.php" method="POST">
            <input type="text" name="first_name" placeholder="Křestní jméno"><br>
            <input type="text" name="second_name" placeholder="Příjmení"><br>
            <input type="number" name="age" placeholder="Věk" min="10"><br>
            <textarea name="life" placeholder="Podrobnosti o žákovi"></textarea><br>
            <input type="text" name="college" placeholder="Kolej"><br>
            <input type="submit" value="Přidat">
        </form>    

    </section>

    </main>

    <?php require "assets/footer.php"; ?>

    </body>
</html>