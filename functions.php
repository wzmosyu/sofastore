<?php
// Conect ke database
    $conn = mysqli_connect("localhost", "root", "", "sofastoredb");

    function query($query){
        global $conn; 
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    //tambah dan hapus aksesoris
    function tambahaksesoris($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $stok = htmlspecialchars($data["stok"]);
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO admin_aksesoris
                    VALUES
                ('', '$nama', '$jenis', '$stok', '$harga', '$deskripsi', '$gambar')

                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function hapusaksesoris($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM admin_aksesoris WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    //tambah dan hapus sepatu
    function tambahsepatu($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $stok = htmlspecialchars($data["stok"]);
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO admin_shoes
                    VALUES
                ('', '$nama', '$jenis', '$stok', '$harga', '$deskripsi', '$gambar')

                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function hapussepatu($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM admin_shoes WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    //tambah dan hapus figure
    function tambahfigure($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $stok = htmlspecialchars($data["stok"]);
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO admin_figure
                    VALUES
                ('', '$nama', '$jenis', '$stok', '$harga', '$deskripsi', '$gambar')

                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function hapusfigure($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM admin_figure WHERE id = $id");

        return mysqli_affected_rows($conn);
    }


    //tambah dan hapus dakimakura
    function tambahdakimakura($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $stok = htmlspecialchars($data["stok"]);
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO admin_dakimakura
                    VALUES
                ('', '$nama', '$jenis', '$stok', '$harga', '$deskripsi', '$gambar')

                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function hapusdakimakura($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM admin_dakimakura WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    //ubah aksesoris
    function ubahaksesoris($data){
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $stok = htmlspecialchars($data["stok"]);
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE admin_aksesoris SET
                    nama = '$nama',
                    jenis = '$jenis',
                    stok = '$stok',
                    harga = '$harga',
                    deskripsi = '$deskripsi',
                    gambar = '$gambar'
                WHERE id = $id
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    //ubah sepatu
    function ubahsepatu($data){
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $stok = htmlspecialchars($data["stok"]);
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE admin_shoes SET
                    nama = '$nama',
                    jenis = '$jenis',
                    stok = '$stok',
                    harga = '$harga',
                    deskripsi = '$deskripsi',
                    gambar = '$gambar'
                WHERE id = $id
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    //ubah figure
    function ubahfigure($data){
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $stok = htmlspecialchars($data["stok"]);
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE admin_figure SET
                    nama = '$nama',
                    jenis = '$jenis',
                    stok = '$stok',
                    harga = '$harga',
                    deskripsi = '$deskripsi',
                    gambar = '$gambar'
                WHERE id = $id
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    //ubah dakimakura
    function ubahdakimakura($data){
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $stok = htmlspecialchars($data["stok"]);
        $harga = htmlspecialchars($data["harga"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE admin_dakimakura SET
                    nama = '$nama',
                    jenis = '$jenis',
                    stok = '$stok',
                    harga = '$harga',
                    deskripsi = '$deskripsi',
                    gambar = '$gambar'
                WHERE id = $id
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    // CARI
    function cariaksesoris($keywordaksesoris){
        $query = "SELECT * FROM admin_aksesoris 
                        WHERE
                    nama LIKE '%$keywordaksesoris%' OR
                    stok LIKE '%$keywordaksesoris%' OR
                    harga LIKE '%$keywordaksesoris%'
                ";
            return query($query);
    }
    function carishoes($keywordshoes){
        $query = "SELECT * FROM admin_shoes 
                        WHERE
                    nama LIKE '%$keywordshoes%' OR
                    stok LIKE '%$keywordshoes%' OR
                    harga LIKE '%$keywordshoes%'
                ";
            return query($query);
    }
    function carifigure($keywordfigure){
        $query = "SELECT * FROM admin_figure 
                        WHERE
                    nama LIKE '%$keywordfigure%' OR
                    stok LIKE '%$keywordfigure%' OR
                    harga LIKE '%$keywordfigure%'
                ";
            return query($query);
    }
    function caridakimakura($keyworddakimakura){
        $query = "SELECT * FROM admin_dakimakura 
                        WHERE
                    nama LIKE '%$keyworddakimakura%' OR
                    stok LIKE '%$keyworddakimakura%' OR
                    harga LIKE '%$keyworddakimakura%'
                ";
            return query($query);
    }
    
?>