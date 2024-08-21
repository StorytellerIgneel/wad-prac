function validateForm(){
    var isValid = true;
    var form = document.getElementById("contactForm");

    //clear all previous error messages
    document.querySelectorAll("#contactForm div").forEach(div => {
        div.textContent = '';
    })

    //validate Salutation
    if (form['salutation'])
}