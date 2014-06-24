<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'alicia', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// Create the query and assign to var
// $query = 'CREATE TABLE national_parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(75) NOT NULL,
//     location VARCHAR(240) NOT NULL,
//     date_established DATE NOT NULL,
//     area_in_acres FLOAT(15),
//     park_description TEXT,
//     PRIMARY KEY (id)
// )';

// Run query, if there are errors they will be thrown as PDOExceptions
//$dbc->exec($query);

//$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('benb@codeup.com', 'Ben Batschelet')";


$parks = [
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => '76518.98', 'park_description' => "It's beautiful"],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242755.94', 'park_description' => "It's beautiful"],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21', 'park_description' => "It's beautiful"],
    ['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-05-14', 'area_in_acres' => '46766.45', 'park_description' => "It's beautiful"],
    ['name' => 'Death Valley', 'location' => 'California, Nevada', 'date_established' => '1994-10-31', 'area_in_acres' => '3372401.96', 'park_description' => "It's beautiful"],
    ['name' => 'Everglades', 'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '1508537.90', 'park_description' => "It's beautiful"],
    ['name' => 'Grand Canyon', 'location' => 'Arizona', 'date_established' => '1919-02-26', 'area_in_acres' => '1217403.32', 'park_description' => "It's beautiful"],
    ['name' => 'Sequoia', 'location' => 'California', 'date_established' => '1890-09-25', 'area_in_acres' => '404051.17', 'park_description' => "It's beautiful"],
    ['name' => 'Yellowstone', 'location' => 'Wyoming, Montana, Idaho', 'date_established' => '1872-03-01', 'area_in_acres' => '2219790.71', 'park_description' => "It's beautiful"],
    ['name' => 'Yosemite', 'location' => 'California', 'date_established' => '1890-10-01', 'area_in_acres' => '761266.19', 'park_description' => "It's beautiful"]
];

$stmt = $dbc->prepare("INSERT INTO national_parks (name, location, date_established, area_in_acres, park_description) VALUES (:name, :location, :date_established, :area_in_acres, :park_description)");

foreach ($parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':park_description', $park['park_description'], PDO::PARAM_STR);

	$stmt->execute();

}
?>