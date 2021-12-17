/**
=================================
let ulang = true;
while (ulang) {
console.log('Hello World');
  ulang=confirm('ulang lagi g?');
}
=================================
*/
let nilaiAwal=1;
let mulai=confirm('Mulai');

if (mulai) {
  while (nilaiAwal<=10) {
    console.log('Hello While..'+nilaiAwal+'x');
    nilaiAwal++;
  }
}
