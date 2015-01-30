<?php
namespace Api\V1\Rpc\Register;

use Zend\Mvc\Controller\AbstractActionController;

class RegisterController extends AbstractActionController
{
    public function registerAction()
    {
    	$inputFilter = $this->getEvent()->getParam('ZF\ContentValidation\InputFilter');
    	$inputFilter->get('password')->getFilterChain()->attachByName('Application\Filter\Bcrypt');
    	$inputFilter->remove('passwordConfirm');

    	$data = $inputFilter->getValues();
    	
    	return $data;
    }
}
