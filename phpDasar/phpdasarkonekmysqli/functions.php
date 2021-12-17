<?php

// koneksi database
// butuh parameter
//1. host 2. username 3.password 4. namadatabase
$conn=mysqli_connect("localhost","root","","phpdasar");

// ambil dari data dari table mahasiswa /query
// butuh parameter 1.koneksi 2.query
// ambil data dari object result / mahasiswa(fetch);
// ada 4 cara
//1. mysqli_fetch_row(); // mengembalikan array numerik
//2. mysqli_fetch_assoc(); // mengembalikan array associative
//3. mysqli_fetch_array(); // mengembalikan doble numerik dan associative
//4. mysqli_fetch_object(); // mengembalikan data object

// while ($mhs=mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }

function query($query){
global $conn;
$result=mysqli_query($conn,$query);
$rows=[];
while($row = mysqli_fetch_assoc($result)){
    $rows[]=$row;

}
return $rows;

}
function tambah($data){
        global $conn;
        $nrp=htmlspecialchars($data["nrp"]);
        $nama=htmlspecialchars($data["nama"]);
        $email= htmlspecialchars($data["email"]);
        $jurusan=htmlspecialchars($data["jurusan"]);

        // $gambar=htmlspecialchars($data["gambar"]);
        // upload gambar
        $gambar = upload();
        if(!$gambar){
            return false;
        }


        $query="INSERT INTO mahasiswa
         VALUES('','$nrp','$nama','$email','$jurusan','$gambar')
            ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);

}

function upload(){
    $namaFile= $_FILES["gambar"]["name"];
    $ukuranFile= $_FILES["gambar"]["size"];
    $error=$_FILES["gambar"]["error"];
    $tmpName=$_FILES["gambar"]["tmp_name"];
    // apakah tidak ada gambar yang diupload
    if($error===4){
        echo "
        <script>
        alert('Pilih Gambar Terlebih Dahulu');
        </script>
    ";
    return false;
    }
    // cek apakah yang diupload adalah gambar
    // fungsi explode() untuk memecah string dengan delimiter "."
    // fungsi end() untuk mengambil String yang paling belakang
    // fungsi strlower() untuk memaksa huruf/ nama file yang berekstensi menjadi huruf kecil
    $ekstensiGambarValid=["jpg","jpeg","png"];
    $ekstensiGambar=explode(".",$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // fungsi in_array(needle, haystack);
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "
        <script>
        alert('Yang anda Upload Bukan Gambar');
        </script>
    ";
    }
    // cek jika ukuranya terlalu besar
    if($ukuranFile > 1000000){
        echo "
        <script>
        alert('Ukuran Gambar Terlalu Besar');
        </script>
    ";
    }

    // ketika lolos dalam pengecekan, gambar siap diupload
    // fungsi move_uploaded_file(filename,destination); untuk memindahkan atau simpan ke database
    // harus generete nama gambar baru 
    // paling gampang panggil bilangan random
    $namaFileBaru= uniqid();
    $namaFileBaru.=".";
    $namaFileBaru.=$ekstensiGambar;
 

    move_uploaded_file($tmpName,'assets/img/'.$namaFileBaru);
    return $namaFileBaru;
}


function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);


}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nrp=htmlspecialchars($data["nrp"]);
    $nama=htmlspecialchars($data["nama"]);
    $email= htmlspecialchars($data["email"]);
    $jurusan=htmlspecialchars($data["jurusan"]);
    $gambarLama=htmlspecialchars($data["gambarLama"]);
    // cek apakah user pilih gambar baru atau tidak
    if($_FILES["gambar"]["error"]===4){
        $gambar = $gambarLama;
    } else{
        $gambar=upload();
    }

    // $gambar=htmlspecialchars($data["gambar"]);


    $query="UPDATE mahasiswa SET
        nrp='$nrp',
        nama='$nama',
        email='$email',
        jurusan='$jurusan',
        gambar='$gambar'
        WHERE id = $id
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

}
function cari($keyword){
    $query= "SELECT * FROM mahasiswa WHERE
     nama LIKE '%$keyword%' OR 
     nrp LIKE '%$keyword%' OR 
     email LIKE '%$keyword%' OR
     jurusan LIKE '%$keyword%'
     
     ";
     return query($query);
}
function registrasi($data){
    global $conn;
    // fungsi stripslashes() untuk menghapus karakter /
    // fungsi strtolower() untuk memaksa input menjadi huruf kecil
    $username=htmlspecialchars(strtolower(stripslashes($data ["username"])));
    // fungsi mysqli_real_escape_string($conn,) untuk memungkinkan password terdapat tanda kutip
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);
    //cek username sudah ada atau belum
    $result=mysqli_query($conn,"SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "
        <script>
        alert('Username sudah terdaftar!');
        </script>
    ";
    return false;

    }
    // cek konfirmasi password
    if($password!==$password2){
        echo "
        <script>
        alert('Konfirmasi password tidak sesuai!');
        </script>
    ";
    return false;
    }
    // enkripsi password
    $password= password_hash($password,PASSWORD_DEFAULT);
    // tambahkan users baru ke database
    mysqli_query($conn,"INSERT INTO users VALUES('','$username','$password')");
    return mysqli_affected_rows($conn);
}


?>