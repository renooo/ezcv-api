<?php
namespace Api\V1\Rest\Employee;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\AbstractListenerAggregate;
use ZF\Apigility\Doctrine\Server\Event\DoctrineResourceEvent;
use ZF\ApiProblem\ApiProblem;
use ZF\MvcAuth\Identity\AuthenticatedIdentity;

class EmployeeListener extends AbstractListenerAggregate
{
	public function attach(EventManagerInterface $events)
	{
		$events->attach(DoctrineResourceEvent::EVENT_UPDATE_PRE, array($this, 'onPreUpdate'));
	}

	protected function handleEvent(DoctrineResourceEvent $e)
	{
		$identity = $e->getResourceEvent()->getIdentity();
		$employee = $e->getEntity();

		if(!($identity instanceof AuthenticatedIdentity) || 
			 $employee->getUserName() != $identity->getAuthenticationIdentity()['user_id']){

			$e->stopPropagation();
	        return new ApiProblem(403, 'You shall not pass !');
	    }
	}

	public function onPreUpdate(DoctrineResourceEvent $e)
	{
		return $this->handleEvent($e);
	}
}
