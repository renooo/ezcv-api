<?php
namespace Application\Validator\Service;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\MutableCreationOptionsInterface;

class DoctrineValidatorAbstractFactory implements AbstractFactoryInterface, MutableCreationOptionsInterface
{
    protected $options = array();

    public function setCreationOptions(array $options)
    {
        $this->options = $options;
    }

    public function canCreateServiceWithName(ServiceLocatorInterface $validators, $name, $requestedName)
    {
        $validators = array(
            'DoctrineModule\Validator\UniqueObject',
            'DoctrineModule\Validator\ObjectExists',
            'DoctrineModule\Validator\NoObjectExists'
        );
        
        return in_array($requestedName, $validators);
    }

    public function createServiceWithName(ServiceLocatorInterface $validators, $name, $requestedName)
    {
        $options = $this->options;
        
        if(isset($options['object_manager']) && is_string($options['object_manager'])){
            $options['object_manager'] = $validators->getServiceLocator()->get($this->options['object_manager']);
            
            if(isset($options['object_repository']) && is_string($options['object_repository']))
                $options['object_repository'] = $options['object_manager']->getRepository($options['object_repository']);
        }

        return new $requestedName($options);
    }
}
