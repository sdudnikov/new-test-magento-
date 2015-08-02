<?php

class Jun_VendorAccount_Block_Admin_Vendor extends Mage_Adminhtml_Block_Abstract
{
     public function _toHtml()
    {
//         $vendor = Mage::getModel('vendorm/vendor')->getCollection()->getData();
         $vendor = Mage::getModel('vendorm/vendor')->load(1);
        return '<h1>News Module: Admin section</h1><p>'.$vendor->getDescription(). '</p> ';
    }
}


