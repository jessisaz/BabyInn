<!DOCTYPE>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BabyInn | Home</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <h2 class="logo">BabyInn</h2>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
            <a href="reservation.php">Reservation</a>
            <button class = "btnLogin-popup">Login</button>  
            <!-- Maybe a background image here-->
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <!-- php login action -->
            <form action="login.inc.php" method="post">
                <!-- login-email required -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" required>
                    <label>Email</label>
                </div>

                <!-- login-password required -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <!-- maybe not needed -->
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
                <!-- ----------------------------- -->
            </form>
        </div>

        <div class="form-box register">
            <!-- php registration action -->
            <h2>Registration</h2>
            <form action="#">
                <!-- register username required -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <!-- register email required -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <!-- register password required -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <!-- maybe not so important -->
                <div class="remember-forgot">
                    <label><input type="checkbox"> I agree to the terms & conditions</label>
                </div>

                <!-- login button -->
                <button type="submit" class="btn">Register</button>

                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>