</section>
<link rel="stylesheet" href="style.css">
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

</body>
</html>
