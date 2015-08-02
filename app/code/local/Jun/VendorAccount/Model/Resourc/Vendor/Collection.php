<?php

class Jun_VendorAccount_Model_Resourc_Vendor_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
//        parent::_construct();  empty
        $this->_init('vendorm/vendor');
    }
}

