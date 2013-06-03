<?php

class Application_Model_Filter
{
    function Application_Model_Filter()
    {
        $this->db  =  Zend_Db_Table::getDefaultAdapter();
    }

    public function selectAll() {
        $stmt = $this->db->query(
            'SELECT vacancy.*, department.title FROM vacancy, department WHERE vacancy.idDepartment=department.id'
        );
        
        return $stmt->fetchAll();
    }
    
    public function selectDep() {
        $stmt = $this->db->query(
            'SELECT * FROM department WHERE 1'
        );
        
        return $stmt->fetchAll();
    }
    
    public function filter($id=false, $vacancy=false, $lang=false) {
        if($id) $id = "AND vacancy.idDepartment=".$id; else $id ="";
        if($vacancy) $vacancy = "AND vacancy.vacancy LIKE '%".$vacancy."%'"; else $vacancy ="";
        if($lang) $lang = "AND vacancy.lang='".$lang."'"; else $lang ="";
        
        $stmt = $this->db->query(
            "SELECT vacancy.*, department.title FROM vacancy, department WHERE vacancy.idDepartment=department.id {$id} {$vacancy} {$lang}"
        );
        
        return $stmt->fetchAll();
    }
}

