<?php
// Include necessary files
require_once 'includes/session.php';

// Destroy the session and redirect to the home page
session_destroy();
header('Location: index.php');
exit();
?>
