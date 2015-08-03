<?php

class Jun_VendorAccount_Block_Admin_Formvendor_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    // Блок-контайнер для формы 
    
    protected function _construct()
    {
        $this->_blockGroup = 'vendor_block';
        $this->_controller = 'admin_formvendor';
    }

    public function getHeaderText()
    {
        $helper = Mage::helper('jun_vendoraccount');
        $model = Mage::registry('current_vendor');

        if ($model->getId()) {
            return $helper->__("Edit Vendor");
        } else {
            return $helper->__("Add Vendor");
        }
    }
}

