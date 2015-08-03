<?php

class Jun_VendorAccount_Model_Vendor extends Mage_Core_Model_Abstract
{
    protected function _construct() {
//        parent::_construct();  empty
        $this->_init('vendorm/vendor');
    }
    
    public function getCode() {
            $var = parent::getCode();
            return strtolower($var);
    }
    
    public function setCode($var) {
            parent::setCode(strtolower($var));
    }
    
}
