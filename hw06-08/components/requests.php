<?php
include 'components/db.php';
include 'components/validate.php';

function getStudentsData() {
    $dbConnection = getConnection();
    $sth = $dbConnection->prepare('SELECT student.name, `age`, university.name as universityName, university.description as universityDescr FROM `student`
INNER JOIN university 
ON student.university_id = university.id');
    $sth->execute();
    return $sth->fetchAll();
}
function insertStudent() {
    $dbConnection = getConnection();
    $sth = $dbConnection->prepare('INSERT INTO student
    (name, age, university_id)
     VALUES (:name, :age, :university_id)');

    return $sth->execute([
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'university_id' => $_POST['universityId'],
        ]
    );
}

