# VentureLeap\AuditLogService\AuditLogEntryApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuditLogEntryCollection**](AuditLogEntryApi.md#getauditlogentrycollection) | **GET** /audit_log_entries | Retrieves the collection of AuditLogEntry resources.
[**getAuditLogEntryItem**](AuditLogEntryApi.md#getauditlogentryitem) | **GET** /audit_log_entries/{id} | Retrieves a AuditLogEntry resource.
[**postAuditLogEntryCollection**](AuditLogEntryApi.md#postauditlogentrycollection) | **POST** /audit_log_entries | Creates a AuditLogEntry resource.

# **getAuditLogEntryCollection**
> \VentureLeap\AuditLogService\Model\InlineResponse200 getAuditLogEntryCollection($application_id, $page)

Retrieves the collection of AuditLogEntry resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\VentureLeap\AuditLogService\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuditLogEntryItem**
> \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogRead getAuditLogEntryItem($id)

Retrieves a AuditLogEntry resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogRead**](../Model/AuditLogEntryJsonldAuditLogRead.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuditLogEntryCollection**
> \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogRead postAuditLogEntryCollection($body)

Creates a AuditLogEntry resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\AuditLogService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogWrite**](../Model/AuditLogEntryJsonldAuditLogWrite.md)| The new AuditLogEntry resource | [optional]

### Return type

[**\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogRead**](../Model/AuditLogEntryJsonldAuditLogRead.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

