<?php
namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class ResponseListener
{
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();
        if (preg_match('/^\/api\/products/', $event->getRequest()->getRequestUri())) {
            $response->setCache([
          'max_age' => 3600,
          's_maxage' => 3600,
          'public' => true,
          'private' => false,
        ]);
        }
        $event->setResponse($response);
    }
}
