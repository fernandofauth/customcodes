<?php

class FernandoFauth_CustomCodes_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
    	$this->loadLayout();
		return $this->renderLayout();
    }	
}