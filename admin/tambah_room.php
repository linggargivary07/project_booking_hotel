<?php
require 'functions.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);


if( isset($_POST["submit"]) ) {
    // cek apakah data berhasil ditambahkan atau tidak

    if( tambah($_POST) > 0 ) {
        echo "data berhasil ditambahkan!";
    } else {
        echo "data gagal ditambahkan!";
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" class="room-form" style="max-width:500px; margin:auto;">
    <h2>Add New Room</h2>

    <label for="name">Room Name</label>
    <input type="text" name="name" id="name"><br>

    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea><br>

    <label for="price_per_night">Price Per Night ($)</label>
    <input type="number" id="price_per_night" name="price_per_night"><br>

    <label for="max_guest">Max Guest</label>
    <input type="number" id="max_guest" name="max_guest" min="1" required><br>

    <label for="bed_type">Bed Type</label>
    <select name="bed_type" id="bed_type" required>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Queen">Queen</option>
        <option value="King">King</option>
    </select><br>

    <label for="status">Status</label>
    <select name="status" id="status" required>
        <option value="available">Available</option>
        <option value="unavailable">Maintenance</option>
    </select><br>

    <label for="room_type">Room Type</label>
    <select name="room_type" id="room_type">
        <option value="Standard">Standard</option>
        <option value="Deluxe">Deluxe</option>
        <option value="Suite">Suite</option>
        <option value="Family">Family</option>
    </select><br>

    <label for="image_url">Image URL</label>
    <input type="text" name="image_url" id="image_url" required><br>

    <br><br>
    <button type="submit" name="submit">Add Room</button>
</form>

</body>
</html>


