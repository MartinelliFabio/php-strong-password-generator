<?php
    session_start();
    include __DIR__ .'./partials/header.php'; 
?>

    <div>
        <h3>La tua password è: <?php echo $_SESSION['password']; ?></h3>
    </div>

<?php
  include __DIR__ .'./partials/footer.php';
?>