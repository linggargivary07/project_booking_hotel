<?php
// user_room_detail.php
// This page displays detailed information about a specific room.
require 'admin/functions.php';
$room_id = $_GET['room_id'];
$room = query("SELECT * FROM room WHERE room_id = $room_id")[0];

if( isset($_POST["booking"]) ) {
    // Process booking form 
    if( booking($_POST) > 0 ) {
        echo "script>alert('Booking successful!');</script>";
    } else {
        echo "data gagal ditambahkan!";
    }   
    // (Handled in process_booking.php)
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Serene - Deluxe King Room Details</title>
    <link rel="stylesheet" href="css/user_room_detail_style.css" />
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

    <!-- main container -->
    <main class="container main-content">
      <div class="room-content-grid">
        <section class="room-info-section">
          <div class="room-image-container">
            <img
              src="../img/room_hotel/<?= $room["image_url"] ?>"
              alt="Deluxe King Room Interior"
              class="main-room-image"
            />
          </div>

          <div class="room-title-bar">
            <h1 class="room-name"><?= $room["room_name"] ?></h1>
            <span class="room-status <?= $room["status"] ?>"><?= $room["status"] ?></span>
          </div>

          <div class="room-specs">
            <span><i class="fa-solid fa-user-group"></i> Up to <?= $room["max_guest"] ?> guests</span>
            <span class="dot-separator"></span>
            <span><i class="fa-solid fa-bed"></i> <?= $room["bed_type"] ?></span>
            <span class="dot-separator"></span>
          </div>

          <div class="room-description">
            <h2>Room Description</h2>
            <p>
              <?= $room["description"] ?>
            </p>
          </div>

          <div class="room-amenities">
            <h2>Room Amenities</h2>
            <div class="amenities-grid">
              <div class="amenity-item">
                <i class="fa-solid fa-wifi"></i> Free WiFi
              </div>
              <div class="amenity-item">
                <i class="fa-solid fa-lock"></i> Private Bathroom
              </div>
              <div class="amenity-item">
                <i class="fa-solid fa-mug-hot"></i> Coffee Maker
              </div>
              <div class="amenity-item">
                <i class="fa-solid fa-tv"></i> Smart TV
              </div>
              <div class="amenity-item">
                <i class="fa-solid fa-square-parking"></i> Free Parking
              </div>
              <div class="amenity-item">
                <i class="fa-solid fa-vault"></i> Safe Box
              </div>
              <div class="amenity-item">
                <i class="fa-solid fa-snowflake"></i> Air Conditioning
              </div>
              <div class="amenity-item">
                <i class="fa-solid fa-dumbbell"></i> Gym Access
              </div>
              <div class="amenity-item">
                <i class="fa-solid fa-bell"></i> Room Service
              </div>
            </div>
          </div>
        </section>

        <aside class="booking-widget">
          <div class="price-box">
            <span class="main-price"><?= $room["price_per_night"] ?></span>
            <span class="price-unit">/ night</span>
            <p class="includes-info">Includes taxes and fees</p>
          </div>

          <!-- form untuk booking  -->
          <form class="booking-form" method="POST" action="">
            <input type="hidden" name="room_id" value="<?= $room['room_id']; ?>">
            <div class="form-group date-input-group">
              <label for="checkInDate">Check-in Date</label>
              <input type="date" name="check_in_date" id="checkInDate" value="2024-03-15" />
              <i class="fa-solid fa-calendar-alt calendar-icon"></i>
            </div>

            <div class="form-group date-input-group">
              <label for="checkOutDate">Check-out Date</label>
              <input type="date" name="check_out_date" id="checkOutDate" value="2024-03-18" />
              <i class="fa-solid fa-calendar-alt calendar-icon"></i>
            </div>

            <div class="form-group">
              <label for="guests">Guests</label>
              <select id="guests" name=num_guests>
                <option value="1" selected>1 Guest</option>
                <option value="2">2 Guests</option>
                <option value="3">3 Guests</option>
                <option value="4">4 Guests</option>
                <option value="5">5 Guests</option>
                <option value="6">6 Guests</option>
              </select>
            </div>
            <button class="book-btn" name="booking" id="bookRoomBtn">Book This Room</button>
            <p class="cancellation-policy">Free cancellation until 24 hours before check-in</p>
            </form>

          <!-- <div class="price-breakdown">
            <div class="price-line">
              <span>3 nights × Rp. 2000</span>
              <span>$747</span>
            </div>
            <div class="price-line">
              <span>Service fee</span>
              <span>$37</span>
            </div>
            <div class="price-line">
              <span>Taxes</span>
              <span>$62</span>
            </div>
            <div class="total-line">
              <span>Total</span>
              <span>$846</span>
            </div>
          </div> -->

          
        </aside>
      </div>
    </main>

    <footer class="main-footer">
      <div class="container footer-content">
        <div class="footer-about">
          <h3 class="logo">Serene</h3>
          <p>
            Experience luxury and comfort in every stay. Your perfect getaway
            awaits.
          </p>
        </div>
        <div class="footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Rooms</a></li>
            <li><a href="#">Amenities</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h4>Support</h4>
          <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Cancellation Policy</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div class="footer-connect">
          <h4>Connect</h4>
          <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        &copy; 2024 Serene Hotel. All rights reserved.
      </div>
    </footer>

    <!-- <script src="script/user_room_detail_script.js"></script> -->
  </body>
</html>
