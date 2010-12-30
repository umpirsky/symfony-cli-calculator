<?php

namespace Application\Cli\Command;

use Symfony\Component\Console\Input\InputArgument,
    Symfony\Component\Console\Input\InputOption,
    Symfony\Component\Console;
    
/**
 * Sub command.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class Sub extends Console\Command\Command {
    /**
     * Configure command, set parameters definition and help.
     */
    protected function configure() {
        $this
        ->setName('calc:sub')
        ->setDescription('Calculates the difference between two numbers.')
        ->setDefinition(array(
            new InputArgument('x', InputArgument::REQUIRED, 'Minuend'),
            new InputArgument('y', InputArgument::REQUIRED, 'Subtrahend'),
            new InputOption('round', null, null, 'Round result')
        ))
        ->setHelp(sprintf('%sCalculates the difference between two numbers.%s', PHP_EOL, PHP_EOL));
    }

    /**
     * Calculates the difference between two numbers.
     */
    protected function execute(Console\Input\InputInterface $input, Console\Output\OutputInterface $output) {
		$result = $input->getArgument('x') - $input->getArgument('y');
		if ($input->getOption('round')) {
			$result = round($result);
		}
    	
        $output->write($result);
    }
}