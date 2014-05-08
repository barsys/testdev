<?php

namespace Contribution\Form;

use Zend\Form\Form;

class ContributionForm extends From
{
	public function __construct($name = null)
	{
		parent::__construct('Contribution');
		$this->setAttribute('method', 'post');
		$this->add(array(
				'name' => 'shop_name'
				
				));
	}
}
