<?php

namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Collections\ArrayCollection; 
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\Db\Adapter\Adapter;

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
        
        static $adapter;
    
        public function __construct()
        {
            $this->departmentId = new ArrayCollection();
            
            $this->adapter = new Zend\Db\Adapter\Adapter(array(
                'driver' => 'Pdo_Mysql',
                'database' => 'vacancies',
                'username' => 'root',
                'password' => 'houston19t'
             ));
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

        public function getParentId()
        {
            return $this->parentId;
        }

        public function getTitle()
        {
            return $this->title;
        }
        
        public function getDescription()
        {
            return $this->description;
        }
        
        public function getLanguage()
        {
            return $this->language;
        }
        
        public function getDepartmentId()
        {
            return $this->departmentId;
        }
        
    }


?>