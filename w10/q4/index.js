function calculateAge(){
    var name = document.getElementById("name").value;
    var age = parseInt(document.getElementById("age").value);
    var yearsToHundred = 100 - age;
    var msg = `Hi ${name}, you have ${yearsToHundred} to 100yo`;
    console.log(msg);
    document.getElementById("result").innerHTML = msg;
}