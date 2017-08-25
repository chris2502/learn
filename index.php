<?php
/**
 * Created by PhpStorm.
 * User: chrisebongue
 * Date: 18/08/17
 * Time: 16:56
 */

include_once "Calcul.php";

use mathematics\Calcul;

$calcul = new Calcul();

echo $calcul->sum(3, 2);
echo "\n";