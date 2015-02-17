<?php
namespace Craft;

use CodebaseNotifier\Notifier\NotifierFactory;
use CodebaseNotifier\UseCases\SendErrorString;

class NotifierService extends BaseApplicationComponent
{
    static protected $settings;

    public function __construct($settings = null)
    {
        self::$settings = (is_null($settings))
            ? craft()->plugins->getPlugin('Notifier')->getSettings()
            : $settings;
    }

    public function sendString($errorMessage)
    {
        $notifier = NotifierFactory::getNotifier('airbrake', array(
            'apiEndPoint' => self::$settings->airbrakeApiEndpoint,
            'apiKey' => self::$settings->airbrakeApiKey
        ));
        $usecase = new SendErrorString($notifier);

        $usecase->execute($errorMessage);
    }
}

/* End of NotifierService.php */ 