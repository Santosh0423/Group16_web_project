<?php
include 'header.php'
?>
<form method="post" name="user_reg_form" action="process.php">
   Customers Id: <input type="int" name="customers_id"> <br><br>
    FeedbackMessage: <input type="text" name="feedbackMessage"> <br><br>
    Time: <input type="date" name="timestamp"> <br><br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
include 'footer.php'
?>