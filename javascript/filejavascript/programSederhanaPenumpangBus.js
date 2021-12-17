// var penumpang =['danikardinal','umi',undefined]; //array untuk function tambahPenumpang
var penumpang =[]; //array untuk function hapusPenumpang {
var tambahPenumpang =function(namaPenumpang,penumpang){
  //jika angkot kosong
  if (penumpang.length==0) {
    //tambahPenumpang di awal array
    penumpang.push(namaPenumpang);
    //kembalikan isi array & keluar dari function
    return penumpang;
  }else {
    for(var i=0; i< penumpang.length;i++){
      //jika ada kursi yang kosong
      if (penumpang[i]==undefined) {
        penumpang[i]=namaPenumpang;
        return penumpang;
      }else if (penumpang[i]===namaPenumpang) {
        console.log(namaPenumpang+' sudah ada didalam bus');
        return penumpang;
      }
      else if(i==penumpang.length-1) {
        penumpang.push(namaPenumpang);
        return penumpang;
      }
    }
  }
}
var hapusPenumpang=function(namaPenumpang,penumpang){
  if (penumpang.length==0) {
    console.log('Bus Masih Kosong Bos');
    return penumpang;
  }
  else {
    for(var i=0; i<penumpang.length; i++){
      if (penumpang[i]==namaPenumpang) {
        penumpang[i]=undefined;
        return penumpang;
        console.log(namaPenumpang+ ' berhasil turun');

      }else if(i==penumpang.length -1){
        console.log(namaPenumpang+ ' tidak ada di dalam Bus');
        return penumpang;
      }
    }

  }


}
