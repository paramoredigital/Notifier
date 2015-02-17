<?php
namespace Craft;

class Notifier_NotifyController extends BaseController
{
    protected $allowAnonymous = true;

    public function actionTest()
    {
        craft()->notifier->sendString('Foo and bar');
    }
}

/* End of Notifier_NotifyController.php */ 