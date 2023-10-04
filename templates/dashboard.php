<!-- templates/dashboard.php -->
<?php require_once 'header.php'; ?>

<main>
    <h1>Welcome to Your Dashboard</h1>
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
</main>

<?php require_once 'footer.php'; ?>
