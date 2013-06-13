<?php

namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Department {
     /** 
     * @ORM\Id 
     * @ORM\GeneratedValue(strategy="IDENTITY") 
     * @ORM\Column(type="integer") 
     */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $title;


    // getters/setters etc.
    
    /** 
    * Getter of department title
    *
    * @return  title - title of department
    */       
    public function getDepartment()
    {
        return $this->title;
    }    

    /** 
    * Getter of vacancy id
    *
    * @return  id - id of department
    */           
    public function getId()
    {
        return $this->id;
    }   
    
    /** 
    * Setter of title department
    *
    * @param  title - title of department
    */
    public function setDepartment($title)
    {
        $this->title = $title;
    }   
}


?>