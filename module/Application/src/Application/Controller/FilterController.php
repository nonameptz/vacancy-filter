<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FilterController extends AbstractActionController
{
    public function indexAction()
    {
        echo '1';
    }
    
    public function vacancyAction()
    {
        $objectManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');

        $lang = $this->getEvent()->getRouteMatch()->getParam('lang');
        $idVac = $this->getEvent()->getRouteMatch()->getParam('idVac');
        var_dump($lang);
        
        if($idVac)
        {
            //$vacancy = new \Application\Entity\Vacancy();
            $vacancy = $objectManager
                        ->getRepository('Application\Entity\Vacancy')
                        ->findOneBy(array('id' => $idVac, 'language' => $lang));
                        
            if($vacancy)
            {
                $vacancyData = $vacancy->getAll();
                $departmentData = $vacancy->getDepartmentId()->getDepartment();
                
            } 
            else
            {
                $vacancy = $objectManager
                    ->getRepository('Application\Entity\Vacancy')
                    ->findOneBy(array('parentId' => $idVac, 'language' => $lang));
                    
                if($vacancy)
                {
                    $vacancyData = $vacancy->getAll();
                    $departmentData = $vacancy->getDepartmentId()->getDepartment();
                }
                else
                {
                    $vacancy = $objectManager
                        ->getRepository('Application\Entity\Vacancy')
                        ->findOneBy(array('id' => $idVac, 'language' => 'en'));       
                    $vacancyData = $vacancy->getAll();
                    $departmentData = $vacancy->getDepartmentId()->getDepartment();             
                }
            }
    
            $viewObj = new ViewModel(array(
                'lang' => $lang,
                'idVac' => $idVac,
                'vacancy' => $vacancyData,
                'department' => $departmentData,
            ));
            
        } 
        else 
        {
            $vacancies = $objectManager
                ->getRepository('Application\Entity\Vacancy')
                ->findBy(array(
                            'language' => $lang, 
                            //'parentId' => '0'
                        ));
                
            $viewObj = new ViewModel(array(
                'vacancies' => $vacancies,
                'lang'      => $lang
            ));
        }
        return $viewObj;
        
    }
}
