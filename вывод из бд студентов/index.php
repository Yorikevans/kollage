<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>группа эИСП9-3</title>
</head>
<?php
$link = mysqli_connect("localhost", "ivzicjcn", "BcaiKu", "ivzicjcn_m1");

    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    else {
        print("");
    }

    $query = mysqli_query($link, 'SELECT `id`, `name`, `surname`, `lastname`, `image` FROM `students`');
?>
<body>
    <h1>Студенты группы эИСП9-3</h1>
    <div class="students">
        <?php while ($result = mysqli_fetch_array($query)): ?>
        <div class="card">
            <div class="img"><img src="<?php echo "{$result['image']}" ?>" width="300" height ="300" alt="error"></div>
            <div class="name">Имя: <?php echo "{$result['name']}" ?></div>
            <div class="surname">Фамилия: <?php echo "{$result['surname']}" ?></div>
            <div class="lastname">Отчество: <?php echo "{$result['lastname']}" ?></div>
        </div>
        <?php endwhile ?>
    </div>
</body>
</html>
<style>
    h1
    {
        text-align: center;
    }
    .students
    {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
</style>