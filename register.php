<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serene - Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <div class="register-container">
        <div class="register-card">
            
            <div class="header-icon">
                <i class="material-icons">hotel</i>
            </div>

            <h1 class="title">Register</h1>

            <form id="registerForm">
                <div class="form-grid">
                    
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <div class="input-icon-container">
                            <input type="text" id="firstName" placeholder="Enter your first name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <div class="input-icon-container">
                            <input type="text" id="lastName" placeholder="Enter your Last name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dob">Tanggal Lahir</label>
                        <div class="input-icon-container">
                            <input type="date" id="dob" placeholder="Enter your birth day" required>
                            <i class="material-icons input-icon-right">calendar_today</i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <div class="input-icon-container">
                            <input type="tel" id="phone" placeholder="Enter your Number" required>
                            <i class="material-icons input-icon-right">phone</i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-icon-container">
                            <input type="password" id="password" placeholder="Enter your password" required>
                            <i class="material-icons input-icon-right toggle-password" onclick="togglePasswordVisibility()">visibility_off</i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-icon-container">
                            <input type="email" id="email" placeholder="Enter your email" required>
                            <i class="material-icons input-icon-right">mail_outline</i>
                        </div>
                    </div>

                </div>
                
                <button type="submit" class="register-button">Register</button>
            </form>

            <div class="footer-links">
                <p>Already have account</p>
                <a href="login.html" class="sign-in-link">Sign In</a>
            </div>
        </div>

        <div class="legal-text">
            <p>By signing in, you agree to our</p>
            <a href="#">Terms of Service</a>
            <span>and</span>
            <a href="#">Privacy Policy</a>
        </div>
    </div>

    <script src="script/register.js"></script>
</body>
</html>