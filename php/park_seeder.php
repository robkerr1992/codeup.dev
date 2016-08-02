<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'codeup');

require_once 'db_connect.php';

$query = 'TRUNCATE national_parks';

$dbc->exec($query);


$parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1916-08-07', 'area_in_acres' => 47452.80],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => 76678.98],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172971.11],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999-10-21', 'area_in_acres' => 30750.03],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => 35835.08],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => 337597.83],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'area_in_acres' => 241904.26],
    ['name' => 'Kings Canyon', 'location' => 'California', 'date_established' => '1940-03-04', 'area_in_acres' => 461901.20],

];


$query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ';

foreach ($parks as $key => $park) {
    if ($key != 0) {
        $query .= ' , ';
    }

    $query .= "('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

}

$dbc->exec($query);