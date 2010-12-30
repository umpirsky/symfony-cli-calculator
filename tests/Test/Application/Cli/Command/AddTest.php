<?php

namespace Test\Application\Cli\Command;

use Symfony\Component\Console\Tester\CommandTester;
use Application\Cli\Command\Add;

class AddTest extends \PHPUnit_Framework_TestCase {
	/**
     * @dataProvider provider
     */
    public function testExecute($x, $y, $r) {
        $commandTester = new CommandTester(new Add());
        $commandTester->execute(array('x' => $x, 'y' => $y));
        $this->assertEquals($commandTester->getDisplay(), $r);
	}
	
	public function provider() {
		return array(
			array(1, 1, 2),
			array(25, 36, 61),
			array(12.5, 1.2, 13.7),
			array(7.123, 6.4, 13.523)
		);
    }
}