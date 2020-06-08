<?php


namespace RestApiLogsClient\Common\Client;

use RestApiLogsClient\Common\Configuration\RestApiLogsConfiguration;
use RestApiLogsClient\Common\Log\Log;

/**
 * Interface RestApiLogsClient
 * @package RestApiLogsClient\Common\Client
 */
interface RestApiLogsClient
{
    /**
     * @param Log $log
     * @return bool
     */
    public function log(Log $log): bool;

    /**
     * @param RestApiLogsConfiguration $restApiLogsConfiguration
     */
    public function setRestApiLogsConfiguration(RestApiLogsConfiguration $restApiLogsConfiguration): void;

    /**
     * @return RestApiLogsConfiguration
     */
    public function getRestApiLogsConfiguration(): RestApiLogsConfiguration;
}
