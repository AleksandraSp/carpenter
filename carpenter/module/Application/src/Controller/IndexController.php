<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function calculateAction(){
        $request = $this->getRequest();
        if ($request->isPost()) {
            $params = $request->getPost();
        }
        $view = new ViewModel([
            'frame' => $params['frame'],
            'door' => $params['door'],
            'w' => $params['width'],
            'h' => $params['height'],
            'd' => $params['depth'],
            'mat' => $params['material_width'],
            'shelves' => $params['shelves'],
        ]);
        return $view;
    }
}
