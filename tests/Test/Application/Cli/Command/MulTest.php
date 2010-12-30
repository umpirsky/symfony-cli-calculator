<?php

namespace Test\Application\Cli\Command;

use Symfony\Component\Console\Tester\CommandTester;
use Application\Cli\Command\Mul;

class MulTest extends \PHPUnit_Framework_TestCase {
	/**
     * @dataProvider provider
     */
    public function testExecute($x, $y, $r) {
        $commandTester = new CommandTester(new Mul());
        $commandTester->execute(array('x' => $x, 'y' => $y));
        $this->assertEquals($commandTester->getDisplay(), $r);
	}
	
	public function provider() {
		return array(
			array(1, 1, 1),
			array(25, 36, 900),
			array(12.5, 1.2, 15),
			array(7.123, 6.4, 45.5872)
		);
    }
}