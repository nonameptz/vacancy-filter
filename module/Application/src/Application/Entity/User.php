<?php

namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection; 
    /** @ORM\Entity */
    class User {
        /**
        * @ORM\Id
        * @ORM\GeneratedValue(strategy="AUTO")
        * @ORM\Column(type="integer")
        */
        protected $id;
    
        /** @ORM\Column(type="string") */
        protected $fullName;
    
        /** @ORM\ManyToOne(targetEntity="Address") */
        protected $address;
    
        public function __construct()
        {
            $this->address = new ArrayCollection();
        }
        

        // getters/setters
        public function setFullName($fullName)
        {
            $this->fullName = $fullName;
        }

        public function setAddress($address)
        {
            $this->address = $address;
        }


        
        public function getId() 
        {
            return $this->id;
        }

        public function getFullName()
        {
            return $this->fullName;
        }
        
        public function getAddress()
        {
            return $this->address;
        }
    }


?>