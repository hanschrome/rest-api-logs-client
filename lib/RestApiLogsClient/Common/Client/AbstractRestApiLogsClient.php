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
        /**
         * Validate configuration
         */
        if (is_null($this->restApiLogsConfiguration)) {
            /**
             * @todo implement exception
             */
            throw new \Exception("");
        }

        /**
         * Serialize log
         */
        $data = $log->toArray();

        /**
         * Http Request
         */
        return $this->logByHttp($data);
    }

    /**
     * @param array $data
     * @return bool
     */
    private function logByHttp(array $data): bool {
        return true;
    }
}
