<?php

namespace SwedbankPaymentPortal\Logger;

use SwedbankPaymentPortal\SharedEntity\Type\TransportType;

/**
 * Class NullLogger.
 */
class NullLogger implements LoggerInterface
{
    /**
     * {@inheritdoc}
     */
    public function logData($requestXml, $responseXml, $requestObject, $responseObject, TransportType $type)
    {
        // Nothing to do here, null logger.
    }
}
