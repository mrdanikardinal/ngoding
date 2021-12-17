// menangkap user pilihan dari player
var tanya = true;
while (tanya) {
  var p = prompt('Pilih : gajah, semut, orang');

  // menangkap pilihan dari computer
  // membangkitkan bilangan random
  var com = Math.random();

  if (com < 0.34) {
    com = 'gajah';
  } else if (com >= 0.34 && com < 0.67) {
    com = 'orang';
  } else {
    com = 'semut';
  }
  var hasil = '';

  // menentukan rules
  if (p == com) {
    hasil = 'SERI';
  } else if (p == 'gajah') {
    //Operator Ternary
    hasil = (com == 'orang') ? 'MENANG' : 'KALAH';

    // if (com == 'orang') {
    //   hasil = 'MENANG';
    // } else {
    //   hasil = 'KALAH';
    // }
  } else if (p == 'orang') {
    //Operator Ternary
    hasil = (com == 'gajah') ? 'KALAH' : 'MENANG';
    // if (com == 'gajah') {
    //   hasil = 'KALAH';
    // } else {
    //   hasil = 'MENANG';
    // }
  } else if (p == 'semut') {
    hasil = (com == 'orang') ? 'KALAH' : 'MENAG';
  } else {
    hasil = 'Memasukan Pilihan yang salah!!';
  }

  // tampilkan hasilnya
  alert('Kamu memilih : ' + p + ' dan Komputer memilih ' + com + ' \n Maka hasilnya : Kamu ' + hasil);
  tanya = confirm('Main Lagi?');
}
alert('Terimakasih sudah bermain.');
