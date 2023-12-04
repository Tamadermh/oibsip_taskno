var inpt=document.getElementById("inp1");
var inp=document.getElementById("inp");
var butnnum=document.getElementsByClassName("butnn");
function display(value) {
    inp.value += value;
}
function clearAll() {
    inpt.value = "";
    inp.value="";
}
function calculate() {
    var q = eval(inp.value);
    inpt.value = q;
}
function Delete(){
    inp.value = inp.value.slice(0,-1);
}

