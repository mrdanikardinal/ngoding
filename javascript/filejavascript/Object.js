//1.object literar
var mhs ={
  nama :"danikardinal",
  umur :"32",
  ips :[3.0,3.14,3.26],
  alamat:{
    jalan: "jalan abc No.123",
    kota: "jakarta",
    provinsi: "DKI jakarta"
  }
};
var mhs2 ={
  nama :"danikardinal",
  umur :"32",
  ips :[3.0,3.14,3.26],
  alamat:{
    jalan: "jalan abc No.123",
    kota: "jakarta",
    provinsi: "DKI jakarta"
  }
};

//2.Object function declaration
function buatObjectMahasiswa(nama,npm,email,jurusan){
  var mhs={};
  mhs.nama =nama;
  mhs.npm =npm;
  mhs.email=email;
  mhs.jurusan=jurusan;
  return mhs;
}
var mhs3=buatObjectMahasiswa('dinall',8324732,'dinall@yahoo.com','teknik informatika');
//3.object function constructor
function Mahasiswa(nama,npm,email,jurusan){
  this.nama= nama;
  this.npm=npm;
  this.email=email;
  this.jurusan=jurusan;
}
var mhs4 = new Mahasiswa('danikardinal',20132032,'din@yahoo.com','teknik informatika');
