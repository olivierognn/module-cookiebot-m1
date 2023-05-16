<?php

declare(strict_types=1);

class CustomGento_Cookiebot_Model_ScriptGenerator
{
    const COOKIEBOT_SCRIPT_FORMAT = '<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="%s"  type="text/javascript"></script>';

    public function generate(): string
    {
        $cookiebotId = Mage::getModel('customgento_cookiebot/config')->getCookiebotId();

        return sprintf(self::COOKIEBOT_SCRIPT_FORMAT, $cookiebotId);
    }
}
