//1.splice
// splice(indexAwal,mauDitambahBerapa,elemenBaru1,elemenBaru2);
// var arr =['dani','kardinal','umikulsum'];
// arr.splice(2,0,'jatuh');
// console.log(arr.join('-'));
//2.slice
//slice(indexAwal,indexAkhir) iris
// var arr =['dani','kardinal','umi','kulsum','jatuhcinta'];
// var arr2 =arr.slice(0,3);
// console.log(arr2.join('-'));
//3.forEach
// var angka=[1,2,3,4,5,6,7,8];
// angka.forEach(function(e){
//   console.log(e);;
// });
//4.map
// var angka= [1,2,3,4,5,6,7];
// var angka2 = angka.map(function(e){
//
//   return e*2;
// });
// console.log(angka2.join('-'));
//5.sort
// var angka= [1,2,3,10,20,9,8,6,5,4];
// 6.angka.sort();
//untuk mengurutkan angka sesuai meskipun 2 karakter
// 7.sort(function(a,b){});
// angka.sort(function(a,b){
//   return a-b;
// });
// console.log(angka.join('-'));
//8.filter
// var angka= [1,2,3,10,20,9,8,6,5,4];
// var angka2=angka.filter(function(x){
//   // return x==5;
//   return x>3;
// });
// console.log(angka2);
//9.find
var angka= [1,2,3,10,20,9,8,6,5,4];
var angka2=angka.find(function(x){
  // return x==5;
  return x>3;
});
console.log(angka2);
