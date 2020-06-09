<?php


namespace RestApiLogsClient\Common\Client;

use RestApiLogsClient\Common\Configuration\RestApiLogsConfiguration;
use RestApiLogsClient\Common\Exception\MissingConfigurationRestApiLogsException;

/**
 * Class RestApiLogsClientFactory
 * @package RestApiLogsClient\Common\Client
 */
class RestApiLogsClientFactory
{
    public const DEFAULT_CONFIGURATION = 0;
    /**
     * @var RestApiLogsConfiguration[]
     */
    private static array $configurations = [];

    /**
     * Generate RestApiLogsClient with a configuration
     *
     * @param int $configurationIndex
     * @param RestApiLogsClient $restApiLogsClient
     * @return RestApiLogsClient|null
     * @throws \Exception
     */
    public static function get(int $configurationIndex = self::DEFAULT_CONFIGURATION, RestApiLogsClient $restApiLogsClient = null): ?RestApiLogsClient
    {
        /**
         * Validate configuration index exists
         */
        if(!array_key_exists($configurationIndex, self::$configurations)) {
            throw new MissingConfigurationRestApiLogsException("The configuration with id (" . $configurationIndex . ") does not exist");
        }

        /**
         * Use SimpleRestApiLogsClient as default RestApiLogsClient implementation
         */
        if(is_null($restApiLogsClient)) {
            $restApiLogsClient = new SimpleRestApiLogsClient();
        }

        /**
         * Set configuration to RestApiLogsClient instance
         */
        $restApiLogsClient->setRestApiLogsConfiguration(self::$configurations[$configurationIndex]);

        /**
         * Return configured RestApiLogsClient
         */
        return $restApiLogsClient;
    }

    /**
     * @return array
     */
    public static function getConfigurations(): array
    {
        return self::$configurations;
    }

    /**
     * @param RestApiLogsConfiguration $restApiLogsConfiguration
     */
    public static function addConfiguration(RestApiLogsConfiguration $restApiLogsConfiguration): void
    {
        self::$configurations[] = $restApiLogsConfiguration;
    }
}
