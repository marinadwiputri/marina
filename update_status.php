<?php
include 'koneksi.php';

$id       = $_POST['id'];
$status   = $_POST['status'];
$feedback = $_POST['feedback'];

$query = "UPDATE aspirasi 
          SET status = '$status', feedback = '$feedback'
          WHERE id_aspirasi = '$id'";
        
$sql = mysqli_query($koneksi, $query);

header("Location: admin.php");
exit;