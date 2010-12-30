<?php

namespace Test\Application\Cli;

use Symfony\Component\Console\Tester\ApplicationTester;

class CalculatorTest extends \PHPUnit_Framework_TestCase {
	/**
     * @dataProvider provider
     */
    public function testRun($command, $x, $y, $result) {
    	$calculator = new \Application\Cli\Calculator();
    	$calculator->setAutoExit(false); // Set autoExit to false when testing
        $calculatorTester = new ApplicationTester($calculator);
        $calculatorTester->run(array('command' => $command, 'x' => $x, 'y' => $y));
        $stream = $calculatorTester->getOutput()->getStream();
        rewind($stream);
        $this->assertEquals(stream_get_contents($stream), $result);
	}
	
	public function provider() {
		return array(
			array('calc:add', 1, 1, 2),
			array('calc:sub', 5, 3, 2),
			array('calc:mul', 2, 2, 4),
			array('calc:div', 6, 2, 3),
		);
    }
}