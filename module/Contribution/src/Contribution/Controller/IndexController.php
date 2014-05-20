<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Contribution\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Contribution\Form\ContributionForm;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$form = new ContributionForm();
    	
    	$values = array(
    			'form' => $form,
    	);
    	$view = new ViewModel($values);
    	
        return $view;
    }
    
    public function comfirmAction()
    {

    	$form = new ContributionForm();
    	
    	$request = $this->getRequest();
    	$form->setData($request->getPost());
    	
    	$values = array(
    			'form' => $form,	
    	);
    	
    	return new ViewModel($values);
    }
}
