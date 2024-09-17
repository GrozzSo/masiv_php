<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Студенты</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Список студентов</h1>
    <?php
    // Задание 1
    $students = ["Анисимов", "Баширов", "Сидоров", "Силантьев", "Найдёнова", "Закирова", "Идиятова"];
    

    echo "<ul class='student-list'>";
    foreach ($students as $student) {
        echo "<li>$student</li>";
    }
    echo "</ul>";


    $count = count($students);
    echo "<p>Количество студентов: <strong>$count</strong></p>";


    $hasSidorov = in_array("Сидоров", $students) ? "Да" : "Нет";
    echo "<p>Есть ли Сидоров в списке? <strong>$hasSidorov</strong></p>";


    $expelled = array_pop($students);
    echo "<p>Удаленная фамилия: <strong>$expelled</strong></p>";

    // Задание 2
    $groups = [
        "Спортивный" => "Силантьев",
        "Художественный" => "Анисимов",
        "Музыкальный" => "Закирова",
        "Литературный" => "Идиятова",
        "Биологический" => "Фоменко"
    ];


    asort($groups);
    echo "<h2>Кружок - Фамилия</h2>";
    echo "<ul class='circle-list'>";
    foreach ($groups as $circle => $surname) {
        echo "<li>$circle - $surname</li>";
    }
    echo "</ul>";

    // Задание 3
    $studentInfo = [
        "Имя" => "Софья",
        "Фамилия" => "Найдёнова",
        "Группа" => "427-веб",
        "Хобби" => "Программирование",
        "Соцсети" => [
            "Telega" => " @pavlovna_sp",
            
        ]
    ];

    echo "<h2>Информация о студенте</h2>";
    echo "<p>Имя: <strong>{$studentInfo['Имя']}</strong></p>";
    echo "<p>Фамилия: <strong>{$studentInfo['Фамилия']}</strong></p>";
    echo "<p>Группа: <strong>{$studentInfo['Группа']}</strong></p>";
    echo "<p>Хобби: <strong>{$studentInfo['Хобби']}</strong></p>";
    echo "<h3>Соцсети:</h3>";
    foreach ($studentInfo['Соцсети'] as $network => $username) {
        echo "<p>$network: <strong>$username</strong></p>";
    }
    ?>
</div>

</body>
</html>
