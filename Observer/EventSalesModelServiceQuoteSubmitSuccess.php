<?php
/**
 * Magenizr NewsletterSubscriptionAtCheckout
 *
 * @category    Magenizr
 * @package     Magenizr_NewsletterSubscriptionAtCheckout
 * @copyright   Copyright (c) 2018 Magenizr (http://www.magenizr.com)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace Magenizr\NewsletterSubscribeAtCheckout\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Newsletter\Model\Subscriber as Subscriber;
use Magenizr\NewsletterSubscribeAtCheckout\Helper\Data as Helper;

/**
 * Class EventSalesModelServiceQuoteSubmitSuccess
 * @package Magenizr\NewsletterSubscribeAtCheckout\Observer
 */
class EventSalesModelServiceQuoteSubmitSuccess implements ObserverInterface
{
    /**
     * @var Subscriber
     */
    private $subscriber;

    /**
     * @var Helper
     */
    private $helper;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * EventSalesModelServiceQuoteSubmitSuccess constructor.
     * @param Subscriber $subscriber
     * @param Helper $helper
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        Subscriber $subscriber,
        Helper $helper,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->subscriber = $subscriber;
        $this->helper = $helper;
        $this->logger = $logger;
    }

    /**
     * Subscribe to newsletters if customer checked the checkbox
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return boolean|$this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        // Check if feature is disabled
        if (!$this->helper->getConfig('enabled')) {
            return;
        }

        $quote = $observer->getQuote();

        // Get newsletter subscription flag from quote
        if ($quote->getNewsletterSubscribe()) {
            try {
                $email = $quote->getCustomerEmail();
                $this->subscriber->subscribe($email);
            } catch (\Exception $e) {
                $this->logger->error($e->getMessage());
            }
        }
        
        return $this;
    }
}
