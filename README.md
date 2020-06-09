# REST API Logs Client

This API Client has been created to register logs on a database externally - https://github.com/hanschrome/rest-api-logs

# Installation

* composer require hanschrome/rest-api-logs-client

# Usage

```php

use RestApiLogsClient\Common\Client\RestApiLogsClient;
use RestApiLogsClient\Common\Client\RestApiLogsClientFactory;
use RestApiLogsClient\Common\Log\GenericLog;
use RestApiLogsClient\Common\Configuration\GenericRestApiLogsConfiguration;

/* Add configurations to Factory*/

$restApiLogsConfiguration = new GenericRestApiLogsConfiguration();

RestApiLogsClientFactory::addConfiguration($restApiLogsConfiguration);

/* Recover the belonged RestApiLogsClient */

/** @var RestApiLogsClient $restApiLogsClient */
$restApiLogsClient = RestApiLogsClientFactory::get();

$genericLog = new GenericLog();

/* Send log */

$restApiLogsClient->log($genericLog);

```
