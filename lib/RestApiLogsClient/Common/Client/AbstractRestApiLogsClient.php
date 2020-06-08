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
        /**
         * Init curl
         */
        $curl = curl_init();

        /**
         * Post request
         */
        curl_setopt($curl, CURLOPT_POST, 1);

        /**
         * JSON data generic log
         */
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

        /**
         * Build url
         */
        $httpPrefix = $this->getRestApiLogsConfiguration()->isSsl() ? 'https' : 'http';

        $url = $httpPrefix . '://' .
            $this->getRestApiLogsConfiguration()->getDomain() .
            $this->getRestApiLogsConfiguration()->getPath() .
            'generic';

        curl_setopt($curl, CURLOPT_URL, $url);

        /**
         * http headers
         */
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
        ));

        /**
         * Send & Evaluate output
         */
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $out = curl_exec($curl);

        if ($out) {
            $out = json_decode($out, 1)['status'] === 'OK';
        }

        curl_close($curl);

        /** Cast and return */
        return (bool) $out;
    }
}
