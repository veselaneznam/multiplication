<?php
/**
 * Created by PhpStorm.
 * User: vesela.ferdinandova
 * Date: 10/3/17
 * Time: 11:11 AM
 */

namespace PrimesMultiplication\Console\Command;

use PrimesMultiplication\Primes\Generator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PrimeMultiplicationCommand extends Command
{
	const DEFAULT_NUMBER_OF_PRIMES = 10;
	
	protected function configure()
	{
		$this
			// the name of the command (the part after "bin/console")
			->setName('app:multiply-primes')
			
			// the short description shown while running "php bin/console list"
			->setDescription('Prints out a multiplication table of the first 10 prime numbers')
			->addArgument('number-of-primes', InputArgument::OPTIONAL, 'The number of primes use in the multiplication')
		;
	}
	
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$numberOfPrimes = $input->getArgument('number-of-primes');
		
		$numberOfPrimes = empty($numberOfPrimes) ? self::DEFAULT_NUMBER_OF_PRIMES : $numberOfPrimes;
		
		$primesGenerator = new Generator($numberOfPrimes);
		$primesGenerator->run();
		
		$firstPrimeNumbers = $primesGenerator->getPrimeNumbers();
		
		$table = new Table($output);
		$header = $firstPrimeNumbers;
		array_unshift($header, 'X');

		$table->setHeaders($header);
		
		foreach ($firstPrimeNumbers as $firstNumber) {
			$row = [];
			foreach ($firstPrimeNumbers as $secondNumber) {
				
				$row[] = $firstNumber * $secondNumber;
			}
			array_unshift($row, $firstNumber);
			$table->addRow($row);
		
		}
		$table->render();

	}
}