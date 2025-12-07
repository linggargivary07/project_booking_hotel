<?php
require 'admin/functions.php';    
$rooms = query("SELECT * FROM room");
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Serene - Available Rooms</title>
    <link rel="stylesheet" href="css/user_room_style.css" />
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
          <a href="user_dashboard.php">Home</a>
          <a href="user_room.php" class="active">Rooms</a>
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
      <section class="room-list-header">
        <h1>Available Rooms</h1>
        <p>
          Discover your perfect stay with our elegant and comfortable
          accommodations
        </p>
      </section>

      <section class="filter-section">
        <span class="filter-label">Filter by:</span>
        <div class="filter-buttons">
          <button class="filter-btn active" data-filter="all">All Rooms</button>
          <button class="filter-btn" data-filter="available">Available</button>
          <button class="filter-btn" data-filter="premium">Premium</button>
        </div>
      </section>

      <section class="room-grid">
        <!-- card  -->
        <?php foreach($rooms as $room) : ?>
        <div class="room-card" data-status="<?= $room["status"] ?>" data-type="<?= $room["room_type"] ?>">
          <img
            src="../img/room_hotel/<?= $room["image_url"] ?>"
            alt="Room"
            class="room-image"
          />
          <div class="room-details">
            <h2 class="room-name"><?= $room["room_name"] ?></h2>
            <span class="room-status <?= $room["status"] ?>"><?= $room["status"] ?></span>
            <div class="room-specs">
              <span><i class="fa-solid fa-user-group"></i><?= $room["max_guest"] ?></span>
              <span><i class="fa-solid fa-bed"></i><?= $room["bed_type"] ?></span>
            </div>
            <div class="room-footer">
              <span class="room-price">Rp. <?= $room["price_per_night"] ?><small>/night</small></span>
              <button class="view-details-btn">View Details</button>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- <div class="room-card" data-status="available" data-type="premium">
          <img
            src="https://via.placeholder.com/400x250?text=Ocean+Suite+Image"
            alt="Ocean Suite"
            class="room-image"
          />
          <div class="room-details">
            <h2 class="room-name">Ocean Suite</h2>
            <span class="room-status available">Available</span>
            <div class="room-specs">
              <span><i class="fa-solid fa-user-group"></i> 4 Guests</span>
              <span><i class="fa-solid fa-bed"></i> 2 Queen Beds</span>
            </div>
            <div class="room-footer">
              <span class="room-price">$349<small>/night</small></span>
              <button class="view-details-btn">View Details</button>
            </div>
          </div>
        </div> -->

        <!-- <div class="room-card" data-status="available" data-type="standard">
          <img
            src="https://via.placeholder.com/400x250?text=Standard+Room+Image"
            alt="Standard Room"
            class="room-image"
          />
          <div class="room-details">
            <h2 class="room-name">Standard Room</h2>
            <span class="room-status available">Available</span>
            <div class="room-specs">
              <span><i class="fa-solid fa-user-group"></i> 2 Guests</span>
              <span><i class="fa-solid fa-bed"></i> Double Bed</span>
            </div>
            <div class="room-footer">
              <span class="room-price">$129<small>/night</small></span>
              <button class="view-details-btn">View Details</button>
            </div>
          </div>
        </div> -->

        <!-- <div class="room-card" data-status="limited" data-type="premium">
          <img
            src="https://via.placeholder.com/400x250?text=Presidential+Suite+Image"
            alt="Presidential Suite"
            class="room-image"
          />
          <div class="room-details">
            <h2 class="room-name">Presidential Suite</h2>
            <span class="room-status limited">Limited</span>
            <div class="room-specs">
              <span><i class="fa-solid fa-user-group"></i> 6 Guests</span>
              <span><i class="fa-solid fa-bed"></i> 3 King Beds</span>
            </div>v
            <div class="room-footer">
              <span class="room-price">$799<small>/night</small></span>
              <button class="view-details-btn">View Details</button>
            </div>
          </div>
        </div> -->

        <!-- <div class="room-card" data-status="available" data-type="standard">
          <img
            src="https://via.placeholder.com/400x250?text=Family+Room+Image"
            alt="Family Room"
            class="room-image"
          />
          <div class="room-details">
            <h2 class="room-name">Family Room</h2>
            <span class="room-status available">Available</span>
            <div class="room-specs">
              <span><i class="fa-solid fa-user-group"></i> 4 Guests</span>
              <span><i class="fa-solid fa-bed"></i> 2 Double Beds</span>
            </div>
            <div class="room-footer">
              <span class="room-price">$249<small>/night</small></span>
              <button class="view-details-btn">View Details</button>
            </div>
          </div>
        </div> -->

        <!-- <div class="room-card" data-status="unavailable" data-type="premium">
          <img
            src="https://via.placeholder.com/400x250?text=Penthouse+Image"
            alt="Penthouse"
            class="room-image"
          />
          <div class="room-details">
            <h2 class="room-name">Penthouse</h2>
            <span class="room-status unavailable">Unavailable</span>
            <div class="room-specs">
              <span><i class="fa-solid fa-user-group"></i> 3 Guests</span>
              <span><i class="fa-solid fa-bed"></i> 4 King Beds</span>
            </div>
            <div class="room-footer">
              <span class="room-price">$1,299<small>/night</small></span>
              <button class="view-details-btn disabled" disabled>Booked</button>
            </div>
          </div>
        </div> -->

        <!-- <div class="room-card" data-status="available" data-type="standard">
          <img
            src="https://via.placeholder.com/400x250?text=Garden+View+Image"
            alt="Garden View"
            class="room-image"
          />
          <div class="room-details">
            <h2 class="room-name">Garden View</h2>
            <span class="room-status available">Available</span>
            <div class="room-specs">
              <span><i class="fa-solid fa-user-group"></i> 2 Guests</span>
              <span><i class="fa-solid fa-bed"></i> Queen Bed</span>
            </div>
            <div class="room-footer">
              <span class="room-price">$169<small>/night</small></span>
              <button class="view-details-btn">View Details</button>
            </div>
          </div>
        </div> -->

        <!-- <div class="room-card" data-status="available" data-type="premium">
          <img
            src="https://via.placeholder.com/400x250?text=Executive+Room+Image"
            alt="Executive Room"
            class="room-image"
          />
          <div class="room-details">
            <h2 class="room-name">Executive Room</h2>
            <span class="room-status available">Available</span>
            <div class="room-specs">
              <span><i class="fa-solid fa-user-group"></i> 2 Guests</span>
              <span><i class="fa-solid fa-bed"></i> King Bed</span>
            </div>
            <div class="room-footer">
              <span class="room-price">$219<small>/night</small></span>
              <button class="view-details-btn">View Details</button>
            </div>
          </div>
        </div> -->

        <!-- <div class="room-card" data-status="limited" data-type="premium">
          <img
            src="https://via.placeholder.com/400x250?text=Honeymoon+Suite+Image"
            alt="Honeymoon Suite"
            class="room-image"
          />
          <div class="room-details">
            <h2 class="room-name">Honeymoon Suite</h2>
            <span class="room-status limited">Limited</span>
            <div class="room-specs">
              <span><i class="fa-solid fa-user-group"></i> 2 Guests</span>
              <span><i class="fa-solid fa-bed"></i> King Bed</span>
            </div>
            <div class="room-footer">
              <span class="room-price">$449<small>/night</small></span>
              <button class="view-details-btn">View Details</button>
            </div>
          </div>
        </div> -->
      </section>
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

    <script src="script/user_room_script.js"></script>
  </body>
</html>
