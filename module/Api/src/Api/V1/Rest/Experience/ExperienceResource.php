<?php
namespace Api\V1\Rest\Experience;

use ZF\Apigility\Doctrine\Server\Resource\DoctrineResource;

class ExperienceResource extends DoctrineResource
{
	function update($id, $data)
	{
		if($this->getInputFilter())
			$data = $this->getInputFilter()->getValues();
		
		return parent::update($id, $data);
	}
}
