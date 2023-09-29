<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    require "assets/database.php";


    $sql = "INSERT INTO student (first_name, second_name, age, life, college)
    VALUES (?, ?, ?, ?, ?)";
   
   $connection = connectionDB();

    $statement = mysqli_prepare($connection, $sql);


    if ($statement === false) {
        echo mysqli_error($connection);
    } else {
        mysqli_stmt_bind_param($statement, "ssiss", $_POST["first_name"], $_POST["second_name"], $_POST["age"], $_POST["life"], $_POST["college"]);


        if(mysqli_stmt_execute($statement)) {
            $id = mysqli_insert_id($connection);
            //echo "Úspěšně vložen žák s id: $id";
            header("location: jeden-zak.php?id=$id");

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
                <input  type="text"
                        name="first_name"
                        placeholder="Křestní jméno"
                        value="<?= htmlspecialchars($first_name)  ?>"
                        required
                ><br>


                <input  type="text"
                        name="second_name"
                        placeholder="Příjmení"
                        value="<?= htmlspecialchars($second_name) ?>"
                        required
                ><br>


                <input type="number"
                        name="age"
                        placeholder="Věk"
                        min="10"
                        value="<?= htmlspecialchars($age) ?>"  
                        required
                ><br>


                <textarea   name="life"
                            placeholder="Podrobnosti o žákovi"
                            required><?= htmlspecialchars($life) ?></textarea><br>


                <input type="text"
                        name="college"
                        placeholder="Kolej"
                        value="<?= htmlspecialchars($college) ?>"  
                        required
                ><br>


                <input type="submit" value="Přidat">
            </form>

        </section>
    </main>


    <?php require "assets/footer.php"; ?>

    </body>
</html>