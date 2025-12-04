<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Serene - Edit Profile</title>
    <link rel="stylesheet" href="css/user_edit_profile_style.css" />
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
      <section class="page-header">
        <h1 class="page-title">
          <i class="fa-solid fa-angle-left"></i> Edit Profile
        </h1>
        <p class="page-subtitle">
          Update your personal information and account settings
        </p>
      </section>

      <form class="card edit-form-card" id="editProfileForm">
        <div class="form-section profile-picture-section">
          <h3>Profile Picture</h3>
          <div class="profile-upload-area">
            <img
              src="https://i.ibb.co/L5k6Y1G/woman-profile.jpg"
              alt="Current Profile"
              class="current-profile-picture"
              id="profileImagePreview"
            />
            <div class="upload-details">
              <label for="file-upload" class="upload-btn"
                >Upload New Photo</label
              >
              <input
                type="file"
                id="file-upload"
                accept="image/*"
                style="display: none"
              />
              <p class="upload-info">JPG, PNG or GIF. Max size 8MB.</p>
            </div>
          </div>
        </div>

        <hr />

        <div class="form-section personal-info-section">
          <h3>Personal Information</h3>

          <div class="input-row">
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" id="firstName" value="Sarah" required />
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" id="lastName" value="Wilson" required />
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input
              type="email"
              id="email"
              value="sarah.wilson@email.com"
              disabled
            />
          </div>

          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" value="+1 (555) 123-4567" />
          </div>

          <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" value="1990-05-15" class="date-input" />
          </div>

          <div class="input-row">
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" id="city" value="New York" />
            </div>
            <div class="form-group">
              <label for="country">Country</label>
              <select id="country">
                <option value="US" selected>United States</option>
                <option value="CA">Canada</option>
                <option value="UK">United Kingdom</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-actions">
          <button type="button" class="btn cancel-btn">Cancel</button>
          <button type="submit" class="btn save-btn">Save Changes</button>
        </div>
      </form>

      <section class="preferences-section">
        <h3>Preferences</h3>

        <div class="setting-item">
          <div class="setting-text">
            <p class="setting-title">Email Notifications</p>
            <p class="setting-desc">
              Receive booking confirmations and travel updates
            </p>
          </div>
          <label class="switch">
            <input type="checkbox" checked id="emailNotify" />
            <span class="slider round"></span>
          </label>
        </div>

        <div class="setting-item">
          <div class="setting-text">
            <p class="setting-title">Marketing Emails</p>
            <p class="setting-desc">Receive special offers and travel deals</p>
          </div>
          <label class="switch">
            <input type="checkbox" id="marketingEmails" />
            <span class="slider round"></span>
          </label>
        </div>
      </section>
    </main>

    <footer class="main-footer">
      <div class="container footer-content">
        <div class="footer-brand">
          <h3 class="logo">StayBook</h3>
          <p>
            Your trusted partner for unforgettable hotel experiences worldwide.
          </p>
        </div>
        <div class="footer-links-group">
          <h4>Company</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="footer-links-group">
          <h4>Support</h4>
          <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Safety</a></li>
            <li><a href="#">Cancellation</a></li>
            <li><a href="#">Terms</a></li>
          </ul>
        </div>
        <div class="footer-connect">
          <h4>Follow Us</h4>
          <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        &copy; 2024 StayBook. All rights reserved.
      </div>
    </footer>

    <script src="script/user_edit_profile_script.js"></script>
  </body>
</html>
