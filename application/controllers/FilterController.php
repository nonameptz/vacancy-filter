<?php

class FilterController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $this->dbFilter = new Application_Model_Filter();

    }

    public function indexAction()
    {
        // action body
        //var_dump($this->config->db->type);
        $rows = $this->dbFilter->selectAll();
        $deprows = $this->dbFilter->selectDep();
        $this->view->assign(array('rows' => $rows, 'deprows' => $deprows));
    }

    public function newAction()
    {
        //$this->headScript()->appendFile('/js/scriptaculous.js');
        $this->view->assign('msg', 'This is short msg');
    }
    
    public function ajaxfilterAction() {
        $this->_helper->layout->setLayout('empty');
        $id = (int)$_POST['department'];
        $vacancy = $_POST['vacancy']?addslashes($_POST['vacancy']):false;
        $lang = $_POST['lang']?addslashes($_POST['lang']):false;
        
        if($id || $vacancy || $lang) {
            $rows = $this->dbFilter->filter($id,$vacancy, $lang);
            $this->view->assign(array('rows' => $rows, 'filter' => $vacancy));
        }
    }

}

