<?php


namespace RestApiLogsClient\Common\Client;

use RestApiLogsClient\Common\Configuration\RestApiLogsConfiguration;
use RestApiLogsClient\Common\Log\Log;

/**
 * Class AbstractRestApiLogsClient
 * @package RestApiLogsClient\Common\Client
 */
abstract class AbstractRestApiLogsClient implements RestApiLogsClient
{
    private RestApiLogsConfiguration $restApiLogsConfiguration;

    /**
     * @return RestApiLogsConfiguration
     */
    public function getRestApiLogsConfiguration(): RestApiLogsConfiguration
    {
        return $this->restApiLogsConfiguration;
    }

    /**
     * @param RestApiLogsConfiguration $restApiLogsConfiguration
     */
    public function setRestApiLogsConfiguration(RestApiLogsConfiguration $restApiLogsConfiguration): void
    {
        $this->restApiLogsConfiguration = $restApiLogsConfiguration;
    }

    /**
     * @param Log $log
     * @return bool
     */
    public function log(Log $log): bool
    {
        // TODO: Implement log() method.
        return true;
    }
}
