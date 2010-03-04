<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // writer
        $writer = new Zend_Log_Writer_Firebug();
        // log
        $log = new Zend_Log($writer);

        // messages
        $log->log($_REQUEST, Zend_Log::ERR);
        $log->log($_ENV, Zend_Log::ALERT);        
        $log->log($_SERVER, Zend_Log::ALERT);

    }


}

