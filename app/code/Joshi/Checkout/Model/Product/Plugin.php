<?php
    
namespace Joshi\Checkout\Model\Product;

use Magento\Catalog\Model\Product;

class Plugin
{

    public function beforeGetName(Product $subject)
    {
        // perform some logging.
    }

}