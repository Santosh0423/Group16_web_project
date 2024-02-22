<?php
include 'header.php';
?>

<div class="container">
    <h2>Feedback Form</h2>
    <form method="post" name="feedback_form" action="process.php">
        <div class="form-group">
            <label for="customers_id">Customer ID:</label>
            <input type="text" name="customers_id" id="customers_id" required>
        </div>
        <div class="form-group">
            <label for="feedbackMessage">Feedback Message:</label>
            <textarea name="feedbackMessage" id="feedbackMessage" rows="4" cols="50"></textarea>
        </div>
        <div class="form-group">
            <label for="timestamp">Time:</label>
            <input type="date" name="timestamp" id="timestamp">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<?php
include 'footer.php';
?>