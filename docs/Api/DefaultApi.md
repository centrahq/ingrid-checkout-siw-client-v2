# OpenAPI\Client\DefaultApi

All URIs are relative to /v1/siw, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**siwCompleteSession()**](DefaultApi.md#siwCompleteSession) | **POST** /session.complete | When the customer completes the purchase you also need to complete the session. At this point you will have to supply us with the address and the contact details of the user. |
| [**siwCreateSession()**](DefaultApi.md#siwCreateSession) | **POST** /session.create | To add the Ingrid widget to the checkout page you will need to create a new session. This can be done by this call. When doing this you will need to provide some required information. |
| [**siwCreateSessionFromOrder()**](DefaultApi.md#siwCreateSessionFromOrder) | **POST** /session.createFromOrder | Creates a session from an already existing order. |
| [**siwGetSession()**](DefaultApi.md#siwGetSession) | **GET** /session.get | Fetches a session by ID. Can be used for loading a previously created session that have been stored together with a customer&#39;s shopping cart from a previous visit. |
| [**siwListSessionsSummaries()**](DefaultApi.md#siwListSessionsSummaries) | **GET** /sessions_summaries.list | Allows the user to get shipping data (session IDs and result fields) associated with tos ID. |
| [**siwUpdateSession()**](DefaultApi.md#siwUpdateSession) | **POST** /session.update | Update the session with new information. Useful for cases where the customer or cart information is changed. The later being the most common case. |


## `siwCompleteSession()`

```php
siwCompleteSession($body): \OpenAPI\Client\Model\CompleteSessionResponse
```

When the customer completes the purchase you also need to complete the session. At this point you will have to supply us with the address and the contact details of the user.

This request will also result in completing order in TOS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CompleteSessionRequest(); // \OpenAPI\Client\Model\CompleteSessionRequest

try {
    $result = $apiInstance->siwCompleteSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->siwCompleteSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CompleteSessionRequest**](../Model/CompleteSessionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CompleteSessionResponse**](../Model/CompleteSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `siwCreateSession()`

```php
siwCreateSession($body): \OpenAPI\Client\Model\CreateSessionResponse
```

To add the Ingrid widget to the checkout page you will need to create a new session. This can be done by this call. When doing this you will need to provide some required information.

The API will return a representation of the newly created session. The response will contain a session id which you can use to update and retrieve the session data.  The response will also contain a snippet of HTML with all the necessary code for bootstraping the Ingrid widget. Simple render the HTML snippet on your checkout page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CreateSessionRequest(); // \OpenAPI\Client\Model\CreateSessionRequest

try {
    $result = $apiInstance->siwCreateSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->siwCreateSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CreateSessionRequest**](../Model/CreateSessionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateSessionResponse**](../Model/CreateSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `siwCreateSessionFromOrder()`

```php
siwCreateSessionFromOrder($body): \OpenAPI\Client\Model\CreateSessionFromOrderResponse
```

Creates a session from an already existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CreateSessionFromOrderRequest(); // \OpenAPI\Client\Model\CreateSessionFromOrderRequest

try {
    $result = $apiInstance->siwCreateSessionFromOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->siwCreateSessionFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CreateSessionFromOrderRequest**](../Model/CreateSessionFromOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateSessionFromOrderResponse**](../Model/CreateSessionFromOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `siwGetSession()`

```php
siwGetSession($id): \OpenAPI\Client\Model\GetSessionResponse
```

Fetches a session by ID. Can be used for loading a previously created session that have been stored together with a customer's shopping cart from a previous visit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Session ID [required].

try {
    $result = $apiInstance->siwGetSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->siwGetSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Session ID [required]. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetSessionResponse**](../Model/GetSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `siwListSessionsSummaries()`

```php
siwListSessionsSummaries($tos_id): \OpenAPI\Client\Model\ListSessionsSummariesResponse
```

Allows the user to get shipping data (session IDs and result fields) associated with tos ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tos_id = 'tos_id_example'; // string

try {
    $result = $apiInstance->siwListSessionsSummaries($tos_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->siwListSessionsSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tos_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListSessionsSummariesResponse**](../Model/ListSessionsSummariesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `siwUpdateSession()`

```php
siwUpdateSession($body): \OpenAPI\Client\Model\UpdateSessionResponse
```

Update the session with new information. Useful for cases where the customer or cart information is changed. The later being the most common case.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\UpdateSessionRequest(); // \OpenAPI\Client\Model\UpdateSessionRequest

try {
    $result = $apiInstance->siwUpdateSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->siwUpdateSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateSessionRequest**](../Model/UpdateSessionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateSessionResponse**](../Model/UpdateSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
