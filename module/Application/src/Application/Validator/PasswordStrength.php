<?php
namespace Application\Validator;

use Zend\Validator\AbstractValidator;

class PasswordStrength extends AbstractValidator
{
	const TOO_WEAK = 'passwordTooWeak';
	
	protected $messageTemplates = array(
		self::TOO_WEAK => 'The password must contain at least 1 capital letter, 1 number and 1 special character.'
	);
	
	function isValid($value)
	{
		$this->setValue($value);
		
		$capCount  = preg_match_all('/[A-Z]/', $value, $matches);
		$numCount  = preg_match_all('/[0-9]/', $value, $matches);
		$specCount = preg_match_all('/[^0-9a-zA-z]/', $value, $matches);
		
		if(($capCount + $numCount + $specCount) < 3){
			$this->error(self::TOO_WEAK);
			return false;
		}
		
		return true;
	}	
}
