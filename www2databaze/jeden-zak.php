
<?php

    require "assets/database.php";
    require "assets/zak.php";

    $connection = connectionDB();

    if ( isset($_GET["id"]) and is_numeric($_GET["id"]) ) {
        $students = getStudent($connection, $_GET["id"]);
    }

?>


<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informace o žákovi</title>
</head>

    <body>

        <?php require "assets/header.php"; ?>

        <main>
            <section class="main-heding">
                <h1>Informace o žákovi</h1>
            </section>

            <section>
            <?php if ($students === null): ?>
                <p>Žák nenalezen</p>
            <?php else: ?>
                <h2><?= htmlspecialchars($students["first_name"]). " " .htmlspecialchars($students["second_name"]) ?></h2>
                <p>Věk: <?= htmlspecialchars($students["age"]) ?></p>
                <p>Dodatečné informace: <?= htmlspecialchars($students["life"]) ?></p>
                <p>Kolej: <?= htmlspecialchars($students["college"]) ?></p>
            <?php endif ?>    
        </section>

        <section class="buttons">
            <a href="editace-zaka.php?id=<?= $students['id'] ?>">Editovat</a>
        </section>  

        </main>

        <?php require "assets/footer.php"; ?>

    </body>

</html>