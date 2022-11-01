function validate(){
    var username = document.getElementById("username");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var cpassword = document.getElementById("cpassword");
    var age = document.getElementById("age");

    if(username.value.length < 8 || username.value.length > 50){
        alert("Username should be 8 to 50 characters long!");
        return false;
    }
    if(password.value.length < 10){
        alert("Password is too short! It should be at least 10 characters long!");
        return false;
    } 
    if(password.value != cpassword.value){
        alert("Passwords do not match! Please try again");
        return false;
    }
    if(age.value < 18 || age.value > 58){
        alert("Age should be between 18 - 20. Candidate not eligible for registration");
        return false;
    }
}