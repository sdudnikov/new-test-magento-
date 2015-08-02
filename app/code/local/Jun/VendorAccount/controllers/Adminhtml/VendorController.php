<?php

class Jun_VendorAccount_Adminhtml_VendorController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction(){ 
           
        $this->loadLayout();
        $this->_setActiveMenu('jun');
        $contentBlock = $this->getLayout()->createBlock('vendor_block/admin_vendor');
        $this->_addContent($contentBlock);
        $this->renderLayout();
                 
    }
    
} 
