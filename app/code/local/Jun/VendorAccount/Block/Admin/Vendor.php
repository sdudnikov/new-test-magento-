<?php

class Jun_VendorAccount_Block_Admin_Vendor extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function _construct() {
        parent::_construct();
        
        $helper = Mage::helper('jun_vendoraccount');
        $this->_blockGroup = 'vendor_block'; //  Jun/VendorAccount/Block
        $this->_controller = 'admin';   //   Jun/VendorAccount/Block/Admin
        
        $this->_headerText = $helper->__('Entity Account');
         

    }
}


