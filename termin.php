<?php
include('Header2.php');
?>

<div class="panel panel-default">
<div class="panel-body">
<form action="InsertMessage.php" method="post">
    <div class="form-group">
        <label for="comment">First name:</label>
        <textarea class="form-control" id="comment" name=first_name rows="1" required></textarea>
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email" id="email" required>
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" name="desired_date" id="desired_date" required>
    </div>
    <div class="form-group">
        <label for="time">Time:</label>
        <input type="time" class="form-control" name="desired_time" id="desired_time" required>
    </div>
    <div class="form-group">
        <label for="comment">Comment</label>
        <textarea class="form-control" id="comment" name="info" rows="3" placeholder="We don't believe in categories. Every photo/videoshoot is an unique experience. Describe what you imagine the photo/videoshoot to be." required></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>

<?php
include('footer.php');
?>


