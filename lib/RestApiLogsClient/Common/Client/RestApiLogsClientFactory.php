<?php


namespace RestApiLogsClient\Common\Client;

/**
 * Class RestApiLogsClientFactory
 * @package RestApiLogsClient\Common\Client
 */
class RestApiLogsClientFactory
{
    public const DEFAULT_CONFIGURATION = 0;
    private static $configurations = [];

    /**
     * @param int $configurationIndex
     * @return RestApiLogsClient|null
     */
    public static function get($configurationIndex = self::DEFAULT_CONFIGURATION): ?RestApiLogsClient
    {
        return null;
    }

    /**
     * @return array
     */
    public static function getConfigurations(): array
    {
        return self::$configurations;
    }

    /**
     * @param array $configurations
     */
    public static function setConfigurations(array $configurations): void
    {
        self::$configurations = $configurations;
    }
}
