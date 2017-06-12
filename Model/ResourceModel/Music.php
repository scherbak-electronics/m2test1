<?php
namespace Se\Music\Model\ResourceModel;

class Music  extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('se_music', 'entity_id');
    }
}
