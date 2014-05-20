<?php

namespace Contribution\Form;

use Zend\Form\Form;
use Zend\Form\Element\Select;

class ContributionForm extends Form
{
	public function __construct($name = null)
	{
		parent::__construct('Contribution');
		$this->setAttribute('method', 'post');
		// 店名
		$this->add(array(
				'name' => 'shop_name',
				'attributes' => array(
					'type' => 'text',
				),
				'options' => array(
					'label' => '店名',
				),
		));

		// 都道府県
		$select = new Select('prefecture');
		$select->setLabel('都道府県');
		$select->setValueOptions(array(
				'tokyo' => '東京',
				'kanagawa' => '神奈川',
		));
		$this->add($select);
		
		// 市町村
		$this->add(array(
				'name' => 'town',
				'attributes' => array(
						'type' => 'text',
				),
				'options' => array(
						'label' => '市町村',
				),
		));

		// 番地
		$this->add(array(
				'name' => 'house_num',
				'attributes' => array(
						'type' => 'text',
				),
				'options' => array(
						'label' => '番地',
				),
		));

		// ビル名等
		$this->add(array(
				'name' => 'building',
				'attributes' => array(
						'type' => 'text',
				),
				'options' => array(
						'label' => 'ビル名等',
				),
		));

		// コメント
		$this->add(array(
				'name' => 'comment',
				'attributes' => array(
						'type' => 'textarea',
				),
				'options' => array(
						'label' => 'コメント',
				),
		));
		
		// submitボタン
		$this->add(array(
				'name' => 'submit',
				'attributes' => array(
						'type' => 'submit',
						'value' => '投稿する',
						'id' => 'submitbutton',
				),
		));
		
	}
}
