function factorial(){
    var input = document.getElementById("input");
    var output = document.getElementById("output");
    var num = parseInt(input.value);
    var fact = 1;
    for(var i = num; i > 0; i--){
        fact *= i;
    }
    output.value = fact;
}