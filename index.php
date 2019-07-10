<?php
/*
$nombres = [
    'toni' => ' HTML5/CSS3',
    'jorge' => 'Javascript',
    'julia' => 'PHP', 
    'jose' => 'Json/XML',
    'mateo' => 'Python', 
    'jaume' => 'Java',
    'petro' => 'Sass/Less',
     'alejandro' => 'Laravel',
     'fran' => ' HTML5/CSS3',
     'adrian' => 'Javascript', 
     'lolo'  => 'PHP', 
     'cristian' => 'Json/XML',
     'jordi' => 'Python',
      'david'  => 'Java',
       'luis'  => 'Python', 
       'alex' => 'Laravel',
    ];


    switch($nombres) {
    case 1:
    echo "Your favorite color is red!";
    break;
    case 2:
    echo "Your favorite color is red!";

    break;
    case 3:
    echo "Your favorite color is red!";

    break;
    case 4:
    echo "Your favorite color is red!";

    break;
    case 5:
    echo "Your favorite color is red!";

    break;
    case 6:
    echo "Your favorite color is red!";

    break;
    case 7:
    echo "Your favorite color is red!";

    break;
    case 8:
    echo "Your favorite color is red!";

    break;
    case 9:
    echo "Your favorite color is red!";

    break;
    case 10:
    echo "Your favorite color is red!";

    break;
    case 11:
    echo "Your favorite color is red!";

    break;
    case 12:
    echo "Your favorite color is red!";

    break;
    case 13:
    echo "Your favorite color is red!";
    break;
    case 14:
    break;
    case 15:
    echo "Your favorite color is red!";

    break;
    case 16:
    echo "Your favorite color is red!";

    break;
else {
    echo("ERROR ESTAIS DESPEDIDOS");
}    };
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$nombres = [
    'toni',
    'jorge',
    'julia', 
    'jose',
    'mateo', 
    'jaume',
    'petro',
     'alejandro',
     'fran',
     'adrian', 
     'lolo', 
     'cristian',
     'jordi',
      'david',
       'luis', 
       'alex',
    ];
$habilidades = [
    ' HTML5/CSS3',
    'Javascript',
    'PHP',
    'Json/XML',
    'Python',
    'Java',
    'Sass/Less',
    'Laravel',
];

while (!empty($nombres)) {
    $primerRand = rand(1, count($nombres)) -1;
    $nombretrabajador = $nombres[$primerRand];
    unset($nombres[$primerRand]);  //impide que haya bucle infitito

    $nombres = array_values($nombres);
     
    $segundoRand = rand(1, count($habilidades)) -1;
    $nombreHabilidad = $habilidades[$segundoRand];
    unset($habilidades[$habilidades]);
    $habilidades = array_values($habilidades);

    echo($nombretrabajador . '->' . $nombreHabilidad  . '<br>');
}






?>
 
</body>
</html>