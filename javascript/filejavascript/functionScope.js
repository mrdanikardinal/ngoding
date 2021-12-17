// var a global scope / window scope
var b = 1;
function coba(){
var b= 4;
}
coba();
console.log(window.b);
