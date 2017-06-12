<?php
namespace Se\Music\Model\ResourceModel\Music;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Se\Music\Model\Music',
            'Se\Music\Model\ResourceModel\Music'
        );
    }

}
