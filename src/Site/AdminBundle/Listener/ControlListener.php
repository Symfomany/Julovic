<?php

namespace Site\AdminBundle\Listener;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\Util\Debug;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
class ControlListener {
    
    /**
     * 
     * @param FilterControllerEvent $event 
     */
       public function onCoreController(FilterControllerEvent $event) {
        if(HttpKernelInterface::MASTER_REQUEST == $event->getRequestType()) {
            $_controller = $event->getController();
            if(isset($_controller[0])) {
                $controller = $_controller[0];
                if(method_exists($controller, 'preExecute')) {
                    $controller->preExecute();
                }
            }
        }
    }

}

?>
