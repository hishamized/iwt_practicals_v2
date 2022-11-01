function subtraction(){
    var num1 = parseInt(document.getElementById("num1").value);
    var num2 = parseInt(document.getElementById("num2").value);
    var output = document.getElementById("output");
    var difference = num1 - num2;
    output.value = difference;
}