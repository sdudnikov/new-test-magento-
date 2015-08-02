<?php

class Jun_VendorAccount_Adminhtml_VendorController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction(){ 
        
        $vendor = Mage::getModel('vendorm/vendor')->getCollection();

        print_r($vendor);
        die('110');
        
        $resource = Mage::getSingleton('core/resource');
        $readConnection = $resource->getConnection('core_read');
        $query = 'SELECT * FROM ' . $resource->getTableName('vendorm/table_ven');
        $results = $readConnection->fetchAll($query);
        print_r($results);
        
        
        die('11');
//        die("ID = ".$vendor->getId());
        
        
    }
    
} 
