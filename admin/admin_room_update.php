<?php
require 'functions.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

// ambil id
$id = $_GET['room_id'];
// query data berdasarkan id
$room = query("SELECT * FROM room WHERE room_id = $id")[0];

if( isset($_POST["submit"]) ) {
    // cek apakah data berhasil diubah atau tidak
    // var_dump($_POST);
    // var_dump($_FILES);

    if( update($_POST) > 0 ) {
        echo "data berhasil diubah!";
    } else {
        echo "data gagal ditambahkan!";
    }   
}

// echo "hello world";
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Admin - Add New Room</title>
    <link rel="stylesheet" href="css/admin_room_management_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <div class="main-wrapper">

        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Hotel Admin</h2>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="active"><a href="#"><i class="fa-solid fa-bed"></i> Room Management</a></li>
                    <li><a href="#"><i class="fa-solid fa-calendar-check"></i> Bookings</a></li>
                    <li><a href="#"><i class="fa-solid fa-users"></i> Guests</a></li>
                    <li><a href="#"><i class="fa-solid fa-cog"></i> Settings</a></li>
                </ul>
            </nav>
        </aside>

        <div class="content-area">
            
            <header class="content-header">
                <div class="header-left">
                    <h1 class="page-title">Dashboard</h1>
                    <p class="greeting">Welcome back, John</p>
                </div>
                <button class="menu-toggle"><i class="fa-solid fa-bars"></i></button>
            </header>

            <main class="dashboard-content">
                
                <div class="card add-room-form-card">

                    <!-- form untuk room -->
                    <form id="add-room-form" action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="room_id" value="<?= $room['room_id']; ?>">
                        
                        <div class="form-group">
                            <label for="room_name">Room Name</label>
                            <input type="text" id="room_name" name="room_name" placeholder="nama ruang" value="<?= $room['room_name'];?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="5" placeholder="tuliskan detail dari room. termasuk fitur fitur yang ada" value="<?= $room['description']; ?>"></textarea>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="price_per_night">Price per Night</label>
                                <input type="text" id="price_per_night" name="price_per_night" value="<?= $room['price_per_night']; ?>" placeholder="000" required>
                            </div>
                            <div class="form-group">
                                <label for="max_guest">Max Guest</label>
                                <input type="number" id="max_guest" name="max_guest" placeholder="2" min="1" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bed_type">Bed Type</label>
                            <select id="bed_type" name="bed_type" required>
                                <option value="" disabled selected>Select bed type</option>
                                <option value="King">King</option>
                                <option value="Queen">Queen</option>
                                <option value="Double">Double</option>
                                <option value="Single">Single</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="status">Room Status</label>
                                <select id="status" name="status" required>
                                    <option value="available">Available</option>
                                    <option value="unavalable">Unavailable</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="room_type">Room Type</label>
                                <select id="room_type" name="room_type" required>
                                    <option value="Standard">Standard</option>
                                    <option value="Deluxe">Deluxe</option>
                                    <option value="Suite">Suite</option>
                                    <option value="Family">Family</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group image-upload-area">
                            <label for="roomImage">Room Image</label>
                            <div class="drop-area" id="dropArea">
                                <i class="fa-solid fa-cloud-upload-alt upload-icon"></i>
                                <p>Drag and drop your image here <br> or click to browse from your computer</p>

                                <!-- input gambar -->
                                <input type="file" id="roomImage" name="image_url" accept="image/*" hidden required>
                                <button type="button" class="btn-secondary" id="chooseFileBtn">Choose File</button>
                            </div>
                            <span id="file-name" class="file-info-text">No file chosen.</span>
                        </div>
                        
                        <div class="form-actions">
                            <button type="button" class="btn-cancel">Cancel</button>
                            <button name="submit" type="submit" class="btn-primary save-btn">Save Room</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script src="script/admin_room_add_script.js"></script>
</body>
</html>