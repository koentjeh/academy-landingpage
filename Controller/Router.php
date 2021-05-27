<?php declare(strict_types=1);

namespace Academy\LandingPage\Controller;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;

class Router implements RouterInterface
{

    public function match(RequestInterface $request)
    {
        die($request->getPathInfo());
    }
}
