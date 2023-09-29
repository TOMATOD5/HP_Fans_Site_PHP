
<?php

    require "database.php";

    if ( isset($_GET["id"]) and is_numeric($_GET["id"]) ) {
        $sql = "SELECT *
            FROM student
            WHERE id = ". $_GET["id"];

        $result = mysqli_query($connection, $sql);

        if ($result === false) {
            echo mysqli_error($connection);
        } else {
            $students = mysqli_fetch_assoc($result);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informace o žákovi</title>
</head>

<body>

    <?php require "header.php"; ?>

    <main>

        <section>
            <?php if ($students === null): ?>
                <p>Žák nenalezen</p>
            <?php else: ?>
                <h2><?= $students["first_name"]. " " .$students["second_name"] ?></h2>
                <p>Věk: <?= $students["age"] ?></p>
                <p>Dodatečné informace: <?= $students["life"] ?></p>
                <p>Kolej: <?= $students["college"] ?></p>
            <?php endif ?>    
        </section>

    </main>

    <?php require "footer.php"; ?>

</body>
</html>