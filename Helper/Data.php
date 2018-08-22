<?php
/**
 * Magenizr NewsletterSubscriptionAtCheckout
 *
 * @category    Magenizr
 * @package     Magenizr_NewsletterSubscriptionAtCheckout
 * @copyright   Copyright (c) 2018 Magenizr (http://www.magenizr.com)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace Magenizr\NewsletterSubscribeAtCheckout\Helper;

/**
 * Class Data
 * @package Magenizr\NewsletterSubscribeAtCheckout\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var string
     */
    private $tab = 'checkout';

    /**
     * Get module configuration values from core_config_data
     *
     * @param $setting
     * @return mixed
     */
    public function getConfig($setting)
    {
        return $this->scopeConfig->getValue(
            $this->tab . '/magenizr_newslettersubscribeatcheckout/' . $setting,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
