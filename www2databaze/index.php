<?php


    $students = [
        [
            "first_name" => "Harry",
            "second_name" => "Potter",
            "age" => 11,
            "life" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae temporibus ullam harum, nostrum nobis inventore, quaerat sit porro consequuntur, delectus eos.",
            "college" => "Nebelvír",
        ],
        [
            "first_name" => "Hermiona",
            "second_name" => "Grangerová",
            "age" => 12,
            "life" => "Repudiandae temporibus ullam harum, nostrum nobis inventore, quaerat sit porro consequuntur, delectus eos. Ducimus facere doloribus fuga error? Consectetur dolorem praesentium recusandae!",
            "college" => "Nebelvír",
        ],
        [
            "first_name" => "Ron",
            "second_name" => "Weasley",
            "age" => 11,
            "life" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae temporibus ullam harum, nostrum nobis inventore, quaerat sit porro consequuntur, delectus eos.",
            "college" => "Nebelvír",
        ],
        [
            "first_name" => "Draco",
            "second_name" => "Malfoy",
            "age" => 12,
            "life" => "Amet consectetur adipisicing elit. Repudiandae temporibus ullam harum, nostrum nobis inventore, quaerat sit porro consequuntur, delectus eos. ",
            "college" => "Zmijozel",
        ],
    ];


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Škola čar a kouzel v Bradavicích</h1>
    </header>


    <main>
        <section>
            <?php foreach($students as $one_student): ?>
                    <h2><?= $one_student["first_name"]." ".$one_student["second_name"] ?></h2>
            <?php endforeach ?>
        </section>
    </main>


    <footer></footer>
</body>
</html>