<?php 
require 'functions.php';
// menangkap data yang tercecer di url (yang ada di bawah biassanya)
$id = $_GET["id"];

if ( acc($id) > 0 ) {
        echo "
            <script>
                alert('data disetujui !');
                document.location.href = 'admin.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal disetujui !');
                document.location.href = 'admin.php';
            </script>
        ";
    }

?>