
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
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
       'alex' => 'Laravel'
    ];
    echo ('<pre>');
print_r($nombres);
echo ('</pre>');

while (!empty($nombres)) {
    $primerRand = rand(1, count($nombres)) -1;
    $nombretrabajador = $nombres[$primerRand];
    unset($nombres[$primerRand]);  //impide que haya bucle infitito

    $nombres = array_values($nombres);
   

    echo($nombretrabajador .  '<br>');

    
}






?>
 
</body>
</html>