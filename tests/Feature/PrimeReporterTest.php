<?php


namespace vicgonvt\prime\tests\Feature;


use Orchestra\Testbench\TestCase;
use vicgonvt\prime\PrimeReporter;

class PrimeReporterTest extends TestCase
{
	/**
	 * @test
	 */
	public function PrimeReporterTest()
	{
		$primes = [2];
		$this->assertEquals([1,2,3,5,7],PrimeReporter::handle($primes));
	}
}