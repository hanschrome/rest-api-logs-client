<?php


namespace RestApiLogsClient\Common\Log;


/**
 * Class AbstractLog
 * @package RestApiLogsClient\Common\Log
 */
abstract class AbstractLog implements Log
{

    /**
     * @param \DateTime $dateTime
     */
    public function setCreated(\DateTime $dateTime): void
    {
        // TODO: Implement setCreated() method.
    }

    /**
     * @param string $application
     */
    public function setApplication(string $application): void
    {
        // TODO: Implement setApplication() method.
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        // TODO: Implement setLevel() method.
    }

    /**
     * @param string $environment
     */
    public function setEnvironment(string $environment): void
    {
        // TODO: Implement setEnvironment() method.
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope): void
    {
        // TODO: Implement setScope() method.
    }

    /**
     * @param string $filename
     */
    public function setFilename(string $filename): void
    {
        // TODO: Implement setFilename() method.
    }

    /**
     * @param int $line
     */
    public function setLine(int $line): void
    {
        // TODO: Implement setLine() method.
    }

    /**
     * @param $debugBackTrace
     */
    public function setDebugBackTrace($debugBackTrace): void
    {
        // TODO: Implement setDebugBackTrace() method.
    }

    /**
     * @param $session
     */
    public function setSession($session): void
    {
        // TODO: Implement setSession() method.
    }

    /**
     * @param $client
     */
    public function setClient($client): void
    {
        // TODO: Implement setClient() method.
    }

    /**
     * @param $exception
     */
    public function setException($exception): void
    {
        // TODO: Implement setException() method.
    }

    /**
     * @param $vars
     */
    public function setVars($vars): void
    {
        // TODO: Implement setVars() method.
    }

    /**
     * @param $eventTrace
     */
    public function setEventTrace($eventTrace): void
    {
        // TODO: Implement setEventTrace() method.
    }

    /**
     * @param $observations
     */
    public function setObservations($observations): void
    {
        // TODO: Implement setObservations() method.
    }

    /**
     * @return \DateTime|null
     */
    public function getCreated(): ?\DateTime
    {
        // TODO: Implement getCreated() method.
        return null;
    }

    /**
     * @return string|null
     */
    public function getApplication(): ?string
    {
        // TODO: Implement getApplication() method.
        return null;
    }

    /**
     * @return int|null
     */
    public function getLevel(): ?int
    {
        // TODO: Implement getLevel() method.
        return null;
    }

    /**
     * @return string|null
     */
    public function getEnvironment(): ?string
    {
        // TODO: Implement getEnvironment() method.
        return null;
    }

    /**
     * @return string|null
     */
    public function getScope(): ?string
    {
        // TODO: Implement getScope() method.
        return null;
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        // TODO: Implement getFilename() method.
        return null;
    }

    /**
     * @return int|null
     */
    public function getLine(): ?int
    {
        // TODO: Implement getLine() method.
        return null;
    }

    /**
     * @return mixed
     */
    public function getDebugBackTrace()
    {
        // TODO: Implement getDebugBackTrace() method.
        return null;
    }

    /**
     * @return mixed
     */
    public function getSession()
    {
        // TODO: Implement getSession() method.
        return null;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        // TODO: Implement getClient() method.
        return null;
    }

    /**
     * @return mixed
     */
    public function getException()
    {
        // TODO: Implement getException() method.
        return null;
    }

    /**
     * @return mixed
     */
    public function getVars()
    {
        // TODO: Implement getVars() method.
        return null;
    }

    /**
     * @return mixed
     */
    public function getEventTrace()
    {
        // TODO: Implement getEventTrace() method.
        return null;
    }

    /**
     * @return mixed
     */
    public function getObservations()
    {
        // TODO: Implement getObservations() method.
        return null;
    }
}
