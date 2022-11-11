<?php

$connection = new PDO(dsn:"mysql:host=localhost;dbname=test2;charset=utf8", username:"root", password:"");

// $query = "INSERT users (name, city_name) VALUE ('Сергей', 'Нижний Новгород')";
// $result = $connection->exec($query);
// echo $result;

/////////////////// создаем переменные в них записываем данные что хотив ввести в бд
//создаем массив где ключ это плейсхолдер а значение наша переменная 
//после этого создаем наш sql запрос с плейсхолдерами и подготавливаем его , после этого пробрасываем (execute)

// $name = 'Oleja1';
// $sity_n = 'Тула';

// $arr = [
//     'n' => $name,
//     'sity' => $sity_n
// ];
// $sqlPDO = "INSERT users (name, city_name) VALUE (:n, :sity)"; //готовим запрос с плейсхолдерами
// $query = $connection->prepare($sqlPDO); //подготовка запроса
// $query -> execute($arr);

// $sqlDelete = "DELETE FROM users WHERE id % 2 = 0";
// $query = $connection->exec($sqlDelete);
$name = 'Daniil';
$arrUP = [
    'nam' => $name
];
$sqlUpdete = "UPDATE users SET name = :nam WHERE id = 9";
$query = $connection->prepare($sqlUpdete);
$query -> execute($arrUP);
