<?php

class Jun_VendorAccount_Block_Admin_Formvendor_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm() {
        $helper = Mage::helper('jun_vendoraccount');
        $model = Mage::registry('current_vendor');
        
        $form = new Varien_Data_Form(array(
               'id' => 'edit_form',
               'action' => $this->getUrl('*/*/save', array(
                    'id' => $this->getRequest()->getParam('id')
                )),
                'method' => 'post',
                'enctype' => 'multipart/form-data'
        ));

        $this->setForm($form);
        
        $fieldset = $form->addFieldset('news_form', array('legend' => $helper->__('Vendor Information')));
        
        
        $fieldset->addField('name', 'text', array(
            'label' => $helper->__('Name'),
            'required' => true,
            'name' => 'name',
        ));
        
        $fieldset->addField('code', 'text', array(
            'label' => $helper->__('Code'),
            'required' => true,
            'name' => 'code',
        ));
        
        $fieldset->addField('account', 'text', array(
            'label' => $helper->__('Account'),
            'required' => true,
            'name' => 'account',
        ));   
        
        $fieldset->addField('status', 'select', array(
            'label' => $helper->__('Status'),
            'required' => true,
            'name' => 'status',
            'values' => array('0'=>'Disable','1' => 'Enable')
        ));
        
        $fieldset->addField('description', 'textarea', array(
            'label' => $helper->__('Description'),
            'required' => true,
            'name' => 'description',
        ));       
        
        $form->setUseContainer(true);        
        $form->setValues($model->getData());
        return parent::_prepareForm();
    }
}

