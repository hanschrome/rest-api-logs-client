<?php


namespace RestApiLogsClient\Common\Log;

use DateTime;

/**
 * Interface GenericLog
 * @package RestApiLogsClient\Common\Log
 */
interface Log
{
    /**
     * @param DateTime $dateTime
     */
    public function setCreated(DateTime $dateTime): void;

    /**
     * @param string $application
     */
    public function setApplication(string $application): void;

    /**
     * @param int $level
     */
    public function setLevel(int $level): void;

    /**
     * @param string $environment
     */
    public function setEnvironment(string $environment): void;

    /**
     * @param string $scope
     */
    public function setScope(string $scope): void;

    /**
     * @param string $filename
     */
    public function setFilename(string $filename): void;

    /**
     * @param int $line
     */
    public function setLine(int $line): void;

    /**
     * @param $debugBackTrace
     */
    public function setDebugBackTrace($debugBackTrace): void;

    /**
     * @param $session
     */
    public function setSession($session): void;

    /**
     * @param $client
     */
    public function setClient($client): void;

    /**
     * @param $exception
     */
    public function setException($exception): void;

    /**
     * @param $vars
     */
    public function setVars($vars): void;

    /**
     * @param $eventTrace
     */
    public function setEventTrace($eventTrace): void;

    /**
     * @param $observations
     */
    public function setObservations($observations): void;

    /**
     * @return DateTime|null
     */
    public function getCreated(): ?DateTime;

    /**
     * @return string|null
     */
    public function getApplication(): ?string;

    /**
     * @return int|null
     */
    public function getLevel(): ?int;

    /**
     * @return string|null
     */
    public function getEnvironment(): ?string;

    /**
     * @return string|null
     */
    public function getScope(): ?string;

    /**
     * @return string|null
     */
    public function getFilename(): ?string;

    /**
     * @return int|null
     */
    public function getLine(): ?int;

    /**
     * @return mixed
     */
    public function getDebugBackTrace();

    /**
     * @return mixed
     */
    public function getSession();

    /**
     * @return mixed
     */
    public function getClient();

    /**
     * @return mixed
     */
    public function getException();

    /**
     * @return mixed
     */
    public function getVars();

    /**
     * @return mixed
     */
    public function getEventTrace();

    /**
     * @return mixed
     */
    public function getObservations();
}
