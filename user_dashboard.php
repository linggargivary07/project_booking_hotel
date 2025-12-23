<?php
// user_dashboard.php
require "admin/functions.php";
session_start();

// Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$bookings = query("SELECT * FROM booking WHERE user_id = $user_id");
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BHotel - User Dashboard</title>
    <link rel="stylesheet" href="css/user_dashboard_style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>
  <body>
    <header class="navbar">
      <div class="container">
        <div class="logo">Serene</div>
        <nav class="nav-links">
          <a href="user_dashboard.php" class="active">Home</a>
          <a href="user_room.php">Rooms</a>
          <a href="user_history.php">History</a>
          <a href="#">Contact</a>
        </nav>
        <div class="user-info">
          <a href="#">Dashboard</a>
          <a href="user_profile.php">
            <div class="profile-icon">
              <i class="fa-solid fa-user"></i>
            </div>
            Profile
          </a>
        </div>
        <button class="menu-toggle"><i class="fa-solid fa-bars"></i></button>
      </div>
    </header>

    <main class="container main-content">
      <section class="dashboard-header">
        <h1>Welcome back, human</h1>
        <p>Manage your bookings and explore new destinations</p>
      </section>

      <section class="active-bookings">
        <div class="section-title-bar">
          <h2>Active Bookings</h2>
          <a href="user_room.php">
            <button class="new-booking-btn">
            <i class="fa-solid fa-plus"></i> New Booking
          </button>
          </a>
          
        </div>

        <!-- // pengungalanganan data booking dari database -->
        <?php foreach ($bookings as $booking): ?>
          <!-- ambil gambar room dari database berdasarkan room_id di booking -->
        <?php
          $room_id = $booking['room_id'];
          $room = query("SELECT * FROM room WHERE room_id = $room_id")[0];
        ?>
        <div class="booking-card" data-status="<?= $booking["booking_status"] ?>">
          <img
            src="../img/room_hotel/<?= $room['image_url'] ?>"
            alt="<?= $room['room_name'] ?>"
            class="hotel-image"
          />
          <div class="booking-details">
            <h3 class="hotel-name"><?= $room['room_name'] ?></h3>
            <p class="room-info"><?= $room['description'] ?></p>

            <div class="booking-specs">
              <div class="spec-item">
                <span class="spec-label">Check-in</span>
                <span class="spec-value"><?= $booking['check_in_date'] ?></span>
              </div>
              <div class="spec-item">
                <span class="spec-label">Check-out</span>
                <span class="spec-value"><?= $booking['check_out_date'] ?></span>
              </div>
              <div class="spec-item">
                <span class="spec-label">Guests</span>
                <span class="spec-value"><?= $booking['num_guests'] ?></span>
              </div>
            </div>
          </div>

          <div class="booking-actions">
            <span class="status <?= $booking['booking_status'] ?>"><?= $booking['booking_status'] ?></span>
            <button class="action-btn view-btn">View</button>
            <button class="action-btn modify-btn">Modify</button>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- <div class="booking-card" data-status="upcoming">
          <img
            src="https://via.placeholder.com/150x100?text=Seaside+Resort"
            alt="Seaside Resort & Spa"
            class="hotel-image"
          />
          <div class="booking-details">
            <h3 class="hotel-name">Seaside Resort & Spa</h3>
            <p class="room-info">Ocean View Room • Room 212</p>

            <div class="booking-specs">
              <div class="spec-item">
                <span class="spec-label">Check-in</span>
                <span class="spec-value">Jan 15, 2025</span>
              </div>
              <div class="spec-item">
                <span class="spec-label">Check-out</span>
                <span class="spec-value">Jan 20, 2025</span>
              </div>
              <div class="spec-item">
                <span class="spec-label">Guests</span>
                <span class="spec-value">2 Adults, 1 Child</span>
              </div>
            </div>
          </div>

          <div class="booking-actions">
            <span class="status upcoming">Upcoming</span>
            <button class="action-btn view-btn">View</button>
            <button class="action-btn modify-btn">Modify</button>
          </div>
        </div> -->

        <!-- <div class="booking-card" data-status="upcoming">
          <img
            src="https://via.placeholder.com/150x100?text=Seaside+Resort"
            alt="Seaside Resort & Spa"
            class="hotel-image"
          />
          <div class="booking-details">
            <h3 class="hotel-name">Seaside Resort & Spa</h3>
            <p class="room-info">Ocean View Room • Room 212</p>

            <div class="booking-specs">
              <div class="spec-item">
                <span class="spec-label">Check-in</span>
                <span class="spec-value">Jan 15, 2025</span>
              </div>
              <div class="spec-item">
                <span class="spec-label">Check-out</span>
                <span class="spec-value">Jan 20, 2025</span>
              </div>
              <div class="spec-item">
                <span class="spec-label">Guests</span>
                <span class="spec-value">2 Adults, 1 Child</span>
              </div>
            </div>
          </div>

          <div class="booking-actions">
            <span class="status upcoming">Upcoming</span>
            <button class="action-btn view-btn">View</button>
            <button class="action-btn modify-btn">Modify</button>
          </div>
        </div> -->
      </section>
    </main>

    <script src="script/user_dashboard_script.js"></script>
  </body>
</html>
