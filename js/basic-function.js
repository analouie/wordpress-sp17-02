//create a var to hold the message
var msg = "Sign up to recieve our newsletter for 10% off!";

//create a function to update the content
function updateMessage(){
    var el = document.getElementById("message");
    el.textContent = msg;
}

//call the function
updateMessage();