<?php

namespace vwo;

use wingify\Constants\Constants;

class VWO extends \wingify\Wingify
{
    protected static function createDefaultBuilder($options)
    {
        if (!isset($options['hostProfile'])) {
            $options['hostProfile'] = Constants::HOST_PROFILE_VWO;
        }
        return new VWOBuilder($options);
    }

    public static function init($options = [])
    {
        if (!isset($options['hostProfile'])) {
            $options['hostProfile'] = Constants::HOST_PROFILE_VWO;
        }
        return parent::init($options);
    }

    public static function getUUID($userId, $accountId)
    {
        self::applyStaticLogPrefix(['hostProfile' => Constants::HOST_PROFILE_VWO]);
        return parent::getUUID($userId, $accountId);
    }
}
