<?php
include('config.php');

// field ID
$type = $_GET['type'];
$id = $_GET['id'];

$table = $type === 'makanan' ? 'tbl_makanan' : 'tbl_minuman';
$id_field = $type === 'makanan' ? 'id_makanan' : 'id_minuman';

$sql = "DELETE FROM $table WHERE $id_field = $id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
