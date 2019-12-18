<?php
include "connection.php";

function generateRandomString($length = 5)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generatePrice($flight_priority)
{
    if ($flight_priority == "Economy") {
        $price = 357000;
    } else if ($flight_priority == "Business") {
        $price = 1200000;
    } else {
        $price = 2500000;
    }
    return $price;
}

$booking_id = generateRandomString();
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$dep_date = $_POST['dep_date'];
$cust_id = $_POST['cust_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$title = $_POST['title'];
$nationality = $_POST['nationality'];
$flight_priority = $_POST['flight_prio'];
$airlines = $_POST['airlines'];
$price = generatePrice($flight_priority);

$SQL = "INSERT INTO booking(booking_id, origin, destination , dep_date , cust_id , firstname , lastname , title , nationality , flight_priority , airlines , price ) 
        VALUE('$booking_id', '$origin', '$destination', '$dep_date', '$cust_id', '$firstname', '$lastname', '$title', '$nationality', 
        '$flight_priority', '$airlines', '$price')";

if (mysqli_query($connect, $SQL)) {
    echo "Record berhasil ditambahkan";
} else {
    echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
}

mysqli_close($connect);
