<?php
/**
 * Learn integration with jenkins
 *
 * PHP version 7.0
 *
 * @category PHP
 * @package  No package available
 * @author   Display Name <chrisebongue@personel.com>
 * @license  Learn jenkins
 * @version  GIT: <git_1>
 * @link     http://learnjenkins.com
 */


include_once "Calcul.php";
use PHPUnit\Framework\TestCase;

use mathematics\Calcul;

/**
 * Class TestIntegration
 *
 * @category PHP
 * @package  Mathematics
 * @author   Display Name <chrisebongue@personel.com>
 * @license  No license available
 * @version  Release: <No_version>
 * @link     No link available
 */

class TestIntegration extends TestCase{

    public function testSum(){
        $calcul = new Calcul();
        $result = $calcul->sum(2, 3);
        $this->assertEquals(5, $result);
    }
}
?>