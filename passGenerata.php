<?php
    session_start();
    include __DIR__ .'./partials/header.php'; 
?>

    <div id="pass-generata">
        <div>
            <h3>La tua password è: <?php echo $_SESSION['password']; ?></h3>
        </div>
    </div>

<?php
  include __DIR__ .'./partials/footer.php';
?>