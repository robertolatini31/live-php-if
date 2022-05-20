<?php
    $array = [
        'ciao',
        'come',
        'va',
        'la',
        'vita',
    ];
    var_dump($array);


    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit Magnam quasi';

    $array_text = explode(' ', $text);
    var_dump($array_text);


    $word = $_GET['word'];
    var_dump($word);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controlla-parola</title>
</head>
<body>
   
    <?php if(in_array($word, $array_text)) : ?>
        <h3>
            parola trovata : <?php echo $word; ?>
        </h3>
    <?php else : ?>
        <h3>
            parola non trovata
        </h3>
    <?php endif; ?>
<!-- 1. Inserire delle parole all’interno di un array
2. controllare che la parola passata dall’utente è presente nell'array. -->

</body>
</html>