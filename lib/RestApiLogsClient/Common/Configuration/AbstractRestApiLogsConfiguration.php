<?php


namespace RestApiLogsClient\Common\Configuration;

/**
 * Class AbstractRestApiLogsConfiguration
 * @package RestApiLogsClient\Common\Configuration
 */
abstract class AbstractRestApiLogsConfiguration implements RestApiLogsConfiguration
{
    /**
     * @var string
     */
    private string $domain;
    /**
     * @var string
     */
    private string $path = '/';
    /**
     * @var bool
     */
    private bool $ssl = true;

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     */
    public function setDomain(string $domain): void
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return bool
     */
    public function isSsl(): bool
    {
        return $this->ssl;
    }

    /**
     * @param bool $ssl
     */
    public function setSsl(bool $ssl): void
    {
        $this->ssl = $ssl;
    }


}
