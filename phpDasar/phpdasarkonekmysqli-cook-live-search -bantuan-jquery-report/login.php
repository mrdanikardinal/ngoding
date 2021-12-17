<?php
session_start();
require_once "functions.php";
//start session
// cek cookie standard
// cek ada cookie g?
// if(isset($_COOKIE["login"])){
//     if($_COOKIE["login"]=="true"){
//         $_SESSION["login"]=true;
//     }
// }


// cek cookie setelah di hash
// cek ada cookie g?
if(isset($_COOKIE["id"]) AND isset($_COOKIE["key"])){

    $id= $_COOKIE["id"];
    $key= $_COOKIE["key"];

    $result= mysqli_query($conn,"SELECT username FROM users WHERE id = $id");

    $row = mysqli_fetch_assoc($result);
    
   
    // cek cookie dan username
    if ($key === hash("sha256", $row["username"]) ){
        $_SESSION["login"]=true;
    }

}

// jika session sudah ada pindahkan kehalaman index.php
if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}


if(isset($_POST["login"])){

    $username= $_POST["username"];
    $password= $_POST["password"];

    // cek satu persatu username atau password ada atau tidak di database

  $result=mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");
  // cek usernamenya
  // fungsi mysqli_num_rows()  untuk cek username jika ada nilainya 1 jika tidak ada nilainya 0
  if(mysqli_num_rows($result)===1){
        // cek passwordnya
        $row= mysqli_fetch_assoc($result);
        // fungsi password_verify(password_input,password_enkripsi)
        if(password_verify($password,$row["password"])){
            // set session
            $_SESSION["login"]= true;
            // cek remember me
            if(isset($_POST["remember"])){
                //buat cookie
                // setcookie("login","true",time()+60); ini cookie standar
                 
                setcookie("id", $row["id"], time()+60);
                setcookie("key", hash('sha256',$row["username"]),time()+60);
               
            }


            header("Location: index.php");
            exit;
        }
  }

  $error=true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
</head>
<body>
<h1>Halaman Login</h1>
<?php if(isset($error)):?>
    <p style="color:red; font-sytle:italic;">Username /Password Salah!</p>
<?php endif;?>

<form action="" method="post">

<ul>
        <li>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        </li>
        <li>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        </li>
        <li>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me:</label>
        </li>
        <li>
        <button type="submit" name="login">Login</button>
        </li>

    </ul>

</form>
    
</body>
</html>