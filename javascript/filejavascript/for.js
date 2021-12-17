
var mobilBeroperasi=2;
var jumlahMobil=10;
var nomorMobil=1;



// for (nomorMobil; nomorMobil<=jumlahMobil; nomorMobil++) {
//   if (nomorMobil<=mobilBeroperasi) {
//       console.log('Mobil No. '+nomorMobil+' Beroperasi dengan Baik');
//   }else {
//     console.log('Mobil No. '+nomorMobil+' Dalam Keadaan Rusak');
//   }
//
// }

while (nomorMobil<=mobilBeroperasi) {
  console.log('Mobil No. '+nomorMobil+' Beroperasi dengan Baik');
  nomorMobil++
}
for (nomorMobil=mobilBeroperasi+1; nomorMobil<=jumlahMobil; nomorMobil++) {
  console.log('Mobil No. '+nomorMobil+' Dalam Keadaan Rusak');
}
