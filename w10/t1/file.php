<?php
    //open file for reading
    $file = fopen("gundam.txt", "r");

    //loop thru the file line by line
    while(!feof($file)){
        $line = fgets($file);
        if($line !== false){
            //Split the line into the components
            $data = explode(",",$line);
            $model = $data[0];
            $name = $data[1];
            $pilot = $data[2];
            //output data in html format
            echo "<tr><td>$model</td><td>$name</td><td>$pilot</td></tr>";
        }
    }

    //Close the file
    fclose($file);