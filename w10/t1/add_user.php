<!DOCTYPE html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h1>Add User</h1>
    <form method = "post" action = "add_user.php">
        <label for="name">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <select name = "gender" id = "gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Gundam">Gundam</option>
        </select><br>
        <input type = "submit" name = "submit" value = "Add User">
    </form>
    <?php
        if(isset($_POST["submit"])) {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];

            //open file for appending
            $file = fopen("users.txt", "a");
        
            //write new uyser record to file
            fwrite($file, "$username\t$email\t$gender\r\n");

            //close file
            fclose($file);

            //redirect to main
            header("Location: index.php");
            exit;
        }
    ?>
</body>
</html>