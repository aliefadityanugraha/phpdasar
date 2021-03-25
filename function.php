<?php

// KONEKSI DATABASE
$conn = mysqli_connect("localhost","root","","belajarphp");

//TAMPIL DATA DARI DATABASE
function query($telo){
    global $conn;
    $result = mysqli_query($conn,$telo);
            $rows = [];
    while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
} 
        return $rows;
}


//TAMBAH DATA KE DATABASE
function tambahdata($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $nourut = htmlspecialchars($data["nourut"]);

//perintah masukkan data insert
        $query = "INSERT INTO datasiswa VALUES
        ('','$nama','$email','$nourut')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);

}
//HAPUS DATA DI DATABASE
function hapus($id){
        global $conn;
        //perintah hapus data delete
        mysqli_query($conn,"DELETE FROM datasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);

}

//EDIT DATABASE
function edit($data){
        global $conn;

// htmlspecialchars perintah agar data dimasukkan dengan aman ke database walaupun itu script
        $id = htmlspecialchars($data["id"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $nourut = htmlspecialchars($data["nourut"]);

//perintah upadate 
        $query = "UPDATE datasiswa SET
                 nama = '$nama',
                 email = '$email',
                 nourut = '$nourut'

                 WHERE id = $id
                 ";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);

}

//CARI DATA 
function cari($keyword){
//%keyword% untuk memilih kata yang mirip 
        $query = "SELECT * FROM datasiswa
        WHERE nama LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              nourut LIKE '%$keyword%'
        ";


         return query($query);
}



//REGISTERASI /DAFTAR
function registerasi($data){
        global $conn;
//strtolower untuk memaksa username enjadi huruf kecil semua
        $username = strtolower(stripslashes($data["username"]));

//mysqli_real_escape_string untuk memperbolehkan memasukkan string ke database
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $password2 = mysqli_real_escape_string($conn,$data["password2"]);


//cek apakah pw ada /tidaks
        $hasil = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

        if(mysqli_fetch_assoc($hasil)){
                echo "
                <script>
                alert(' Maaf ,Username sudah terdaftar');
                </script>";
                return false;
        }



//konfirmasi pass benar atau salah
        if($password !== $password2 ){
   
        echo "
                <script>
                alert('Konfirmasi password tidak sesuai');
                </script>";

                return false;
        }


//encryp password (endkripsi password agar developer pun tidak mengetahui pasword user )
        $password = password_hash($password,PASSWORD_DEFAULT);

//insert data pw kedalam database
        mysqli_query($conn,"INSERT INTO users VALUES('','$username','$password')");

        return mysqli_affected_rows($conn);

}


//LOGIN GAES
  
?>