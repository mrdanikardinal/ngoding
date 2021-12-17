// var range = parseInt(prompt('Masukan angka :'));
// switch (range) {
//   case 1:
//     alert('anda memasukan angka 1');
//     break;
//   case 2:
//     alert('anda memasukan angka 2');
//     break;
//   case 3:
//     alert('anda memasukan angka 3');
//     break;
//   default:
//     alert('format salah');
// }
var item = prompt('masukan nama makanan / minuman:\n (contoh: nasi,daging,susu, hamburger, softdrink)');
switch (item) {
  case 'nasi':
  case 'daging':
    alert('makanan /minuman SEHAT');
    break;
  case 'humburger':
  case 'softdrink':
    alert('makanan /minuman TIDAK SEHAT');
    break;
  default:
  alert('makanan /minuman belum terdaftar');

}
