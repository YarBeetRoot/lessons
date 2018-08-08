<?php
include 'components/db.php';
include 'components/validate.php';
//include 'components/requests.php';

$dbConnection = getConnection();

$sth = $dbConnection->prepare('SELECT student.name, `age`, university.name as universityName, university.description as universityDescr FROM `student`
INNER JOIN university 
ON student.university_id = university.id');
$sth->execute();
$studentsData = $sth->fetchAll();

if (isset($_POST['send']) && isValid()) {

    $success = true;
    $sth = $dbConnection->prepare('INSERT INTO student
    (name, age, university_id)
     VALUES (:name, :age, :university_id)');

    $result = $sth->execute([
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'university_id' => $_POST['universityId'],
        ]
    );

    if ($result) {
        $message = 'Пользователь добавлен';
    } else {
        $message = 'Ошибка добавление пользователя';
        $success = false;
    }

    header("Location: /hw06-08/index.php?success=$success&message=$message");
}

if (isset($_GET['success'])) {
    if ($_GET['success']) {
        echo "<p style='color:green'>{$_GET['message']}</p>";
    } else {
        echo "<p style='color:red'>{$_GET['message']}</p>";
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <hr>
    <div class="container">
        <form method="post" name="students" onsubmit="return validateForm()">
        <div class="columns">
            <div class="column is-half">
                <div class="field">
                    <label class="label">Имя сутеднта:</label>
                    <div class="control">
                        <input class="input" type="text" name="name" id="name" onchange="validateForm()">
                    </div>
                    <p class="help is-danger" id="name-help"></p>
                </div>
                <div class="field">
                    <label class="label">Возраст:</label>
                    <div class="control">
                        <input class="input" type="number" name="age" id="age" onchange="validateForm()">
                    </div>
                    <p class="help is-danger" id="age-help"></p>
                </div>
                <div class="field">
                    <label class="label">Университет:</label>
                    <div class="select">
                        <select name="universityId">
                            <option value="1">ДГМА</option>
                            <option value="2">КЕГИ</option>
                            <option value="3">ДЖКХ</option>
                        </select>
                    </div>
                </div>
                <input type="submit" name="send" value="Send" id="send" class="button is-success is-large is-fullwidth">
            </div>
            <div class="column is-half">
                <table class="table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Имя</th>
                        <th>возраст</th>
                        <th>ВУЗ</th>
                        <th>Описание</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($studentsData as $i => $row):?>
                        <tr>
                            <td><?php echo $i+1; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['universityName']; ?></td>
                            <td><?php echo $row['universityDescr']; ?></td>
                        </tr>
                        <?php endforeach;?>
                </table>
            </div>
        </div>
    </form>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>