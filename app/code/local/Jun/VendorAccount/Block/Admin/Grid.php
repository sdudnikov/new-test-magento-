<?php

class Jun_VendorAccount_Block_Admin_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _prepareCollection() {
        
        $collection = Mage::getModel('vendorm/vendor')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
        
    }
    
    protected function _prepareColumns() {
        
        $helper = Mage::helper('jun_vendoraccount');
        
        $this->addColumn('id', array(
            'header' => $helper->__('Id'),
            'index' => 'id'
        ));
        
        $this->addColumn('name', array(
            'header' => $helper->__('Name'),
            'index' => 'name',
            'type' => 'varchar'
        ));
        
        $this->addColumn('account', array(
            'header' => $helper->__('Account'),
            'index' => 'account',
            'type' => 'float'
        ));
        
        
        $this->addColumn('status', array(
            'header' => $helper->__('Status'),
            'index' => 'status',
            'type' => 'options',
            'options'   => array(
                    0 => 'Disable',
                    1 => 'Enable',
                ),
        ));
        
        return parent::_prepareColumns();
    }
    
    public function getRowUrl($model)
    {
        return $this->getUrl('*/*/edit', array('id' => $model->getId()));
    }
    
}

