<?php

namespace Application\FrontendBundle\Listener;

use Symfony\Bundle\FrameworkBundle\EventDispatcher;

class Locale
{
    private $session;
    
    public function __construct()
    {
        
    }
    
    /**
     * Registers a core.request listener.
     *
     * @param EventDispatcher $dispatcher An EventDispatcher instance
     * @param integer         $priority   The priority
     */
    public function register(EventDispatcher $dispatcher, $priority = 0)
    {
        $dispatcher->connect('core.request', array($this, 'setUserLocale'), $priority);
    }
    
    public function setUserLocale($event)
    {   
        $request = $event->get('request'); 
        if($request->attributes->has('locale')) {
            $session = $request->getSession();
            
            //Debug statms to be removed.
            //echo "Old locale: ".$session->get('_locale');
            //echo "Setting my locale to: ".$request->attributes->get('locale');   
            
            $session->set('_locale', $request->attributes->get('locale'));
        }        
    }
}
