<?php
include 'components/db.php';
include 'components/validate.php';

function makeRequest($sql, $options = []){
    $dbConnection = getConnection();
    $sth = $dbConnection->prepare($sql);
    $sth->execute($options);
    return $sth;
}

function getStudentsData() {
    $sql = 'SELECT student.name, `age`, university.name as universityName, university.description as universityDescr FROM `student`
INNER JOIN university 
ON student.university_id = university.id';
    $sth = makeRequest($sql);
    return $sth->fetchAll();
}
function insertStudent() {

    $sql = 'INSERT INTO student
    (name, age, university_id)
     VALUES (:name, :age, :university_id)';
    $sth = makeRequest($sql, [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'university_id' => $_POST['universityId'],
    ]);
    return $sth;
}

