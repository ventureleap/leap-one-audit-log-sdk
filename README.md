# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\AuditLogService\Api\AuditLogEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = "application_id_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getAuditLogEntryCollection($application_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogEntryApi->getAuditLogEntryCollection: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\AuditLogService\Api\AuditLogEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getAuditLogEntryItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogEntryApi->getAuditLogEntryItem: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\AuditLogService\Api\AuditLogEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogWrite(); // \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogWrite | The new AuditLogEntry resource

try {
    $result = $apiInstance->postAuditLogEntryCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogEntryApi->postAuditLogEntryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuditLogEntryApi* | [**getAuditLogEntryCollection**](docs/Api/AuditLogEntryApi.md#getauditlogentrycollection) | **GET** /audit-log/audit_log_entries | Retrieves the collection of AuditLogEntry resources.
*AuditLogEntryApi* | [**getAuditLogEntryItem**](docs/Api/AuditLogEntryApi.md#getauditlogentryitem) | **GET** /audit-log/audit_log_entries/{id} | Retrieves a AuditLogEntry resource.
*AuditLogEntryApi* | [**postAuditLogEntryCollection**](docs/Api/AuditLogEntryApi.md#postauditlogentrycollection) | **POST** /audit-log/audit_log_entries | Creates a AuditLogEntry resource.
*ConfigurationEntryApi* | [**deleteConfigurationEntryItem**](docs/Api/ConfigurationEntryApi.md#deleteconfigurationentryitem) | **DELETE** /audit-log/configuration_entries/{id} | Removes the ConfigurationEntry resource.
*ConfigurationEntryApi* | [**getConfigurationEntryCollection**](docs/Api/ConfigurationEntryApi.md#getconfigurationentrycollection) | **GET** /audit-log/configuration_entries | Retrieves the collection of ConfigurationEntry resources.
*ConfigurationEntryApi* | [**getConfigurationEntryItem**](docs/Api/ConfigurationEntryApi.md#getconfigurationentryitem) | **GET** /audit-log/configuration_entries/{id} | Retrieves a ConfigurationEntry resource.
*ConfigurationEntryApi* | [**postConfigurationEntryCollection**](docs/Api/ConfigurationEntryApi.md#postconfigurationentrycollection) | **POST** /audit-log/configuration_entries | Creates a ConfigurationEntry resource.
*ConfigurationEntryApi* | [**putConfigurationEntryItem**](docs/Api/ConfigurationEntryApi.md#putconfigurationentryitem) | **PUT** /audit-log/configuration_entries/{id} | Replaces the ConfigurationEntry resource.

## Documentation For Models

 - [AuditLogEntryJsonldAuditLogRead](docs/Model/AuditLogEntryJsonldAuditLogRead.md)
 - [AuditLogEntryJsonldAuditLogWrite](docs/Model/AuditLogEntryJsonldAuditLogWrite.md)
 - [ConfigurationEntryJsonldConfigurationRead](docs/Model/ConfigurationEntryJsonldConfigurationRead.md)
 - [ConfigurationEntryJsonldConfigurationWrite](docs/Model/ConfigurationEntryJsonldConfigurationWrite.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse200Hydrasearch](docs/Model/InlineResponse200Hydrasearch.md)
 - [InlineResponse200HydrasearchHydramapping](docs/Model/InlineResponse200HydrasearchHydramapping.md)
 - [InlineResponse200Hydraview](docs/Model/InlineResponse200Hydraview.md)

## Documentation For Authorization


## apiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



