<?php
$nameErr = $addressErr =  $phoneErr = $emailErr = $foodErr = "";
$name = $address =  $phone = $email = $food = $addOns = $instruction =  "";

//check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //name
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input ($_POST['name']);
        if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
            $nameErr = 'Invalid name';
        }
    }

    //address
    if (empty($_POST['address'])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST['address']);
    }

    //phone
    if (empty($_POST['phoneNum'])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST['phoneNum']);
        // Check if phone number is valid
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Invalid phone number";
        }
    }

    //email
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST['email']);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    //food
    if (empty($_POST['food'])) {
        $foodErr = "Address is required";
    } else {
        $food = test_input($_POST['food']);
    }

    if (empty($_POST["addOn"]))
        $addOns = NULL;

    //instruction
    if (empty($_POST["instruction"]))
        $instruction = NULL;

    if (empty($order_timeErr) && empty($nameErr) && empty($addressErr) && empty($phoneErr) && empty($emailErr) && empty($foodErr) && empty($addOnsErr) && empty($instructionErr) && empty($order_timeErr)) {
        // Send email
        $dbHost = "localhost";
        $dbUsername = "root";
        $password = "teoH0628$$$$";
        $dbname = "restaurant";

        $conn = mysqli_connect($dbHost, $dbUsername, $password, $dbname);

        if (!$conn)
            die("Connection failed: ".mysqli_connect_error());
        else
            echo "Connection successful";

        $sql = "INSERT INTO orders(name, address, phone, email, food, addOns, instruction) VALUES('$name','$address', '$phone','$email','$food','$addOns','$instruction')";
        
        if(mysqli_query($conn, $sql)) {
            echo "Record inserted successfully!";
          } else {
            echo "Error inserting record: " . mysqli_error($conn);
          }          
        // Redirect to thank you page
        //header("Location: thank_you.php");

        // SQL query to count rows
        $sql = "SELECT COUNT(*) AS total FROM orders";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Fetch the total number of rows
        $row = mysqli_fetch_assoc($result);
        $id = $row['total']; // Assuming you want to use the total as the order ID

        // Now fetch the order time for the last inserted order
        $sql = "SELECT order_time FROM orders WHERE order_id = '$id'";
        $time_result = mysqli_query($conn, $sql);

        // Fetch the order time from the result
        $time_row = mysqli_fetch_assoc($time_result);
        $time = $time_row['order_time'];

        echo "Your order id is '$id' and the time is '$time'";

        mysqli_close($conn);
        exit();
    }
    else{
        $errors = [
            'Name Error' => $nameErr,
            'Address Error' => $addressErr,
            'Phone Error' => $phoneErr,
            'Email Error' => $emailErr,
            'Food Error' => $foodErr,
            'Instruction Error' => $instructionErr
        ];
        
        // Iterate through the errors and print the non-empty ones
        foreach ($errors as $errorType => $errorMessage) {
            if (!empty($errorMessage)) {
                echo $errorType . ": " . $errorMessage . "<br>";
            }
        }
        echo "Error inserting record: " ;
    }
}

// Function to sanitize user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}