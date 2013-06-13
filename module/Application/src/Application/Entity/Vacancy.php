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
        
    
        public function __construct()
        {
            $this->departmentId = new ArrayCollection();
            
        }
        
        // getters/setters

        /** 
        * Setter of parentId
        *
        * @param  parentId - id of vacancy parent
        */
        public function setParentId($parentId)
        {
            $this->parentId = $parentId;
        }

        /** 
        * Setter of title
        *
        * @param  title - title of vacancy
        */
        public function setTitle($title)
        {
            $this->title = $title;
        }

        /** 
        * Setter of description
        *
        * @param  description - description of vacancy
        */
        public function setDescription($description)
        {
            $this->description = $description;
        }

        /** 
        * Setter of language
        *
        * @param  language - language of vacancy
        */
        public function setLanguage($language)
        {
            $this->language = $language;
        }

        /** 
        * Setter of department id
        *
        * @param  departmentId - department id of vacancy
        */
        public function setDepartmentId($departmentId)
        {
            $this->departmentId = $departmentId;
        }
        
        /** 
        * Function returns associate array of data
        *
        * @return array
        */
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
        
        /** 
        * Getter of vacancy id
        *
        * @return  id - id of vacancy
        */        
        public function getId() 
        {
            return $this->id;
        }
        
        /** 
        * Getter of vacancy parent id
        *
        * @return  parentId - parent id of vacancy
        */   
        public function getParentId()
        {
            return $this->parentId;
        }
        
        /** 
        * Getter of vacancy title
        *
        * @return  title - title of vacancy
        */   
        public function getTitle()
        {
            return $this->title;
        }
        
        /** 
        * Getter of vacancy Description
        *
        * @return  description - description of vacancy
        */   
        public function getDescription()
        {
            return $this->description;
        }
        
        /** 
        * Getter of vacancy language
        *
        * @return  language - language of vacancy
        */   
        public function getLanguage()
        {
            return $this->language;
        }
        
        /** 
        * Getter of vacancy departmentId
        *
        * @return  department id of vacancy
        */   
        public function getDepartmentId()
        {
            return $this->departmentId;
        }
        
    }


?>