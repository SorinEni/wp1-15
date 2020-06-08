<?php
$submit = filter_input(INPUT_POST, 'submit');

$paste = filter_input(INPUT_POST, 'paste');
$ham = filter_input(INPUT_POST, 'ham');
$cheese = filter_input(INPUT_POST, 'cheese');
$pineapple = filter_input(INPUT_POST, 'pineapple');
$oregano = filter_input(INPUT_POST, 'oregano');
$olive = filter_input(INPUT_POST, 'olive');
$mushrooms = filter_input(INPUT_POST, 'mushrooms');
$onion = filter_input(INPUT_POST, 'onion');
$mozzarela = filter_input(INPUT_POST, 'mozzarela');
$basil = filter_input(INPUT_POST, 'basil');
$pepperoni = filter_input(INPUT_POST, 'pepperoni');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($submit)) { ?>
 
        <h3>Objednávka</h3>

        <p>Objednal jste si pizzu s  </p>

        <p>těsto: <?= $paste ?></p>
        <?php 
        if(isset($ham)) { ?>
            <p> se šunkou </p>
        <?php } 
        if(isset($cheese)) { ?>
            <p> se sýrem </p>
        <?php }
        if(isset($pineapple)) { ?>
            <p> s ananasem </p>
        <?php }
        if (isset($oregano)) { ?>
            <p> s oregánem  </p>
        <?php }
        if (isset($olive)) { ?>
            <p> s olivy  </p>
        <?php }
        if (isset($mushrooms)) { ?>
            <p> s houbami  </p>
        <?php }
        if (isset($onion)) { ?>
            <p> s cibuli  </p>
        <?php }
        if (isset($mozzarela)) { ?>
            <p> s mozzarelou </p>
        <?php }
        if (isset($basil)) { ?>
            <p> se bazálkou  </p>
        <?php }
        if (isset($pepperoni)) {  ?>
            <p> s feferonky </p> 
         <?php } 
         
         ?>
         <?php } else { ?> 
    <form action="index.php" method="post">
    
<P>Typ těsta</p>
    <label for="normal">Normální</label>
    <input type="radio" name="paste" id="normal" value="Normální">

    <label for="glutenfree">Bezlepkové</label>
    <input type="radio" name="paste" id="glutenfree" value="Bezlepkové">
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

    <label for="basil">Bazálka</label>
    <input type="checkbox" name="basil" id="basil">

    <label for="pepperoni">Feferony</label>
    <input type="checkbox" name="pepperoni" id="pepperoni">


    <input type="submit" value="Objednat" name="submit">
   
    </form>

    <?php } ?>

</body>
</html>