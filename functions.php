<?php
// koneksi ke database
$link = mysqli_connect("localhost", "root", "", "markaz_lughoh");


function query($pertanyaan) {
    global $link;
    $lemari = mysqli_query($link, $pertanyaan);
    $kotak = [];
    while( $baju = mysqli_fetch_assoc($lemari) ) {
        $kotak[] = $baju;
    }
    return $kotak;
}



// User Mendaftarkan diri di (Sign-in) 
function regi($data) {
    global $link;
    $username = strtolower (stripslashes ($data["username"]));
    $password = mysqli_real_escape_string($link, $data["password"]);
    $password2 = mysqli_real_escape_string($link, $data["password2"]);

    // cek username sudah ada apa belum
    $result = mysqli_query($link, "SELECT nama FROM user
                           WHERE
                           nama = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        echo " <script>
                    alert('username sudah terdaftar!');
               </script> ";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
            echo " <script>
                        alert('konfirmasi Password tidak sesuai!');
                   </script> ";
            return false;
    }
    
    // tambahkan data baru ke database
    mysqli_query($link, "INSERT INTO user VALUES 
                ('','$username','$password')");

    return mysqli_affected_rows($link);
}

function tambah($data) {
    global $link;

    $name = htmlspecialchars($data["name"]);
    $nameA = htmlspecialchars($data["nameA"]);
    $fakultas = htmlspecialchars($data["fakultas"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $semester = htmlspecialchars($data["semester"]);
    $lahir = htmlspecialchars($data["lahir"]);
    $sex = htmlspecialchars($data["sex"]);
    $daerah = htmlspecialchars($data["daerah"]);
    $hp = htmlspecialchars($data["hp"]);

    //upload gambar
    $transkip = upload();
     if( !$transkip ) {
         return false;
    }
    $pembayaran = upload1();
     if( !$pembayaran ) {
         return false;
    }
    
    // query insert data / eksekusi 
    $query = "INSERT INTO pendaftarana VALUES
            ('','$name','$nameA','$fakultas','$prodi','$semester','$lahir','$sex','$daerah','$hp','$transkip','$pembayaran','Pending')";
    
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}

function tambah2($data) {
    global $link;

    $name = htmlspecialchars($data["name"]);
    $namei = htmlspecialchars($data["nameI"]);
    $fakultas = htmlspecialchars($data["fakultas"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $semester = htmlspecialchars($data["semester"]);
    $lahir = htmlspecialchars($data["lahir"]);
    $sex = htmlspecialchars($data["sex"]);
    $daerah = htmlspecialchars($data["daerah"]);
    $hp = htmlspecialchars($data["hp"]);

    //upload gambar
    $transkip = upload();
     if( !$transkip ) {
         return false;
    }
    $pembayaran = upload1();
     if( !$pembayaran ) {
         return false;
    }
    
    // query insert data / eksekusi 
    $query = "INSERT INTO pendaftarani VALUES
            ('','$name','$namei','$fakultas','$prodi','$semester','$lahir','$sex','$daerah','$hp','$transkip','$pembayaran','Pending')";
    
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}

function tambah3($data) {
    global $link;

    $name = htmlspecialchars($data["name"]);
    $berita = htmlspecialchars($data["berita"]);
    $tgl = htmlspecialchars($data["tgl"]);

    //upload gambar
    $foto = upload3();
     if( !$foto ) {
         return false;
    }
    
    // query insert data / eksekusi 
    $query = "INSERT INTO informasi VALUES
            ('','$name','$berita','$foto','$tgl')";
    
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}


function upload(){
    $namaFile   = $_FILES['transkip']['name'];
    $ukuranFile = $_FILES['transkip']['size'];
    $error      = $_FILES['transkip']['error'];
    $tmpName    = $_FILES['transkip']['tmp_name'];

    // cek apakah ada gambar yang di upload
    if( $error === 4 ) {
        echo "<script>
            alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    // cek apakah yang diuplod adalah gambar (jpg dll), strtolower (maksa huruf jadi kecil semuanya)
    $extensiGambarValid = ['jpg','jpeg','png'];
    $extensiGambar = explode('.',$namaFile);
    $extensiGambar = strtolower(end($extensiGambar));
    if( !in_array($extensiGambar, $extensiGambarValid)) {
        echo "<script>
            alert('Yang anda upload harus berbentuk jpg, jpeg, png!');
        </script>";
        return false; 
    }

    // cek ukuran foto (MB,KB)
    if( $ukuranFile > 1000000 ) {
        echo "<script>
            alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    // lolos semua persyaratan, gambar siap upload
    // buat nama gambar baru agar menghindari kesamaan nama file dengan (uniqid())
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensiGambar;

    move_uploaded_file($tmpName, 'Transkip/' . $namaFileBaru);
    return $namaFileBaru;


}

function upload1(){
    $namaFile   = $_FILES['pembayaran']['name'];
    $ukuranFile = $_FILES['pembayaran']['size'];
    $error      = $_FILES['pembayaran']['error'];
    $tmpName    = $_FILES['pembayaran']['tmp_name'];

    // cek apakah ada gambar yang di upload
    if( $error === 4 ) {
        echo "<script>
            alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    // cek apakah yang diuplod adalah gambar (jpg dll), strtolower (maksa huruf jadi kecil semuanya)
    $extensiGambarValid = ['jpg','jpeg','png'];
    $extensiGambar = explode('.',$namaFile);
    $extensiGambar = strtolower(end($extensiGambar));
    if( !in_array($extensiGambar, $extensiGambarValid)) {
        echo "<script>
            alert('Yang anda upload harus berbentuk jpg, jpeg, png!');
        </script>";
        return false; 
    }

    // cek ukuran foto (MB,KB)
    if( $ukuranFile > 1000000 ) {
        echo "<script>
            alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    // lolos semua persyaratan, gambar siap upload
    // buat nama gambar baru agar menghindari kesamaan nama file dengan (uniqid())
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensiGambar;

    move_uploaded_file($tmpName, 'Pembayaran/' . $namaFileBaru);
    return $namaFileBaru;


}

function upload3(){
    $namaFile   = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error      = $_FILES['foto']['error'];
    $tmpName    = $_FILES['foto']['tmp_name'];

    // cek apakah ada gambar yang di upload
    if( $error === 4 ) {
        echo "<script>
            alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    // cek apakah yang diuplod adalah gambar (jpg dll), strtolower (maksa huruf jadi kecil semuanya)
    $extensiGambarValid = ['jpg','jpeg','png'];
    $extensiGambar = explode('.',$namaFile);
    $extensiGambar = strtolower(end($extensiGambar));
    if( !in_array($extensiGambar, $extensiGambarValid)) {
        echo "<script>
            alert('Yang anda upload harus berbentuk jpg, jpeg, png!');
        </script>";
        return false; 
    }

    // cek ukuran foto (MB,KB)
    if( $ukuranFile > 1000000 ) {
        echo "<script>
            alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    // lolos semua persyaratan, gambar siap upload
    // buat nama gambar baru agar menghindari kesamaan nama file dengan (uniqid())
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}



// memvalidasi berkas
function acc($id) {
    global $link;
    mysqli_query($link,"UPDATE pendaftarani SET keterangan = 'disetujui' WHERE id = $id");
    return mysqli_affected_rows($link);
}

function acc2($id) {
    global $link;
    mysqli_query($link,"UPDATE pendaftarana SET keterangan = 'disetujui' WHERE id = $id");
    return mysqli_affected_rows($link);
}

// input data Nilai
function tambah4($data) {
    global $link;

    $name = htmlspecialchars($data["nim1"]);
    $berita = htmlspecialchars($data["mutolaah"]);
    $tgl = htmlspecialchars($data["tabir"]);
    $tgl2 = htmlspecialchars($data["tarjamah"]);

    
    
    // query insert data / eksekusi 
    $query = "INSERT INTO hasil_ujian_arab VALUES
            ('','$berita','$tgl','$tgl2','$name')";
    
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}


function tambah5($data) {
    global $link;

    $name = htmlspecialchars($data["nim"]);
    $berita = htmlspecialchars($data["reading"]);
    $spe = htmlspecialchars($data["speaking"]);
    $wri = htmlspecialchars($data["writing"]);
    $lis = htmlspecialchars($data["listening"]);


    // query insert data / eksekusi 
    $query = "INSERT INTO hasil_ujian_inggris VALUES
            ('','$berita','$lis','$spe','$wri','$name')";
    
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}
?>