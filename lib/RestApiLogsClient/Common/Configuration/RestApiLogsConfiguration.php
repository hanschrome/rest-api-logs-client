<?php


namespace RestApiLogsClient\Common\Configuration;

/**
 * Interface RestApiLogsConfiguration
 * @package RestApiLogsClient\Common\Configuration
 */
interface RestApiLogsConfiguration
{
    /**
     * @return string
     */
    public function getDomain(): string;

    /**
     * @param string $domain
     */
    public function setDomain(string $domain): void;

    /**
     * @return string
     */
    public function getPath(): string;

    /**
     * @param string $path
     */
    public function setPath(string $path): void;

    /**
     * @return bool
     */
    public function isSsl(): bool;

    /**
     * @param bool $ssl
     */
    public function setSsl(bool $ssl): void;
}
