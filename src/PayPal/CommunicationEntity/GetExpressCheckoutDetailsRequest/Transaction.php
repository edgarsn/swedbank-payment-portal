<?php

namespace SwedbankPaymentPortal\PayPal\CommunicationEntity\GetExpressCheckoutDetailsRequest;

use SwedbankPaymentPortal\PayPal\CommunicationEntity\GetExpressCheckoutDetailsRequest\Transaction\PayPalTxn;
use Jms\Serializer\Annotation;
use SwedbankPaymentPortal\PayPal\CommunicationEntity\GetExpressCheckoutDetailsRequest\Transaction\TxnDetails;

/**
 * The container for the transaction.
 *
 * @Annotation\AccessType("public_method")
 */
class Transaction
{
    /**
     * The container for the Pay Pal details.
     *
     * @var PayPalTxn
     *
     * @Annotation\SerializedName("PayPalTxn")
     * @Annotation\Type("SwedbankPaymentPortal\PayPal\CommunicationEntity\GetExpressCheckoutDetailsRequest\Transaction\PayPalTxn")
     */
    private $payPalTxn;

    /**
     * The container transaction details.
     *
     * @var TxnDetails
     *
     * @Annotation\SerializedName("TxnDetails")
     * @Annotation\Type("SwedbankPaymentPortal\PayPal\CommunicationEntity\GetExpressCheckoutDetailsRequest\Transaction\TxnDetails")
     */
    private $txnDetails;

    /**
     * Transaction constructor.
     *
     * @param TxnDetails $txnDetails
     * @param PayPalTxn  $payPalTxn
     */
    public function __construct(TxnDetails $txnDetails, PayPalTxn $payPalTxn)
    {
        $this->txnDetails = $txnDetails;
        $this->payPalTxn = $payPalTxn;
    }

    /**
     * TxnDetails getter.
     *
     * @return TxnDetails
     */
    public function getTxnDetails()
    {
        return $this->txnDetails;
    }

    /**
     * TxnDetails setter.
     *
     * @param TxnDetails $txnDetails
     */
    public function setTxnDetails(TxnDetails $txnDetails)
    {
        $this->txnDetails = $txnDetails;
    }

    /**
     * PayPalTxn getter.
     *
     * @return PayPalTxn
     */
    public function getPayPalTxn()
    {
        return $this->payPalTxn;
    }

    /**
     * PayPalTxn setter.
     *
     * @param PayPalTxn $payPalTxn
     */
    public function setPayPalTxn(PayPalTxn $payPalTxn)
    {
        $this->payPalTxn = $payPalTxn;
    }
}
