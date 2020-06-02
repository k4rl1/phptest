<?php

require_once(dirname(dirname(__FILE__)) . '/src/reasu/Chop.php');

use PHPUnit\Framework\TestCase;

class ChopTest extends TestCase {

	/**
	 * @dataProvider easyChopProvider
	 * @dataProvider chopPosition
	 */
	public function testChop($expected, $num, $b) {
		$a = new reasu\Chop();
		$this->assertEquals($expected, $a->chop($num, $b));
	}

	public function easyChopProvider() {
		return [
			'empty array'  => [-1, 3, []],
			"in array"     => [0, 3, [3]],
			"not in array" => [-1, 3, [1]]
		];
	}

	public function chopPosition() {
		return [
			"first position"  => [0, 1, [1, 3, 5]],
			"second position" => [1, 3, [1, 3, 5]],
			"third position"  => [2, 5, [1, 3, 5]],
			"no position 2"    => [-1, 2, [1, 3, 5]],
			"no position 4"    => [-1, 4, [1, 3, 5]],
			"no position 6"    => [-1, 6, [1, 3, 5]],
			"no position 8"    => [-1, 8, [1, 3, 5]]
		];
	}
}
