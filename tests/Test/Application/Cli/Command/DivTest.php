<?php

namespace Test\Application\Cli\Command;

use Symfony\Component\Console\Tester\CommandTester;
use Application\Cli\Command\Div;

class DivTest extends \PHPUnit_Framework_TestCase {
	/**
     * @dataProvider provider
     */
    public function testExecute($x, $y, $r) {
        $commandTester = new CommandTester(new Div());
        $commandTester->execute(array('x' => $x, 'y' => $y));
        $this->assertEquals($commandTester->getDisplay(), $r);
	}
	
	public function provider() {
		return array(
			array(1, 1, 1),
			array(25, 36, 0.69444444444444),
			array(12.5, 1.2, 10.416666666667),
			array(7.123, 6.4, 1.11296875)
		);
    }
}