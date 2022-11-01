function power(){
    var base = parseInt(document.getElementById("base").value);
    var exponent = parseInt(document.getElementById("exponent").value);
    var power = document.getElementById("power");
    var result = Math.pow(base, exponent);
    power.value = result;
}