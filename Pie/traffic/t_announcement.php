<?php

//Connect database
$servername = "localhost";
$username = "root";
$password = "teoH0628$$$$";
$dbname = "uecs2094_pie";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed : ".$conn->connect_error);
}

//Check if 'id' is provided and valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    //Retrieve the specific announcement from the database
    $sql = "SELECT c.name AS Character, e.title AS Episode, e.episode_number AS EpisodeNumber
FROM Characters c
JOIN Appearances a ON c.id = a.character_id
JOIN Episodes e ON a.episode_id = e.id
ORDER BY e.episode_number;
";

    //$stmt = $conn->prepare($sql);
    //$stmt->bind_param("i", $id);
    //$stmt->execute();
    $result = mysqli_query($conn, $sql);

    //Check if the announcement exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Announcement not found";
        exit;
    }
} else {
    echo "Invalid Announcement";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Traffic Announcement Details</title>
    <link rel="stylesheet" href="../style/mystyle.css">
</head>
<body>
<?php
include('../includes/header.php');
include('../includes/nav.php');
?>
<div id="contentWrapper">
    <h1>Traffic Announcement Details</h1>
    <?php
    if (isset($row)) {
        echo "<h2>".htmlspecialchars($row['subject'])."<h2>";
        echo "<p>Posted on ".$row['posted']."</p>";
        echo "<div>".htmlspecialchars($row['message'])."</div>";
    }
    ?>
</div>
<?php include('../includes/footer.php'); ?>
</body>
</html>