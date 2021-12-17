// manipulasi Array
//1.membuat isi Array
// var arr=[];
// arr[0]='danikardinal';
// arr[1]=2;
// arr[2]=true;
// console.log(arr);
// //2.menghappus isi Array
// var arr= ['danikardinal','umikulsum','didi'];
// arr[2]= undefined;
// arr[2]='lala';//untuk menambah elemen baru
// console.log(arr);
// //3. menampilkan isi array

// var arr= ['danikardinal','umikulsum','didi','lala','lulu'];
// for(var i=0; i<arr.length; i++){
//
//   console.log('Mahasiswa ke-'+(i+1)+':' +arr[i]);
// }

//.method pada Array
//1. join
var arr =['dani','kardinal','umi'];
// console.log(arr.join('-'));
// arrya push & pop
// arr.push('lala');// utnuk mendorong or manambah elemen diakhir array
// arr.pop(); // untuk menghappus elemen array yang terakhir
// unshift & shift
arr.unshift('dadan');// manambah eleman array pertama
arr.shift()//menghilangkan eleman array pertama
console.log(arr.join('-'));
