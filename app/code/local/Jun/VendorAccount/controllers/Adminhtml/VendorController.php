<?php

class Jun_VendorAccount_Adminhtml_VendorController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction(){ 
           
        $this->loadLayout();
        $this->_setActiveMenu('jun');
        $contentBlock = $this->getLayout()->createBlock('vendor_block/admin_vendor');
        $this->_addContent($contentBlock);
        $this->renderLayout();     
    }
    
    public function newAction()
    {
        $this->_forward('edit');
    }
    
    public function editAction()
    {
        $id = (int) $this->getRequest()->getParam('id');
        Mage::register('current_vendor', Mage::getModel('vendorm/vendor')->load($id));

        $this->loadLayout()->_setActiveMenu('jun');
        
        //  Jun/VendorAccount/Block/Admin/Formvendor/Edit.php  instance block
        $this->_addContent($this->getLayout()->createBlock('vendor_block/admin_formvendor_edit')); 
        $this->renderLayout();
    }
    
    public function deleteAction()
    {
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            try {
                Mage::getModel('vendorm/vendor')->setId($id)->delete();
            } catch (Exception $e) {
                Mage::logException($e);
                $this->_redirect('*/*/edit', array('id' => $id));
            }
        }
        $this->_redirect('*/*/');
    } 
    
    public function saveAction()
    {
        $data = $this->getRequest()->getPost();
        $data['code'] = strtolower($data['code']);


        try {
            $model = Mage::getModel('vendorm/vendor');
            $model->setData($data)->setId($this->getRequest()->getParam('id'));
            $model->save();
            $this->_redirect('*/*/');
        } catch (Exception $e) {
            Mage::logException($e);
            $this->_redirect('*/*/edit', array(
                'id' => $this->getRequest()->getParam('id')
            ));
        }
    }      
    
} 
