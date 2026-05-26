<?php

namespace vwo;

use wingify\Constants\Constants;

class VWOBuilder extends \wingify\WingifyBuilder implements IVWOBuilder
{
    public function __construct($options = [])
    {
        if (!isset($options['hostProfile'])) {
            $options['hostProfile'] = Constants::HOST_PROFILE_VWO;
        }
        parent::__construct($options);
    }

    protected function instantiateClient()
    {
        return new VWOClient($this->settings, $this->options, $this->serviceContainer);
    }
}
