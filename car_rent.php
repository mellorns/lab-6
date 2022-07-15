<?php
function costInDate($db, $date)
{
    $date = new \MongoDB\BSON\UTCDateTime(strtotime($date) * 1000);
    $statement = $db->find(['date_start' => ['$lte' => $date], 'date_end'=>['$gte'=>$date]]);
    echo "<div id='save'>";
    foreach ($statement->toArray() as $data) {
        echo "Car: {$data['name']} Cost: {$data['cost']}<br>";
    }
    echo "</div>";
}

function lessRace($db, $race)
{
    $statement = $db->find(['race'=>['$gt'=>(int)$race]]);
    echo "<div id='save'>";
    foreach ($statement->toArray() as $data) {
        echo "Car: {$data['name']} Race: {$data['race']}<br>";
    }
    echo "</div>";
}

function carNames($db)
{
    $statement = $db->distinct("name");
    echo "<div id='save'>";
    foreach ($statement as $data) {
        echo "Car: $data<br>";
    }
    echo "</div>";
}