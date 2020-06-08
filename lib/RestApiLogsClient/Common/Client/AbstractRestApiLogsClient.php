<?php


namespace RestApiLogsClient\Common\Client;

use RestApiLogsClient\Common\Log\Log;

/**
 * Class AbstractRestApiLogsClient
 * @package RestApiLogsClient\Common\Client
 */
abstract class AbstractRestApiLogsClient implements RestApiLogsClient
{
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
