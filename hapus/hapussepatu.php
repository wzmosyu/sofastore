<?php

    require '../functions.php';

    $id = $_GET["id"];

    if(hapussepatu($id) > 0){
        echo "
                <script>
                    alert ('Data Berhasil Dihapus');
                    document.location.href = '../admin.php'
                </script>
            ";
    }else{
        echo "
                <script>
                    alert ('Data gagal Dihapus');
                    document.location.href = '../admin.php'
                </script>
            ";
    }
?>