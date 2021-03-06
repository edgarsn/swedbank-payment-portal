<?php

namespace SwedbankPaymentPortal\CC\HPSCommunicationEntity\HPSQueryResponse;

use JMS\Serializer\Annotation;

/**
 * The container for the XML response.
 *
 * @Annotation\AccessType("public_method")
 */
class HpsTxn
{
    /**
     * The gateway URL to which the customer is to be redirected.
     *
     * @var AuthAttempt[]
     *
     * @Annotation\Type("array<SwedbankPaymentPortal\CC\HPSCommunicationEntity\HPSQueryResponse\AuthAttempt>")
     * @Annotation\SerializedName("AuthAttempts")
     * @Annotation\XmlList(entry = "Attempt")
     */
    private $authAttempts;

    /**
     * A 16 digit unique identifier for the transaction.
     * This reference will be used when submitting QUERY transactions to the Payment Gateway.
     *
     * @var string
     *
     * @Annotation\SerializedName("datacash_reference")
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $dataCashReference;

    /**
     * HpsTxn constructor.
     *
     * @param AuthAttempt[] $authAttempts
     * @param string        $dataCashReference
     */
    public function __construct(array $authAttempts, $dataCashReference)
    {
        $this->authAttempts = $authAttempts;
        $this->dataCashReference = $dataCashReference;
    }

    /**
     * AuthAttempts getter.
     *
     * @return AuthAttempt[]
     */
    public function getAuthAttempts()
    {
        return $this->authAttempts;
    }

    /**
     * AuthAttempts setter.
     *
     * @param AuthAttempt[] $authAttempts
     */
    public function setAuthAttempts($authAttempts)
    {
        $this->authAttempts = $authAttempts;
    }

    /**
     * DataCashReference getter.
     *
     * @return string
     */
    public function getDataCashReference()
    {
        return $this->dataCashReference;
    }

    /**
     * DataCashReference setter.
     *
     * @param string $dataCashReference
     */
    public function setDataCashReference($dataCashReference)
    {
        $this->dataCashReference = $dataCashReference;
    }
}
