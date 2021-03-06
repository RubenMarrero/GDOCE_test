<?php declare(strict_types=1);

namespace App\Tests;


use \PHPUnit\Framework\TestCase;
use App\Controller\GuessController;
use \App\Utils\Numbers;

/**
 *
 */ 
class GuessNumberTest extends TestCase
{

	public function testFrameworkConfigured() : void
	{
		$this->assertTrue(true);
	}

	public function setUp() : void
	{
		$this->secret_number = rand(Numbers::MIN_RANGE , Numbers::MAX_RANGE);
	}

	 public function testSiNumeroEntero() : void
	{
		$this->expectException("TypeError");
	 	Numbers::Guess(2.5);
	 }

	public function testRangoValido() : void 
	{
		$this->assertIsInt(Numbers::MIN_RANGE);
		$this->assertIsInt(Numbers::MAX_RANGE);
		$this->assertIsInt(Numbers::OUT_OF_RANGE);
		
		$this->assertGreaterThan(Numbers::MIN_RANGE		, Numbers::MAX_RANGE);
		$this->assertGreaterThan(Numbers::OUT_OF_RANGE	, Numbers::MIN_RANGE);
		$this->assertGreaterThan(Numbers::OUT_OF_RANGE	, 0);

		$this->assertSame(
			Numbers::Guess(Numbers::MAX_RANGE + 1),
			Numbers::OUT_OF_RANGE
		);

		$this->assertSame(
			Numbers::Guess(Numbers::MIN_RANGE - 1),
			Numbers::OUT_OF_RANGE
		);
	}

	public function testAdivinarNumero() : void
	{
		$this->assertSame(
			Numbers::Guess($this->secret_number),
			$this->secret_number
		);

		$this->assertNotSame(
			Numbers::Guess($this->secret_number),
			Numbers::OUT_OF_RANGE
		);
	} 
}