<?php
class Mudit_Swiftview_IndexController extends Mage_Core_Controller_Front_Action
{
    public function viewAction()
    {
	$this->loadLayout();     
        $this->renderLayout();
 //    echo 'Hello... world!';
    }
}
?>
