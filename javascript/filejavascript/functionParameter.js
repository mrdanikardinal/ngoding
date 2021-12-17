function tambah(a,b){
  return a+b;
}
function kali(a,b){
  return a*b;
}
// var a = parseInt(prompt('masukan nilai 1: '));
// var b = parseInt(prompt('masukan nilai 2: '));
// var hasil =tambah(a*2,b*2);
var hasil = kali(tambah(1,2),tambah(3,4));
console.log(hasil);
