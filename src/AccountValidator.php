<?php
namespace MyLibrary;

class AccountValidator
{
	public static function validateAlgo($accountNo)
	{
		$lastDigit = (int) substr($accountNo, -1);
		return ($lastDigit % 2 === 0);
	}

	public static function validateTye($accountNo)
	{
		if (isset($accountNo[0]) && $accountNo[0] === '1') {
			return 'SAVINGS';
		} else {
			return 'CURRENT';
		}
	}
}
