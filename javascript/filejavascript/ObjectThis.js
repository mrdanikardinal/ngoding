
//membuat ObjectThis
// cari 1 menggunakan function declaration
// function halo(){
//   console.log('halo function declaration');
// };
// halo();
//=====================================================================
// //cara 2 object literal
// var obj={};
// obj.halo=function (){
//   console.log('halo function literal');
// }
// obj.halo();
//=====================================================================
// //cara 3 constructor
// function Halo(){
//   console.log('halo function constructor');
// }
// new Halo();
// ===============================================================
// =====================================KONSEP THIS =================
// cari 1 menggunakan function declaration
// function halo(){
//   // console.log('halo function declaration');
//   console.log(this);
// };
// //this mengembalikan object global
// halo();
//=====================================================================
//cara 2 object literal
// var obj={a:10,nama :'dinall'};
// obj.halo=function (){
//   console.log(this);
//   console.log('halo function literal');
// }
// obj.halo();
//this mengembalikan object bersangkutan
//=====================================================================
//cara 3 constructor
function Halo(){
  console.log(this);
  // console.log('halo function constructor');
}
new Halo();
var obj1= new Halo();
var obj2 =new Halo();
//this mengembalikan object yang baru dibuat
