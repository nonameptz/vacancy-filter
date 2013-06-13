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

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $objectManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');
    
        $user = new \Application\Entity\User();
        $user->setFullName('Marco Pivetta');
        $objectManager->persist($user);
        
        $address = new \Application\Entity\Address();
        $address->setCity('Frankfurt');
        $address->setCountry('Germany');
        $objectManager->persist($address);
        
        $user->setAddress($address);
        $objectManager->flush();
        
        $user = $objectManager->find('Application\Entity\User', 3);
        //var_dump($user->getAddress()->getCity()); // Frankfurt
        
    }
    
    public function filterAction()
    {
        echo '1';
    }
}
