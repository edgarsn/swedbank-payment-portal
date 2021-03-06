<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\AuthorizationRequest\Transaction;

use Jms\Serializer\Annotation;

/**
 * The container for the transaction.
 *
 * @Annotation\AccessType("public_method")
 */
class OrderDetails
{
    /**
     * The container transaction details.
     *
     * @var BillingDetails
     *
     * @Annotation\SerializedName("BillingDetails")
     * @Annotation\Type("SwedbankPaymentPortal\CC\HCCCommunicationEntity\AuthorizationRequest\Transaction\BillingDetails")
     */
    private $billingDetails;

    /**
     * OrderDetails constructor.
     *
     * @param BillingDetails $billingDetails
     */
    public function __construct(BillingDetails $billingDetails)
    {
        $this->billingDetails = $billingDetails;
    }

    /**
     * BillingDetails getter.
     *
     * @return BillingDetails
     */
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }

    /**
     * BillingDetails setter.
     *
     * @param BillingDetails $billingDetails
     */
    public function setBillingDetails($billingDetails)
    {
        $this->billingDetails = $billingDetails;
    }
}
