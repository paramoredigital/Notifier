<?php
namespace Craft;

class NotifierPlugin extends BasePlugin
{
    function init()
    {
        require CRAFT_PLUGINS_PATH .'/notifier/vendor/autoload.php';
        parent::init();
    }

    function getName()
    {
        return Craft::t('Notifier');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Paramore | The digital agency';
    }

    function getDeveloperUrl()
    {
        return 'http://paramoredigital.com';
    }

    protected function defineSettings()
    {
        return array(
            'defaultNotifier'     => array(AttributeType::String),
            'airbrakeApiEndpoint' => array(AttributeType::String),
            'airbrakeApiKey'      => array(AttributeType::String)
        );
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('notifier/settings', array('settings' => $this->getSettings()));
    }
}

/* End of NotifierPlugin.php */ 