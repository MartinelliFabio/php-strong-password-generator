<?php
    include __DIR__ .'./partials/header.php';
    $lunghezza_password = $_GET['password'] ?? '';
    
    function passwordRandom($lunghezza_password) {

        $array_lettere = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $array_numeri = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $array_simboli = ['!', '"', '£', '$', '%', '&', '/', '(', ')', '=', '?', '^', '*', '[', ']'];
        
        $array_totale = array_merge($array_lettere, $array_numeri, $array_simboli);
        
        $lunghezza_lettere = count($array_lettere) - 1;
        $lunghezza_numeri = count($array_numeri) - 1;
        $lunghezza_simboli = count($array_simboli) - 1;
        $lunghezza_tot = count($array_totale) - 1;
        
        for($i= 0; $i < $lunghezza_password; $i++) {
            $n = rand(0, $lunghezza_tot);
            $pass[] = $array_totale[$n]; 
        }
        return implode($pass);
    }

    if($lunghezza_password === '') {
        $pass_generata = 'Devi inserire una lunghezza per la password!';
    } else {
        $pass_generata = passwordRandom($lunghezza_password);
    }
   

    
?>






<div class="container">
    <form action="index.php" method="GET">
      <div class="mb-3 d-flex">
        <div>
            <p>Lunghezza Password:</p>
        </div>
        <div>
            <input type="text" class="form-control" name="password">
        </div>
      </div>
      <div class="mb-3 d-flex">
        <div>
            <p>Consenti ripetizioni di uno o più caratteri:</p>
        </div>
        <div>
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
    <div>
        <h3>La tua password è: <?php echo $pass_generata; ?></h3>
    </div>
</div>














<?php
  include __DIR__ .'./partials/footer.php';
?>