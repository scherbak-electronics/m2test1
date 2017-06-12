<?php
namespace Se\Music\Block;
use \Se\Music\Model\ResourceModel\Music\Collection;

class View extends \Magento\Framework\View\Element\Template
{
    protected $_musicCollection;

    protected $_musicColFactory;

    /**
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param \Se\Music\Model\ResourceModel\Music\CollectionFactory $collectionFactory
     * @param array $data
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Se\Music\Model\ResourceModel\Music\CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->_musicColFactory = $collectionFactory;
        parent::__construct(
            $context,
            $data
        );
    }

    public function getMusicCollection()
    {
        if (null === $this->_musicCollection) {
            $this->_musicCollection = $this->_musicColFactory->create();
        }
        return $this->_musicCollection;
    }

}
