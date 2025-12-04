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

    <main class="container main-content">
      <div class="room-content-grid">
        <section class="room-info-section">
          <div class="room-image-container">
            <img
              src="https://via.placeholder.com/1000x550?text=Deluxe+King+Room"
              alt="Deluxe King Room Interior"
              class="main-room-image"
            />
          </div>

          <div class="room-title-bar">
            <h1 class="room-name">Deluxe King Room</h1>
            <span class="room-status available">Available</span>
          </div>

          <div class="room-specs">
            <span><i class="fa-solid fa-user-group"></i> Up to 2 guests</span>
            <span class="dot-separator"></span>
            <span><i class="fa-solid fa-bed"></i> 1 King Bed</span>
            <span class="dot-separator"></span>
            <span><i class="fa-solid fa-square"></i> 35 sqm</span>
          </div>

          <div class="room-description">
            <h2>Room Description</h2>
            <p>
              Experience luxury and comfort in our spacious Deluxe King Room.
              Featuring a plush king-size bed, modern amenities, and stunning
              city views, this room is perfect for business travelers and
              couples seeking a premium stay. The contemporary design combines
              elegance with functionality, ensuring your comfort throughout your
              visit.
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
            <span class="main-price">$249</span>
            <span class="price-unit">/ night</span>
            <p class="includes-info">Includes taxes and fees</p>
          </div>

          <form class="booking-form">
            <div class="form-group date-input-group">
              <label for="checkInDate">Check-in Date</label>
              <input type="date" id="checkInDate" value="2024-03-15" />
              <i class="fa-solid fa-calendar-alt calendar-icon"></i>
            </div>

            <div class="form-group date-input-group">
              <label for="checkOutDate">Check-out Date</label>
              <input type="date" id="checkOutDate" value="2024-03-18" />
              <i class="fa-solid fa-calendar-alt calendar-icon"></i>
            </div>

            <div class="form-group">
              <label for="guests">Guests</label>
              <select id="guests">
                <option value="1" selected>1 Guest</option>
                <option value="2">2 Guests</option>
                <option value="3">3 Guests</option>
              </select>
            </div>
          </form>

          <div class="price-breakdown">
            <div class="price-line">
              <span>3 nights × $249</span>
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
          </div>

          <button class="book-btn" id="bookRoomBtn">Book This Room</button>
          <p class="cancellation-policy">
            Free cancellation until 24 hours before check-in
          </p>
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

    <script src="script/user_room_detail_script.js"></script>
  </body>
</html>
