<!DOCTYPE html>
<head>
    <title>Delete user</title>
    <style rel = "stylesheet" href = "form.css"></style>
</head>
<body>
    <?php
    //Check if form submitted
    if ( isset($_POST["submit"])){
        //get username from form
        $username = $_POST["username"];

        //open file for reading
        $file = fopen("users.txt", "r");

        // Readm the contents of the file into the array
        $users = [];
        while(!feof($file)){
            $line = trim(fgets($file));
            if (!empty($line)){
                $users[] = $line;
            }
        }

        //Close file
        fclose($file);

        //remove user from array
        $updated_users = [];
        foreach ($users as $user){
            //To split a string into an array based on specified delimiter
            $data = explode("\t", $user);
            if ($user!= $username){
                $updated_users[] = $user;
            }
        }

        //Open file for writing
        $file = fopen("gundam.txt", "w");

        //Write the modified array back to file
        fwrite($file, implode("\r\n", $updated_users));

        //close file
        fclose($file);

        //redirect to home
        header("Location: index.php");
        exit;
    }
    ?>
</body>
</html>