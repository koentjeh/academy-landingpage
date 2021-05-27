<?php declare(strict_types=1);

namespace Academy\LandingPage\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;


class Index implements HttpGetActionInterface
{
    private $page;

    /**
     * Index constructor.
     * @param PageFactory $page
     */
    public function __construct(
        PageFactory $page
    ) {
        $this->page = $page;
    }

    public function execute()
    {
        $page = $this->page->create();

        return $page;
    }
}
