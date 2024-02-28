   <?php
   include("header.php");
   ?>
  
    <div class="container">
        <form action="process.php" method="POST">
        <div class="title">
             Contact Us 
        </div>

        <div class="form">

            <div class="input_field">
                <label>Name</label>
                <input type="text" class="input" name="name" required>
            </div>

            <div class="input_field">
                <label>Email address</label>
                <input type="text" class="input" name="emailaddress" required>
            </div>

            <div class="input_field">
                <label>Phone number</label>
                <input type="text" class="input" name="phonenumber" required>
            </div>

            <div class="input_field">
                <label>DateOfContact</label>
                <input type="date" class="input" name="dateofcontact" required>
            </div>

            <div class="input_field">
                <label>Message</label>
                <textarea class="input" name="message" required></textarea>
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="Submit" class="btn" name="submit">
            </div>
        </div>
        </form>
    </div>

    <?php
include("footer.php");

?>