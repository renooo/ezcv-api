<?php
namespace Api\V1\Rest\Experience;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\AbstractListenerAggregate;
use ZF\Apigility\Doctrine\Server\Event\DoctrineResourceEvent;
use ZF\ApiProblem\ApiProblem;
use ZF\MvcAuth\Identity\AuthenticatedIdentity;

class ExperienceListener extends AbstractListenerAggregate
{
	public function attach(EventManagerInterface $events)
	{
		$events->attach(DoctrineResourceEvent::EVENT_CREATE_PRE, array($this, 'onPreCreate'));
		$events->attach(DoctrineResourceEvent::EVENT_UPDATE_PRE, array($this, 'onPreUpdate'));
		$events->attach(DoctrineResourceEvent::EVENT_DELETE_PRE, array($this, 'onPreDelete'));
	}

	protected function handleEvent(DoctrineResourceEvent $e)
	{
		$identity = $e->getResourceEvent()->getIdentity();
		$experience = $e->getEntity();

		if(!($identity instanceof AuthenticatedIdentity) || 
			 ($experience->getEmployee() && $experience->getEmployee()->getUserName() != 
			 $identity->getAuthenticationIdentity()['user_id'])){

			$e->stopPropagation();
	        return new ApiProblem(403, 'You shall not pass !');
	    }
	}

	public function onPreUpdate(DoctrineResourceEvent $e)
	{
		return $this->handleEvent($e);
	}


	public function onPreDelete(DoctrineResourceEvent $e)
	{
		return $this->handleEvent($e);
	}

	public function onPreCreate(DoctrineResourceEvent $e)
	{
		return $this->handleEvent($e);

		/*$identity = $e->getResourceEvent()->getIdentity();

		if(!($identity instanceof AuthenticatedIdentity)){
			$e->stopPropagation();
	        return new ApiProblem(403, 'You shall not pass !');
	    }

	    $repository = $e->getTarget()->getObjectManager()->getRepository('Application\Entity\Employee');

	    $userName = $identity->getAuthenticationIdentity()['user_id'];
	    $employee = $repository->findOneBy(array('userName' => $userName));

	    $experience = $e->getEntity();
	    $experience->setEmployee($employee);*/
	}
}
