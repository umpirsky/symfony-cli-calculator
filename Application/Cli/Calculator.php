<?php

namespace Application\Cli;

use Symfony\Component\Console\Application,
	Application\Cli\Command;
    
/**
 * Calculator application.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class Calculator extends Application {
	/**
     * Calculator constructor.
     */
    public function __construct() {
    	parent::__construct('Welcome to Umpirsky CLI Calculator', '1.0');
    	
    	$this->addCommands(array(
			new Command\Add(),
			new Command\Sub(),
			new Command\Mul(),
			new Command\Div()
		));
    }
}