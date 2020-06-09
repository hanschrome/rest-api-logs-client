# REST API Logs Client

This API Client has been created to register logs on a database externally - https://github.com/hanschrome/rest-api-logs

# Installation

* composer require hanschrome/rest-api-logs-client

# Usage

```php

<?php

require_once 'vendor/autoload.php';


use RestApiLogsClient\Common\Client\RestApiLogsClient;
use RestApiLogsClient\Common\Client\RestApiLogsClientFactory;
use RestApiLogsClient\Common\Configuration\GenericRestApiLogsConfiguration;
use RestApiLogsClient\Common\Log\GenericLog;

/* Add configurations to Factory*/

$restApiLogsConfiguration = new GenericRestApiLogsConfiguration();

$restApiLogsConfiguration->setSsl(true);
$restApiLogsConfiguration->setDomain('example.com');
$restApiLogsConfiguration->setPath('/');

RestApiLogsClientFactory::addConfiguration($restApiLogsConfiguration);

/* Recover the belonged RestApiLogsClient */

/** @var RestApiLogsClient $restApiLogsClient */
$restApiLogsClient = RestApiLogsClientFactory::get();

$genericLog = new GenericLog();

$genericLog->setApplication('TESTING_INDEX_APP');
$genericLog->setLevel(GenericLog::DEBUG_LEVEL);
$genericLog->setEnvironment('dev');
$genericLog->setScope('TEST_INDEX_PHP');
$genericLog->setFilename(__FILE__);
$genericLog->setLine(0); // __LINE__ or $exception
$genericLog->setDebugBackTrace(debug_backtrace()); // or $exception get trace
$genericLog->setSession('PHPSESSION=1238E89RJ2398R2938RJ2389RJ');
$genericLog->setClient(['Content-Type: application/json']); // user-agent...
$genericLog->setException('Exception');
$genericLog->setError('TESTING');
$genericLog->setMessage('This is a testing log');
$genericLog->setVars(['key' => 'value']);
$genericLog->setEventTrace([
    'required packages',
    'Configured client',
    'Instanciate generic log'
]);
$genericLog->setObservations('It is a test');

/* Send log */

$restApiLogsClient->log($genericLog);

```
