<?php
namespace Api\V1\Rest\Employee;

use ZF\Apigility\Doctrine\Server\Resource\DoctrineResource;

class EmployeeResource extends DoctrineResource
{
	function update($id, $data)
	{
		if($this->getInputFilter())
			$data = $this->getInputFilter()->getValues();
		
		return parent::update($id, $data);
	}
}
