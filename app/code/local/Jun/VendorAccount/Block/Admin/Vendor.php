<?php

class Jun_VendorAccount_Block_Admin_Vendor extends Mage_Adminhtml_Block_Widget_Grid_Container
{
//     public function _toHtml()
//    {
////         $vendor = Mage::getModel('vendorm/vendor')->getCollection()->getData();
//         $vendor = Mage::getModel('vendorm/vendor')->load(1);
//        return '<h1>News Module: Admin section</h1><p>'.$vendor->getDescription(). '</p> ';
//    }
    public function _construct() {
        parent::_construct();
        
        $helper = Mage::helper('jun_vendoraccount');
        $this->_blockGroup = 'vendor_block';
        $this->_controller = 'admin';
        
        $this->_headerText = $helper->__('Entity Account');
         

    }
}


