<?php
use PHPUnit\Framework\TestCase;
use MyLibrary\AccountValidator;

class AccountValidatorTest extends TestCase
{
	public function testValidateAlgo()
	{
		$trueCases = ['1234560', '9876542', '246802', '102468', '86420'];
		foreach ($trueCases as $accountNo) {
			$this->assertTrue(AccountValidator::validateAlgo($accountNo));
		}

		$falseCases = ['1234561', '9876543', '246803', '102469', '86421'];
		foreach ($falseCases as $accountNo) {
			$this->assertFalse(AccountValidator::validateAlgo($accountNo));
		}
	}

	public function testValidateTye()
	{
		$savingsCases = ['123456', '198765', '111111', '123999', '102468'];
		foreach ($savingsCases as $accountNo) {
			$this->assertEquals('SAVINGS', AccountValidator::validateTye($accountNo));
		}

		$currentCases = ['223456', '987654', '200000', '345678', '999999'];
		foreach ($currentCases as $accountNo) {
			$this->assertEquals('CURRENT', AccountValidator::validateTye($accountNo));
		}
	}
}
