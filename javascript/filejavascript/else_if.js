
var jmlMobil = 10;
var mobilBeroperasi=8;
var noMobil=1;

for(var noMobil; noMobil<=jmlMobil; noMobil++){
  if (noMobil<=7 && noMobil !==5) {
    console.log('Mobil No '+noMobil+' Beroperasi Dengan Baik');
    // if (noMobil===5) {
    //   console.log('Mobil No '+noMobil+' Sedang Lembur');
    // }
  }else if (noMobil===8 || noMobil===10 || noMobil===5) {
    console.log('Mobil No '+noMobil+' Sedang Lembur');
  }

  else {
    console.log('Mobil No '+noMobil+' Sedang Tidak Beroperasi');
  }



}
