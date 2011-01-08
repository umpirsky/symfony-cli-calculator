<?php

namespace Application\Cli\Command;

use Symfony\Component\Console\Input\InputArgument,
    Symfony\Component\Console\Input\InputOption,
    Symfony\Component\Console;
    
/**
 * Add command.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class Add extends Console\Command\Command {
    /**
     * Configure command, set parameters definition and help.
     */
    protected function configure() {
        $this
        ->setName('calc:add')
        ->setDescription('Calculates the sum of two numbers.')
        ->setDefinition(array(
            new InputArgument('x', InputArgument::REQUIRED, 'First addend'),
            new InputArgument('y', InputArgument::REQUIRED, 'Second addend'),
            new InputOption('round', null, null, 'Round result')
        ))
        ->setHelp(sprintf(
				'%sCalculates the sum of two numbers.%s', 
				PHP_EOL, 
				PHP_EOL
		));
    }

    /**
     * Calculates the sum of two numbers.
     */
    protected function execute(Console\Input\InputInterface $input, Console\Output\OutputInterface $output) {
        $result = $input->getArgument('x') + $input->getArgument('y');
		if ($input->getOption('round')) {
			$result = round($result);
		}
    	
        $output->write($result);
    }
}