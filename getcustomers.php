<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Full Page Background</title>
    <link rel="stylesheet" href="style.css">
<body>
    
<?php include 'navigation.php';?>
<?php require_once "query.php"; ?>
<?php
$customers = getCustomers();
foreach ($customers as $customer) {
     echo "<p>".$customer['FIRSTNAME']."</p>";
     echo "<p>".$customer['LASTNAME']."</p>";
     echo "<p>".$customer['ADDRESS']."</p>";
     echo "<p>".$customer['PHONE']."</p>";
}
?>
<?php include 'footer.php';?>
</body>
</html> 