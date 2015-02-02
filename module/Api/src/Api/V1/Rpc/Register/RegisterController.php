<?php
namespace Api\V1\Rpc\Register;

use Zend\Mvc\Controller\AbstractActionController;
use Application\Entity\Employee;
use Application\Entity\OAuthUser;
use Doctrine\Stdlib\Hydrator\DoctrineObject;

class RegisterController extends AbstractActionController
{
    public function registerAction()
    {
    	$inputFilter = $this->getEvent()->getParam('ZF\ContentValidation\InputFilter');
    	$inputFilter->get('password')->getFilterChain()->attachByName('Application\Filter\Bcrypt');

    	$data = $inputFilter->getValues();

    	$sl = $this->getServiceLocator();
    	$em = $sl->get('Doctrine\ORM\EntityManager');

    	$hydrators = $sl->get('HydratorManager');
    	$hydrator  = $hydrators->get('DoctrineModule\Stdlib\Hydrator\DoctrineObject', $em);
    	
    	$oAuthUser = new OAuthUser();
    	$hydrator->hydrate($data, $oAuthUser);
    	$em->persist($oAuthUser);
    	$em->flush();

    	$employee = new Employee();
    	$hydrator->hydrate($data, $employee);
		$em->persist($employee);
    	$em->flush();

    	return $this->getResponse()->setStatusCode(201);
    }
}
