<?php


namespace vicgonvt\prime;


class PrimeReporter
{
	public static function handle($primes = [])
	{

		for ($i = 2; $i < 100; $i++) {
			$flag = true;
			for ($j = 0; $j < count($primes); $j++) {
				if (($i % $primes[$j]) == 0) {
					$flag = false;
					break;
				}
			}
			if ($flag && !in_array($i, $primes)) {
				$primes[] = $i;
			}
		}

		return $primes;
	}
}