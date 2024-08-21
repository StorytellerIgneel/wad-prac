<?php
include ("../includes/header.php");
include ("../includes/nagivation.php");

//Connect to db
$servername = "localhost";
$username = "root";
$password = "teoH0628$$$$";
$dbname = "uecs2094_pie";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
    die("Connection failed: " . mysqli_connect_error());

    //retrieve the traffic announcement from db
$sql = "SELECT c.name AS Character, e.title AS Episode, e.episode_number AS EpisodeNumber
FROM Characters c
JOIN Appearances a ON c.id = a.character_id
JOIN Episodes e ON a.episode_id = e.id
ORDER BY e.episode_number;
";
$trafficAnnouncements = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Traffic Announcements</title>
        <link rel="stylesheet" href="../style/mystyle.css">
    </head>
</html>

<h1>Traffic Announcements</h1>

<?php
if (mysqli_num_rows($trafficAnnouncements) > 0){
    echo "<ul>";
    while ($announcement = mysqli_fetch_assoc($trafficAnnouncements)) {
        echo "<li>";
        echo "<a href=\"t_announcement.php? id=".htmlspecialchars($announcement['id'])."\">";
        echo htmlspecialchars($announcement['subject']);
        echo "</a> - Posted in ".htmlspecialchars($announcement['posted']);
        echo "</li>";
    }
    echo "</ul>";
    } else 
        echo "<p>No Traffic Announcements</p>";
    ?>
    <?php include('../includes/footer.php'); ?>
    </body>
</html>