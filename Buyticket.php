<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Purchase Ticket</title>
    <link rel="stylesheet" href="style.css">
<body>

<?php include 'navigation.php';?>
<?php require_once "query.php"; ?>
<?php
if (isset($_GET["EVENTNAME"])) {
    $events = getEvents($_GET["EVENTNAME"]);
    // code where user HAS searched
} else
{
    $events = getEvents();
}

?>

<!--form action="index.php" method="get">
    <div class="ctrl-holder">
        <label for="events">Search:</label>
        <input type="text" id="events" name="events">
    </div>
    <div class="ctrl-holder">
        <input type="submit"> </input>
    </div>
</form>
-->

<table>
            <thead>
            <tr>
                            <th rowspan="5">EVENTID</th>
                    </tr>
                    <tr>
                            <th>EVENTNAME</th>
                            <th>LOCATION</th>
                            <th>DATE</th>
                    </tr>
            </thead>    
                <tbody>
                <?php 
                foreach ($events as $event) {
                        echo '<tr>';
                        echo "<td>".$event['EVENTID']."</td>";
                        echo "<td>".$event['EVENTNAME']."</td>";
                        echo "<td>".$event['LOCATION']."</td>";
                        echo "<td>".$event['DATE']."</td>";
                        echo "</tr>";
                }
                    
                    ?>
                </tbody>
</table>

<?php include 'footer.php';?>
</body>
</html> 


