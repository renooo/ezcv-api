<?php
namespace Api\V1\Rest\Experience;

use ZF\Apigility\Doctrine\Server\Resource\DoctrineResource;

class ExperienceResource extends DoctrineResource
{
	function create($data)
	{
		if($this->getInputFilter())
			$data = $this->getInputFilter()->getValues();
		
		return parent::create($data);
	}

	function update($id, $data)
	{
		if($this->getInputFilter())
			$data = $this->getInputFilter()->getValues();
		
		return parent::update($id, $data);
	}
}
