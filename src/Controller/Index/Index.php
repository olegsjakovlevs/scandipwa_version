<?php

namespace ScandiPWA\Version\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        // Use BP as Magento root dir variable
        $pwa_version = (exec("cd ".BP." && composer info scandipwa/source | grep 'versions' | cut -d '*' -f2"));
        echo ($pwa_version);
    }
}