<!DOCTYPE html>
<html>
<head>
<title>Contact US</title>
<link rel="stylesheet" href="../style/mystyle.css">
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/nagivation.php'); ?>
    
    <form id = "contactForm" action="post_message.php" method="post">
    <label for="Sal">Salutation : </label>
    <select id="salutation" name="salutation">
    <input type="checkbox"> Mr
    <input type="checkbox"> Ms
    <input type="checkbox"> Mrs
    <input type="checkbox"> Mdm<br>
    </select>
    
    <div id = "salutationError"></div>
    <label for="name">Name : </label>
    <input type="text" id="name" name="name"><br>
    <div id = "NameError"></div>

    <label for="email">E-mail :</label> 
    <input type="text" name="email"><br>
    <div id = "emailError"></div>

    <label for="phone">Phone number : </label>  
    <input type="tel" name="phone"><br>
    <div id = "phoneError"></div>

    Type of Enquiry :
    <input type="checkbox"> General Enquiry
    <input type="checkbox"> Complaints
    <input type="checkbox"> Suggestions
    <br>
    Subject : <br><textarea name="message" rows="10" cols="30"></textarea>
    <br>
    <br>
    <input type="submit"> 
    </form>
    <br>
    <br>
    <?php include('../includes/footer.php'); ?>
</body>
</html>