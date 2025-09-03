# Account Validator Library

A PHP library to validate account numbers with:

- `validateAlgo($accountNo)` → returns boolean
- `validateTye($accountNo)` → returns account type string ("SAVINGS" or "CURRENT")

## Requirements
- PHP >=5.6 <=8.3
- Composer
- PHPUnit (for tests)

## Installation
```bash
composer require your-vendor/account-validator
