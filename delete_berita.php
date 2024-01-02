<?php
    include "db_conn.php";

    if(isset($_GET["id"])){
        // Prepared statement untuk menghapus data
        $query = $conn->prepare("DELETE FROM `berita` WHERE id=:id");
        $query->bindParam(":id", $_GET["id"]);
        // Jalankan Perintah SQL
        $query->execute();
        // Alihkan ke index.php
        header("location: all_konten.php");
    }
?>