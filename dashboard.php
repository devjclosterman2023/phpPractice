<?php
// Include necessary files
require_once 'includes/session.php';

// Redirect to the login page if the user is not authenticated
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Display the dashboard template
require 'templates/dashboard.php';
?>
