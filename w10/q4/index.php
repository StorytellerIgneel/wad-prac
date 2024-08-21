<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <h1>Age calc</h1>
        <form>
            <label for = "name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for = "age">Age:</label>
            <input type="number" id="age" name="age"><br><br>
            <button type="button" value = "calculate" onclick="calculateAge();">Calculate</button>
            <p id="result"></p>
        </form>
        <script src = "index.js"></script>
    </body>
</html>