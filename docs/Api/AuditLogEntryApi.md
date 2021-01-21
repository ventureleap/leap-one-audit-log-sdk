# VentureLeap\AuditLogService\AuditLogEntryApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuditLogEntryCollection**](AuditLogEntryApi.md#getauditlogentrycollection) | **GET** /audit-log/audit_log_entries | Retrieves the collection of AuditLogEntry resources.
[**getAuditLogEntryItem**](AuditLogEntryApi.md#getauditlogentryitem) | **GET** /audit-log/audit_log_entries/{id} | Retrieves a AuditLogEntry resource.
[**postAuditLogEntryCollection**](AuditLogEntryApi.md#postauditlogentrycollection) | **POST** /audit-log/audit_log_entries | Creates a AuditLogEntry resource.

# **getAuditLogEntryCollection**
> \VentureLeap\AuditLogService\Model\InlineResponse200 getAuditLogEntryCollection($entity_uuid, $user_uuid, $entity_type, $order_uuid, $order_user_uuid, $order_entity_uuid, $order_entity_type, $order_url, $order_body, $order_entry_type, $order_application_id, $order_created_at, $order_updated_at, $page)

Retrieves the collection of AuditLogEntry resources.

### Example
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
$entity_uuid = "entity_uuid_example"; // string | 
$user_uuid = "user_uuid_example"; // string | 
$entity_type = "entity_type_example"; // string | 
$order_uuid = "order_uuid_example"; // string | 
$order_user_uuid = "order_user_uuid_example"; // string | 
$order_entity_uuid = "order_entity_uuid_example"; // string | 
$order_entity_type = "order_entity_type_example"; // string | 
$order_url = "order_url_example"; // string | 
$order_body = "order_body_example"; // string | 
$order_entry_type = "order_entry_type_example"; // string | 
$order_application_id = "order_application_id_example"; // string | 
$order_created_at = "order_created_at_example"; // string | 
$order_updated_at = "order_updated_at_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getAuditLogEntryCollection($entity_uuid, $user_uuid, $entity_type, $order_uuid, $order_user_uuid, $order_entity_uuid, $order_entity_type, $order_url, $order_body, $order_entry_type, $order_application_id, $order_created_at, $order_updated_at, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogEntryApi->getAuditLogEntryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_uuid** | **string**|  | [optional]
 **user_uuid** | **string**|  | [optional]
 **entity_type** | **string**|  | [optional]
 **order_uuid** | **string**|  | [optional]
 **order_user_uuid** | **string**|  | [optional]
 **order_entity_uuid** | **string**|  | [optional]
 **order_entity_type** | **string**|  | [optional]
 **order_url** | **string**|  | [optional]
 **order_body** | **string**|  | [optional]
 **order_entry_type** | **string**|  | [optional]
 **order_application_id** | **string**|  | [optional]
 **order_created_at** | **string**|  | [optional]
 **order_updated_at** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\VentureLeap\AuditLogService\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuditLogEntryItem**
> \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead getAuditLogEntryItem($id)

Retrieves a AuditLogEntry resource.

### Example
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

[**\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead**](../Model/AuditLogEntryJsonldAuditLogEntryRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuditLogEntryCollection**
> \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead postAuditLogEntryCollection($body)

Creates a AuditLogEntry resource.

### Example
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
$body = new \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryWrite(); // \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryWrite | The new AuditLogEntry resource

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
 **body** | [**\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryWrite**](../Model/AuditLogEntryJsonldAuditLogEntryWrite.md)| The new AuditLogEntry resource | [optional]

### Return type

[**\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead**](../Model/AuditLogEntryJsonldAuditLogEntryRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

