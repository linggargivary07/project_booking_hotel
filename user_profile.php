<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Serene - User Profile</title>
    <link rel="stylesheet" href="css/user_profile_style.css" />
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
          <a href="user_room.php">Rooms</a>
          <a href="user_history.php">History</a>
          <a href="#">Contact</a>
        </nav>
        <div class="user-info">
          <a href="#">Dashboard</a>
          <a href="user_profile.php" class="active">
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
      <section class="card profile-section personal-info-card">
        <div class="section-header">
          <h2>Personal Information</h2>
          <a href="user_edit_profile.php">
            <button class="edit-btn">
            <i class="fa-solid fa-pen-to-square"></i> Edit Profile
            </button>
          </a>
          
        </div>

        <div class="info-grid">
          <div class="info-group">
            <span class="label">Full Name</span>
            <span class="value">Sarah xxxxxxxxxx</span>
          </div>
          <div class="info-group">
            <span class="label">Email Address</span>
            <span class="value">sarah.xxxxxx@email.com</span>
          </div>
          <div class="info-group">
            <span class="label">Phone Number</span>
            <span class="value">+1 (555) 123-4567</span>
          </div>

          <div class="info-group">
            <span class="label">Date of Birth</span>
            <span class="value">March 15, 1990</span>
          </div>
          <div class="info-group">
            <span class="label">Location</span>
            <span class="value">New York, United States</span>
          </div>
          <div class="info-group">
            <span class="label">Member Since</span>
            <span class="value">January 2022</span>
          </div>
        </div>

        <div class="profile-picture-container">
          <img
            src="https://i.ibb.co/L5k6Y1G/woman-profile.jpg"
            alt="Profile Picture of Sarah"
            class="profile-picture"
          />
        </div>
      </section>

      <section class="account-details-section">
        <h2>Account Details</h2>
        <div class="stats-grid">
          <div class="stats-card total-bookings-card">
            <i class="fa-solid fa-calendar-check icon-booking"></i>
            <p class="stat-value">24</p>
            <p class="stat-label">Total Bookings</p>
          </div>

          <div class="stats-card average-rating-card">
            <i class="fa-solid fa-star icon-rating"></i>
            <p class="stat-value">4.8</p>
            <p class="stat-label">Average Rating</p>
          </div>

          <div class="stats-card membership-card">
            <i class="fa-solid fa-crown icon-membership"></i>
            <p class="stat-value">Premium</p>
            <p class="stat-label">Membership Level</p>
          </div>
        </div>
      </section>

      <section class="membership-benefits-section">
        <h2>Membership Benefits</h2>
        <div class="benefits-grid">
          <div class="benefit-item">
            <i class="fa-solid fa-check-circle check-icon"></i> Priority
            Customer Support
          </div>
          <div class="benefit-item">
            <i class="fa-solid fa-check-circle check-icon"></i> Free
            Cancellation
          </div>
          <div class="benefit-item">
            <i class="fa-solid fa-check-circle check-icon"></i> Exclusive Room
            Access
          </div>
          <div class="benefit-item">
            <i class="fa-solid fa-check-circle check-icon"></i> Loyalty Points
            Rewards
          </div>
        </div>
      </section>

      <section class="card account-settings-section">
        <h2>Account Settings</h2>

        <div class="setting-item">
          <div class="setting-text">
            <p class="setting-title">Email Notifications</p>
            <p class="setting-desc">
              Receive booking confirmations and updates
            </p>
          </div>
          <label class="switch">
            <input type="checkbox" checked id="emailToggle" />
            <span class="slider round"></span>
          </label>
        </div>

        <div class="setting-item">
          <div class="setting-text">
            <p class="setting-title">SMS Notifications</p>
            <p class="setting-desc">Get text messages for important updates</p>
          </div>
          <label class="switch">
            <input type="checkbox" id="smsToggle" />
            <span class="slider round"></span>
          </label>
        </div>

        <div class="setting-item">
          <div class="setting-text">
            <p class="setting-title">Marketing Communications</p>
            <p class="setting-desc">Receive promotional offers and deals</p>
          </div>
          <label class="switch">
            <input type="checkbox" checked id="marketingToggle" />
            <span class="slider round"></span>
          </label>
        </div>

        <div class="setting-item setup-item">
          <div class="setting-text">
            <p class="setting-title">Two-Factor Authentication</p>
            <p class="setting-desc">
              Add an extra layer of security to your account
            </p>
          </div>
          <button class="setup-btn">Setup</button>
        </div>
      </section>
    </main>

    <script src="script/user_profile_script.js"></script>
  </body>
</html>
