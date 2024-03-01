<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type ="text/css" href="style.css">
</head>
<title>Register event</title>
<body>  
    <?php include 'navigation.php';?>
    <?php require_once "query.php"; ?>
    <?php

    // conditonal statment for receving details about the event that the client would like to register.
    if (isset($_GET["eventname"])) {
        addEvent($_GET["eventname"], $_GET["location"], $_GET["description"] ,$_GET["eventdate"]);
        echo '<p> Event added successfully </p>';
        // code where user HAS searched
    }

?>

    <h2>Create Event </h2>
    <form>
        <div class="ctrl-holder">
        <label for="eventname">Event Name:</label>
        <input type="text" id="eventname" name="eventname">
    </div>
    <div class="ctrl-holder">
        <label for="description">Description</label>
        <input type="text" id="description" name="description">
    </div>
    <div class="ctrl-holder">
        <label for="eventdate">Event Date:</label>
        <input type="date" id="eventdate" name="eventdate">
    </div>
    <div class="ctrl-holder">
        <label for="location">Location</label>
        <input type="text" id="location" name="location">
    </div>

    <input type="submit" value="Submit">

    </form>
    <?php include 'footer.php';?>
</body>
</html> 