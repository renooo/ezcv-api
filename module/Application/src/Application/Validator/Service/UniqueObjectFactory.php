<?php
namespace Application\Validator\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\MutableCreationOptionsInterface;
use DoctrineModule\Validator\UniqueObject;

class UniqueObjectFactory implements FactoryInterface, MutableCreationOptionsInterface
{
    /**
     * @var array
     */
    protected $options = array();

    /**
     * @param array $options
     */
    public function setCreationOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * @param ServiceLocatorInterface $validators
     * @return UniqueObject
     */
    public function createService(ServiceLocatorInterface $validators)
    {
        $options = $this->options;
        
        if(isset($options['object_manager']) && is_string($options['object_manager'])){
        	$options['object_manager'] = $validators->getServiceLocator()->get($this->options['object_manager']);
        	
        	if(isset($options['object_repository']) && is_string($options['object_repository']))
        		$options['object_repository'] = $options['object_manager']->getRepository($options['object_repository']);
        }

        return new UniqueObject($options);
    } 
}
