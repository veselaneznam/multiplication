<?php
/**
 * Created by PhpStorm.
 * User: vesela.ferdinandova
 * Date: 10/3/17
 * Time: 1:49 PM
 */

namespace PrimesMultiplication\Primes;

use PHPUnit\Framework\TestCase;

class GeneratorTest extends TestCase
{
	/**
	 * @dataProvider numberProvider
	 *
	 * @param int $number
	 * @param array $expected
	 */
	public function testGeneratingPrimes(int $number, array $expected)
	{
		$primeGenerator = new Generator($number);
		$primeGenerator->run();
		$this->assertEquals($expected, $primeGenerator->getPrimeNumbers());
	}
	
	public function numberProvider()
	{
		return [
			'dataset we send 0' => [
				'number' => 0,
				'expected' => [],
			],
			'dataset we send 1' => [
				'number' => 1,
				'expected' => [2],
			],
			'dataset we send 2' => [
				'number' => 2,
				'expected' => [2,3]
			],
			'dataset we send 10' => [
				'number' => 10,
				'expected' => [2,3,5,7,11,13,17,19,23,29]
			]
		];
	}
}