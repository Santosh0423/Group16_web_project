<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bagmati Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <header>
    <div class="logo-container">
            <a href="index.html">
                <img src="images/BR.png" alt="Restaurant Logo" width="50" height="50">
            </a>
            <div class="restaurant-info">
                <h1>Bagmati Restaurant</h1>
                <p class="smaller-text">Breakfast and lunch served every day</p>

            </div>
        </div>
        
        

        <nav>
            <a href="Customers.php">Sign Up</a>
            <a href="update.php">Read</a>
            <a href="password_update.php">Update Password</a>
            <a href="login.php">Log In</a>
        </nav>
    </header>

    <section id="login">
        <h2>Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">Email Id:</label>
                <input type="text" id="email_id" name="email_id" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <?php if(isset($error)) { ?>
                <div class="error"><?php echo $error; ?></div>
            <?php } ?>
        </form>
    </section>

<?php
session_start();

// Include database connection
include 'db.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];

    // SQL query to check if the entered credentials match any user in the database
    $sql = "SELECT * FROM Customers WHERE email_id = '$email_id'";
    $result = $conn->query($sql);

    if($result === false){
        echo "Error: ". $conn->error;    }
        else{   if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION['email_id'] = $email_id;
            // Redirect to a logged-in user's page
            header("Location: ../firstpage.php");
            exit();
        } else {
            // Password is incorrect
            $error = "Invalid password: Try again";
        }
    } else {
        // User not found
        $error = "Invalid email id: Try again";
    }
}
}
?>



    <footer>
    <div class="footer">
        <div class="footer-col">
            <h4>About Us</h4>
            <p>Bagmati Restaurant is a Nepali restaurant that prepares and serves food and drinks to customers.</p>
        </div>

        <div class="footer-col">
            <h4>Opening Hours</h4>
            <p>Monday-Saturday: 10:00am to 10:00pm</p>
            <p>Sunday: 10:00am to 12:00pm</p>
        </div>

        <div class="footer-col">
            <h4>Contact Us</h4>
            <div class="contact-info">
                <div class="contact-item">
                    <img src="images/Gmail.png" alt="Email Icon">
                    <p>Email: info@bagmati.com.np</p>
                </div>
                <div class="contact-item">
                    <img src="images/world-wide-signal.png" alt="Website Icon">
                    <p>Website: www.bagmatirestro.com.np</p>
                </div>
                <div class="contact-item">
                    <img src="images/viber.png" alt="Phone Icon">
                    <p>Phone: 01-64165136, 087125312</p>
                </div>
                <div class="contact-item">
                    <img src="images/location.png" alt="Address Icon">
                    <p>Address: Gaidakot, Nawalpur, Nepal</p>
                </div>
            </div>
        </div>
        <div class="footer-col">
        <h4>File Modification Time</h4>
        <?php
        $filename = basename($_SERVER['PHP_SELF']);
        $lastModifiedTime = filemtime($filename);
        $formattedTime = date("F d Y H:i:s", $lastModifiedTime);
        echo "<p>Last modified: $formattedTime</p>";
        ?>
        </div>   

        <div class="footer-col social-icons">
            <h4>Get In Touch</h4>
            <div class="social-icons-container">
                <a href="#" target="_blank" title="YouTube"><img src="images/youtube_social_circle_red.png" alt="YouTube Icon"></a>
                <a href="#" target="_blank" title="Facebook"><img src="images/Facebook_Logo_Primary.png" alt="Facebook Icon"></a>
                <a href="#" target="_blank" title="WhatsApp"><img src="images/Digital_Glyph_Green.png" alt="WhatsApp Icon"></a>
                <a href="#" target="_blank" title="Instagram"><img src="images/Instagram_Glyph_Gradient.png" alt="Instagram Icon"></a>
            </div>
        </div>
    </div>
    </footer>

</body>
</html>
    