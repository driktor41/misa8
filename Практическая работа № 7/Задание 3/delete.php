<?php
require_once 'config.php'; 

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    

    $sql = "DELETE FROM users WHERE id = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            header("Location: admin.php?message=deleted");
            exit();
        } else {
            header("Location: admin.php?error=delete_failed");
            exit();
        }
        
        $stmt->close();
    } else {
        header("Location: admin.php?error=prepare_failed");
        exit();
    }
} else {
    header("Location: admin.php?error=no_id");
    exit();
}

$conn->close();
?>