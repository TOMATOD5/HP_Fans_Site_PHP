<?php

    require "assets/database.php";

    $sql = "SELECT * FROM student";

    $connection = connectionDB();
   
    $result = mysqli_query($connection, $sql);

    if($result === false) {
        echo mysqli_error($connection);
    } else {
        $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naši žáci</title>
</head>

    <body>

        <?php require "assets/header.php"; ?>

        <main>

            <section class="main-heding">
                <h1>Seznam žáků školy</h1>
            </section>


            <section class="students-list">

                

                    <?php if(empty($students)): ?>
                        <p>Žádní žáci nebyli nalezeni</p>
                    <?php else: ?>
                        <ul>
                            <?php foreach($students as $one_student): ?>
                            <li>
                                <?php echo htmlspecialchars($one_student["first_name"]). " " .htmlspecialchars($one_student["second_name"]) ?>
                            </li>
                            <a href="jeden-zak.php?id=<?= $one_student['id'] ?>">Více informací</a>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                    
                    <a href="index.php">Zpět na hlavní stranu</a>

            </section>
        </main>

        <?php require "assets/footer.php"; ?>
        
    </body>

</html>