<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
<?php
require_once 'caneta.php';

$c1 = new Caneta("BIC", "Azul", 0.5);
$c2 = new Caneta("KKK", "Verde", 1.0);
// $c1->setModelo("BIC");
// $c1->setPonta(0.5);

// print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}"

print_r($c1);
print_r($c2);


?>

</pre>
</body>

</html>