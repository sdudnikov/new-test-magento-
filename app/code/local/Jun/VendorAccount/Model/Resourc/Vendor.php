<?php

class Jun_VendorAccount_Model_Resourc_Vendor extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct() {
        
        $this->_init('vendorm/table_ven', 'id');
    }
} 
