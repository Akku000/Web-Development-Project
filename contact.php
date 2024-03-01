<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="style.css">
<body>

<?php include 'navigation.php';?>
<?php require_once "query.php"; ?>
<body>  


    <h2> Contact </h2>
    <form>
        <div class="ctrl-holder">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
    </div>
    <div class="ctrl-holder">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </div>
    <div class="ctrl-holder">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone">
    </div>
    <div class="ctrl-holder">
        <label for="Message">Message</label>
        <input type="text" id="Message" name="Message">
    </div>

    <input type="submit" value="Submit">
    </form>

<?php include 'footer.php';?>

</body>
</html> 


