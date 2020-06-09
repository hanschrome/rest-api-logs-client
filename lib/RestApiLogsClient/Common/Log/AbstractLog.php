<?php


namespace RestApiLogsClient\Common\Log;


/**
 * Class AbstractLog
 * @package RestApiLogsClient\Common\Log
 */
abstract class AbstractLog implements Log
{
    /**
     * @var \DateTime
     */
    private \DateTime $created;
    /**
     * @var string
     */
    private string $application;
    /**
     * @var int
     */
    private int $level;
    /**
     * @var string
     */
    private string $environment;
    /**
     * @var string
     */
    private string $scope;
    /**
     * @var string
     */
    private string $filename;
    /**
     * @var int
     */
    private int $line;
    /**
     * @var mixed|null
     */
    private $debugBackTrace;
    /**
     * @var mixed|null
     */
    private $session;
    /**
     * @var mixed|null
     */
    private $client;
    /**
     * @var mixed
     */
    private $exception;
    /**
     * @var string
     */
    private string $error;
    /**
     * @var string
     */
    private string $message;
    /**
     * @var mixed|null
     */
    private $vars;
    /**
     * @var mixed|null
     */
    private $eventTrace;
    /**
     * @var mixed|null
     */
    private $observations;

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getApplication(): string
    {
        return $this->application;
    }

    /**
     * @param string $application
     */
    public function setApplication(string $application): void
    {
        $this->application = $application;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     */
    public function setEnvironment(string $environment): void
    {
        $this->environment = $environment;
    }

    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename(string $filename): void
    {
        $this->filename = $filename;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @param int $line
     */
    public function setLine(int $line): void
    {
        $this->line = $line;
    }

    /**
     * @return mixed
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param mixed $session
     */
    public function setSession($session): void
    {
        $this->session = $session;
    }

    /**
     * @return mixed
     */
    public function getDebugBackTrace()
    {
        return $this->debugBackTrace;
    }

    /**
     * @param mixed $debugBackTrace
     */
    public function setDebugBackTrace($debugBackTrace): void
    {
        $this->debugBackTrace = $debugBackTrace;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client): void
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @param $exception
     */
    public function setException($exception): void
    {
        $this->exception = $exception;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError(string $error): void
    {
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * @param mixed $vars
     */
    public function setVars($vars): void
    {
        $this->vars = $vars;
    }

    /**
     * @return mixed
     */
    public function getEventTrace()
    {
        return $this->eventTrace;
    }

    /**
     * @param mixed $eventTrace
     */
    public function setEventTrace($eventTrace): void
    {
        $this->eventTrace = $eventTrace;
    }

    /**
     * @return mixed
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * @param mixed $observations
     */
    public function setObservations($observations): void
    {
        $this->observations = $observations;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'application' => $this->getApplication(),
            'level' => $this->getLevel(),
            'environment' => $this->getEnvironment(),
            'scope' => $this->getScope(),
            'filename' => $this->getFilename(),
            'line' => $this->getLine(),
            'debugBackTrace' => $this->getDebugBackTrace(),
            'session' => $this->getSession(),
            'client' => $this->getClient(),
            'exception' => $this->getException(),
            'error' => $this->getError(),
            'message' => $this->getMessage(),
            'vars' => $this->getVars(),
            'eventTrace' => $this->getEventTrace(),
            'observations' => $this->getObservations()
        ];
    }
}
