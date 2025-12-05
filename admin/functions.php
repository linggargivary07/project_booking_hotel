<?php
$conn = mysqli_connect("localhost", "root", "", "booking_hotels");

// ini_set('display_errors', 1);
// error_reporting(E_ALL);


// if ($conn->connect_error) {
//     // Jika koneksi gagal, hentikan eksekusi dan tampilkan pesan error
//     die("Koneksi gagal: " . $conn->connect_error);
// }
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $name = $data['name'];
    $description = htmlspecialchars($data['description']);
    $price_per_night = htmlspecialchars($data['price_per_night']);
    $max_guest = htmlspecialchars($data['max_guest']);
    $bed_type = htmlspecialchars($data['bed_type']);
    $status = htmlspecialchars($data['status']);
    $room_type = htmlspecialchars($data['room_type']);
    $image_url = htmlspecialchars($data['image_url']);

    $query = "INSERT INTO room 
        (room_id, name, description, price_per_night, max_guest, bed_type, image_url, status, room_type)
        VALUES 
        (NULL, '$name', '$description', '$price_per_night', '$max_guest', '$bed_type', '$image_url', '$status', '$room_type')
    ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));


    return mysqli_affected_rows($conn);
}


?>