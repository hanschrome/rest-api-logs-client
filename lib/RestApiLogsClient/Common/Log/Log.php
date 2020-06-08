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
     * Information that is diagnostically helpful to people more than just developers (IT, sysadmins, etc.).
     */
    const DEBUG_LEVEL = 0;
    /**
     * Anything that can potentially cause application oddities, but for which I am automatically recovering.
     * (Such as switching from a primary to backup server, retrying an operation, missing secondary data, etc.)
     */
    const WARN_LEVEL = 1;
    /**
     * Any error which is fatal to the operation, but not the service or application
     * (can't open a required file, missing data, etc.).
     */
    const ERROR_LEVEL = 2;
    /**
     * Any error which is fatal to the operation, but not the service or application
     * (can't open a required file, missing data, etc.).
     * These errors will force user (administrator, or direct user) intervention.
     */
    const FATAL_LEVEL = 3;
    /**
     * Any error that is forcing a shutdown of the service or application to prevent data loss (or further data loss).
     */
    const CRITICAL_LEVEL = 4;
    /**
     * Information that is diagnostically helpful to just developers
     */
    const TRACE_LEVEL = 5;

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

    /**
     * @return array
     */
    public function toArray(): array;
}
