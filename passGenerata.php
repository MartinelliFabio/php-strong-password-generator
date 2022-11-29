<?php
    session_start();
    include __DIR__ .'./partials/header.php'; 
?>

    <div class="my-container">
        <div id="pass-generata">
            <div class="wrapper">
                <div class="d-flex flex-column align-items-center">
                    <h3 class="mb-5">La tua password è: <?php echo $_SESSION['password']; ?></h3>
                    <a href="./index.php">
                        <button class="btn btn-primary">Torna alla pagina principale</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
  include __DIR__ .'./partials/footer.php';
?>