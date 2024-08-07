<?php
include '../conn.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM `event` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    // Include description and image in the JSON response
    echo json_encode([
        'title' => $row['title'],
        'description' => $row['dsc'],
        'image' => $row['pic']
    ]);
} else {
    echo json_encode(['error' => 'Data not found']);
}

mysqli_close($conn);
?>