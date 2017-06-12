<?php

namespace Se\Music\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject;

class Music extends AbstractModel
{
    /**
     * Initialize model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Se\Music\Model\ResourceModel\Music');
    }
}
