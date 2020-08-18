<?php

require "functions.php";

$id = $_GET["id"];

if( hapus($id) > 0){
    echo "
        <script>
            alert('Project berhasil dihapus!');
            document.location.href = 'http://localhost/project1';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Project gagal dihapus!');
            document.location.href = 'http://localhost/project1';
        </script>
    ";
}