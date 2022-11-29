<?php
    session_start();
    include __DIR__ .'./partials/header.php';
    include __DIR__ .'./functions/functions.php';
    $lunghezza_password = $_POST['password'] ?? '';
    
    passwordRandom($lunghezza_password);

    if($lunghezza_password != '') {
        $pass_generata = passwordRandom($lunghezza_password);
        $_SESSION['password'] = $pass_generata;
        header('Location: ./passGenerata.php');
    }
?>


<main>
    <div class="container">
        <div class="wrapper">
            <div class="text-center">
                <h1>Strong Password Generator</h1>
                <h5>Genera una password sicura</h5>
            </div>
            <div class="form-container">
                <form action="index.php" method="POST">
                  <div class="mb-3 d-flex">
                    <div>
                        <p>Lunghezza Password:</p>
                    </div>
                    <div class="input-container">
                        <input type="number" class="form-control" name="password">
                    </div>
                  </div>
                  <div class="mb-3 d-flex">
                    <div>
                        <p>Consenti ripetizioni di uno o più caratteri:</p>
                    </div>
                    <div class="check-container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckChecked">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckChecked">
                                Simboli
                            </label>
                        </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Invia</button>
                  <button type="reset" class="btn btn-secondary">Annulla</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
  include __DIR__ .'./partials/footer.php';
?>