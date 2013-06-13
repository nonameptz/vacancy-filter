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
    
    /*public function setCity($city)
    {
        $this->city = $city;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }*/
    
    public function getDepartment()
    {
        return $this->title;
    }    
}


?>