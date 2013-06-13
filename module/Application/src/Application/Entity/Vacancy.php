<?php

namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Collections\ArrayCollection; 
use Zend\ModuleManager\Feature\ServiceProviderInterface;
    /** @ORM\Entity */
    class Vacancy  {
        /**
        * @ORM\Id
        * @ORM\GeneratedValue(strategy="AUTO")
        * @ORM\Column(type="integer")
        */
        protected $id;
    
        /** @ORM\Column(type="integer") */
        protected $parentId;
    
        /** @ORM\ManyToOne(targetEntity="Department") */
        protected $departmentId;
        
        /** @ORM\Column(type="string") */
        protected $title;

        /** @ORM\Column(type="string") */
        protected $description;

        /** @ORM\Column(type="string") */
        protected $language;
        
    
        public function __construct()
        {
            $this->departmentId = new ArrayCollection();
        }
        

        // getters/setters

        public function getAll()
        {
            return array(
                'id'            => $this->id,
                'parentId'      => $this->parentId,
                'departmentId'  => $this->departmentId,
                'title'         => $this->title,
                'description'   => $this->description,
                'language'      => $this->language,
            );
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
        
        public function getDepartmentId()
        {
            return $this->departmentId;
        }
        
        public function findAllByLang($lang)
        {
            return $this->getEntityManager()
                ->createQuery('SELECT * FROM vacancy WHERE language = "' . $lang . '"')
                ->getResult();
        }
        
    }


?>