<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_project1");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahProject($data) {
    global $conn;

    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $teknologi = htmlspecialchars($data["teknologi"]);
    $link = htmlspecialchars($data["link"]);

    $query = "INSERT INTO project VALUES ('', '$judul', '$deskripsi', '$teknologi', '$link')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;

    $query = "DELETE FROM project WHERE id = $id";
    
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}