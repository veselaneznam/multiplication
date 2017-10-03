<?php
/**
 * Created by PhpStorm.
 * User: vesela.ferdinandova
 * Date: 10/3/17
 * Time: 11:13 AM
 */

namespace PrimesMultiplication\Primes;

class Generator
{
	/**
	 * @var int
	 */
	private $numberOfPrimesToGenerate;
	
	/**
	 * @var array
	 */
	private $primeNumbers;
	
	/**
	 * Generator constructor.
	 *
	 * @param $numberOfPrimesToGenerate
	 */
	public function __construct(int $numberOfPrimesToGenerate)
	{
		
		$this->numberOfPrimesToGenerate = $numberOfPrimesToGenerate;
		$this->primeNumbers = [];
	}
	
	public function run() {
		$n = 2;
		while (count($this->primeNumbers) < $this->numberOfPrimesToGenerate) {
			if($this->isPrime($n)) {
				$this->primeNumbers[] = $n;
			}
			$n++;
		}
	}
	
	/**
	 * @return array
	 */
	public function getPrimeNumbers() : array
	{
		return $this->primeNumbers;
	}
	
	/**
	 * @param int $n
	 *
	 * @return bool
	 */
	private function isPrime(int $n)
	{
		if($n <= 3) {
			return true;
		}
		
		if ($n%2 == 0){
			return false;
		}
		
		for ($i=3; $i*$i<=$n; $i+=2) {
			if ($n%$i == 0) {
				return false;
			}
		}
		
		return true;
	}
}