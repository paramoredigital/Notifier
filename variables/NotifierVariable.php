<?php
namespace Craft;

class NotifierVariable
{
    public function notify($message = null)
    {
        if (is_null($message))
            $message = Craft::t('An error has occurred.');

        craft()->notifier->sendString($message);
    }
}

/* End of NotifierVariable.php */ 