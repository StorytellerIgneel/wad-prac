function displayInput(){
    var inputString = document.getElementById("gay").value;
    document.getElementById("output").innerHTML = "Input String: " + inputString;
    console.log(inputString);
}

function convUpper(){
    var inputString = document.getElementById("gay").value;
    document.getElementById("output").innerHTML = "Input String: " + inputString.toUpperCase();
    document.getElementById("output").style.color = "blue";
}

function convLower(){
    var inputString = document.getElementById("gay").value;
    document.getElementById("output").innerHTML = "Input String: " + inputString.toLowerCase();
    document.getElementById("output").style.color = "green";
}