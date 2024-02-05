<?php

if (isset($_GET['firstNumber'])) {
    $firstNumber = $_GET['firstNumber'];
}

if (isset($_GET['secondNumber'])) {
    $secondNumber = $_GET['secondNumber'];
}

if (!empty($_GET['operateur'])) {
    $operateur = $_GET['operateur'];
}





if (isset($firstNumber, $secondNumber, $operateur) && is_numeric($firstNumber) && is_numeric($secondNumber)) {
    if ($operateur == 'multiplication') {
        $resultat = $firstNumber * $secondNumber;
    } elseif ($operateur == 'addition') {
        $resultat = $firstNumber + $secondNumber;
    } elseif ($operateur == 'soustraction') {
        $resultat = $firstNumber - $secondNumber;
    } elseif ($operateur == 'division') {
        if ($secondNumber != '0') {
            $resultat = $firstNumber / $secondNumber;
        } else {
            $resultat = "Division par zéro impossible";
        }}
     else {
      $resultat ="Opérateur invalide";
       }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Calculatrice PHP</title>
</head>
<body>
<form method="GET" action="">
   
    <div class="calculette box-calcul"> 
    <div class="title-calc">Calcul-3000</div>
     <div class="row"> 
     <input class="screen" type="number" name="firstNumber" id="firstNumber" value="<?= isset($firstNumber) ? $firstNumber : '' ?>">> 
            <label class="ope">
                <select  class="select" type="select" name="operateur">
                    <option class="operateur" value="multiplication" selected>x</option>
                    <option class="operateur" value="addition">+</option>
                    <option class="operateur" value="soustraction">-</option>
                    <option class="operateur" value="division">/</option>
                </select>
            </label>
            <input class="screen" type="number" name="secondNumber" id="secondNumber" value="<?= isset($secondNumber) ? $secondNumber : '' ?>">
            <input class="button" type="submit" value="="/>
  </form>

      <?php if (isset($resultat)) : ?>
          <p class="screen"><?= $resultat ?> </p>
      <?php endif; ?></div>
      </div>
    </div>

    
    <!-- BACKGROUND -->
    <div class="background">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
   </div>
</body>
</html>
