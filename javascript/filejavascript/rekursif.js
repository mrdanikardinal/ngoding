// for (var i=10; i>=1; i--){
//
//   console.log(i);
// }
// fungsi rekursif
// function tampilkanAngka(n){
//   if (n===0) return;
//
//   console.log(n);
//   return tampilkanAngka(n-1);
//
// }
// tampilkanAngka(10);
//=============================
// fungsi rekursif faktorial
// function faktorial(n){
//
//   if (n===0) {
//     return 1;
//   }
//   return n* faktorial(n-1);
// }
// console.log(faktorial(5));
// rumus faktorial 5*4*3*2*1=120

function faktorial(n){

  var hasil=1;
  for(var i=n; i>0; i--){
    hasil *=i;
  }
  return hasil;
}
console.log(faktorial(5));
