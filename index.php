<?php
$submit = filter_input(INPUT_POST, 'submit');
var_dump($submit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
    
<P>Typ těsta</p>
    <label for="normal">Normální</label>
    <input type="radio" name="paste" id="normal">

    <label for="glutenfree">Bezlepkové</label>
    <input type="radio" name="paste" id="glutenfree">
<p>Přílohy</p>
    <br><label for="ham">Šunka</label>
    <input type="checkbox" name="ham" id="ham">

    <label for="cheese">Sýr</label>
    <input type="checkbox" name="cheese" id="cheese">

    <label for="pineapple">Ananas</label>
    <input type="checkbox" name="pineapple" id="pineapple">

    <label for="oregano">Oregano</label>
    <input type="checkbox" name="oregano" id="oregano">

    <label for="olive">Olivy</label>
    <input type="checkbox" name="olive" id="olive">

    <label for="mushrooms">Žampiony</label>
    <input type="checkbox" name="mushrooms" id="mushrooms">

    <label for="onion">Cibule</label>
    <input type="checkbox" name="onion" id="onion">

    <label for="mozzarela">Mozzarela</label>
    <input type="checkbox" name="mozzarela" id="mozzarela">

    <label for="basil">Bazalka</label>
    <input type="checkbox" name="basil" id="basil">

    <label for="pepperoni">Feferony</label>
    <input type="checkbox" name="pepperoni" id="pepperoni">


    <input type="submit" value="Objednat">
   
    </form>

    <?php
if (isset($submit)) {
    echo "<br> Objednávka byla přijata. Prosíme abyste nedali dýško poslíčkovi!!";
} else {
    echo "<br> Neobjednal jste si pizzu";
}
?>


</body>
</html>