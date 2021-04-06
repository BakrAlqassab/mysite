<?php

//https://www.php.net/manual/en/timezones.php
date_default_timezone_set('Europe/Helsinki');
$dt = date('d/m/y');
$dt1 = date('d/m/Y h:i:s');
$dt2 = date('D/M/Y');
$dt3 = date('d/m/Y',strtotime('2000-02-11'));
echo($dt);
echo('<hr>');
echo($dt1);
echo('<hr>');
$names = (array('Bakr','Pekka','Sara','Kwidm','Toamto','Tometo'));

foreach($names as $name)
{
 echo('<h1>'.$name.'</h1>');

}
// for($x = 0;$x<count($names);$x++){
//  for($x = count($names);$x>=0;$x--){

// echo('<h1>'.$names[$x].'</h1>');

// }
$num = 1;
// switch($num)
//    { case 0:
//         echo('Zero');
//         break;
//      case 1 :
//      case 2 :
//         echo('Case One or Two');
//         break;
//     default:
//     echo('Others');
//     break;
//     }

// Replace
// $str1 = 'Welcome To Finland,Hi Finland';
// $str2 = str_replace('Finland','IRAQ',$str1 );




//Substring
// $str1 = 'Welcome To Finland';
// $str2 = substr($str1, 7,11);
// echo($str2)





// echo ('Hello Home <hr>');


// $str1 = '\'Welcome\' ';

// echo($str1. ' To'. $str2)


// $name = 'Bakr';

// echo ($name);
// $num1 = 10;
// $num2 = 50;
// $r = $num1 * $num2;
// echo ('<hr>');
// echo ($r)
?>

<hr>

<!-- <h1>

    <?php



    echo (1992)

    ?>
</h1> -->