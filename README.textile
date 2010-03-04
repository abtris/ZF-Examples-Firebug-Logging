# Zend Framework Examples

## Firebug logging

In indexController set:

@$writer = new Zend_Log_Writer_Firebug();@

@$log = new Zend_Log($writer);@

@// messages@
@$log->log($_REQUEST, Zend_Log::ERR);@
@$log->log($_ENV, Zend_Log::ALERT);@
@$log->log($_SERVER, Zend_Log::ALERT);@
