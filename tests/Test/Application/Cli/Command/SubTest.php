<?php

namespace Test\Application\Cli\Command;

use Symfony\Component\Console\Tester\CommandTester;
use Application\Cli\Command\Sub;

class SubTest extends \PHPUnit_Framework_TestCase {
	/**
     * @dataProvider provider
     */
    public function testExecute($x, $y, $r) {
        $commandTester = new CommandTester(new Sub());
        $commandTester->execute(array('x' => $x, 'y' => $y));
        $this->assertEquals($commandTester->getDisplay(), $r);
	}
	
	public function provider() {
		return array(
			array(1, 1, 0),
			array(36, 25, 11),
			array(12.5, 1.2, 11.3),
			array(7.123, 6.4, 0.723)
		);
    }
}