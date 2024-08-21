<!DOCTYPE html>
<html>
    <head>
        <title>Q2</title>
    </head>
    <body>
        <?php
            $gundams = [
                [
                    'gundam' => 'Exia',
                    'pilot' => 'Setsuna F Seiei',
                ],
                [
                    'gundam' => 'Mighty Strike Freedom',
                    'pilot'=> 'Kira Yamato',
                ],
                [
                    'gundam' => 'Aerial',
                    'pilot'=> 'Suletta Mercury',
                ],
                [
                    'gundam' => 'Wing',
                    'pilot' => 'Hiiro Yui',
                ],
            ];

            echo "<ol>";
            foreach($gundams as $gundam){
                echo "<li>" . $gundam['gundam'] . '-' . $gundam['pilot'] . "</li>";
            }
            echo "</ol>";
        ?>
    </body>
</html>