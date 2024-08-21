<!DOCTYPE html>
<head>
    <title>Prac Test</title>
    <style type="text/css" href = "style.css" rel = "stylesheet"></style>

</head>
<body>
    <header id = "header1">
        <h1>RESTAURANT EZ PAY</h1>
        <p>Welcome to our online ordering system. FIll in the form</p>
    </header>
    <form id = "orderForm" action = "handleForm.php" method = "POST">
        <label for = "name">Name: </label><br>
        <input type = "text" id = "name" name  = "name" placeholder="enter name"><br><br>
        <label for ="address">Address: </label><br>
        <input type = "text" id = "address" name  = "address" placeholder="enter address"><br><br>
        <label for ="phoneNum">phoneNum: </label><br>
        <input type = "text" id = "phoneNum" name  = "phoneNum" placeholder="enter phoneNum"><br><br>
        <label for ="email">email: </label><br>
        <input type = "text" id = "email" name  = "email" placeholder="enter email"><br><br>

        <label for ="food">Food: </label><br>
        <select id="food" name="food">
            <option value = "pizza">Pizza</option>
            <option value = "burger">Burger</option>
            <option value = "fries">Fries</option>
            <option value = "salad">Salad</option>
            <option value = "dessert">Dessert</option>
            <option value = "drink">Drink</option>
            <option value = "gundam">gundam</option>
            <option value = "other">Other</option>
        </select><br><br>
        <label for="addOns">Add-on: </label>
        <br>
        <input type="checkbox" name="addOn" value="pepsi">Pepsi</input>
        <input type="checkbox" name="addOn" value="cola">CocaCola</input>
        <input type="checkbox" name="addOn" value="jelly">Mini Jelly</input>
        <input type="checkbox" name="addOn" value ="nugget">Chicken Nugget</input>
        <br><br>
        <label for ="instruction">Special Instructions</label><br>
        <input type = "text" name = "instruction">
        
        <button type="submit" name = "submit" id = "submit">Submit</button>
    </form>
    
</body>
</html>