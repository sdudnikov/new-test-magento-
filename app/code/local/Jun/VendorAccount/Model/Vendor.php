<?php

class Jun_VendorAccount_Model_Vendor extends Mage_Core_Model_Abstract
{
    protected function _construct() {
        parent::_construct();
        $this->_init('vendorm/vendor');
    }
}
