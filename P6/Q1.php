<!DOCTYPE html>
<html>
    <head>
        <title>Gay</title>
    </head>
    <body>
        <!-- q1 -->

        <?php
        $gundams = [
            "Exia",
            "Dynames",
            "Kyrios",
            "Virtue"
        ];

        echo "<ul>";
        foreach ($gundams as $gundam) {
            echo "<li>".$gundam."</li>";
        }
        echo "</ul>";
        ?>
    </body>
</html>