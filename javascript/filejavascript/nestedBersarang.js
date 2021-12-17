var string ='';
for (var baris =0; baris<10; baris++){
  for(var kolom=0; kolom<=baris; kolom++){
    string +='*';
  }
  string +='\n';
}
console.log(string);
console.log('===========');
var string2 ='';
for (var baris =10; baris>0; baris--){
  for(var kolom=0; kolom<baris; kolom++){
    string2 +='*';
  }
  string2 +='\n';
}
console.log(string2);
