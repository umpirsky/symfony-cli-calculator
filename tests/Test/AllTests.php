<?php

namespace Test;

class AllTests {
    public static function suite() {
        $suite = new \PHPUnit_Framework_TestSuite('Application');
        
        $suite->addTestSuite('\Test\Application\Cli\CalculatorTest');
        $suite->addTestSuite('\Test\Application\Cli\Command\AddTest');
        $suite->addTestSuite('\Test\Application\Cli\Command\SubTest');
        $suite->addTestSuite('\Test\Application\Cli\Command\MulTest');
        $suite->addTestSuite('\Test\Application\Cli\Command\DivTest');
 
        return $suite;
    }
}