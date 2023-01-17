# Ingrid Delivery Checkout v2 [OpenAPIClient-php]

Delivery Checkout provides almost unlimited flexibility in selecting delivery options while securing that the process is as convenient and as fast as it physically can. ⚡

### [Documentation](https://developer.ingrid.com/delivery_checkout/)

## Generate API Client

```
$ openapi-generator generate \
      -i https://api.ingrid.com/v1/siw/_/swagger.json \
      -g php \
      -o siw
``` 

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
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
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to */v1/siw*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**siwCompleteSession**](docs/Api/DefaultApi.md#siwcompletesession) | **POST** /session.complete | When the customer completes the purchase you also need to complete the session. At this point you will have to supply us with the address and the contact details of the user.
*DefaultApi* | [**siwCreateSession**](docs/Api/DefaultApi.md#siwcreatesession) | **POST** /session.create | To add the Ingrid widget to the checkout page you will need to create a new session. This can be done by this call. When doing this you will need to provide some required information.
*DefaultApi* | [**siwCreateSessionFromOrder**](docs/Api/DefaultApi.md#siwcreatesessionfromorder) | **POST** /session.createFromOrder | Creates a session from an already existing order.
*DefaultApi* | [**siwGetSession**](docs/Api/DefaultApi.md#siwgetsession) | **GET** /session.get | Fetches a session by ID. Can be used for loading a previously created session that have been stored together with a customer&#39;s shopping cart from a previous visit.
*DefaultApi* | [**siwListSessionsSummaries**](docs/Api/DefaultApi.md#siwlistsessionssummaries) | **GET** /sessions_summaries.list | Allows the user to get shipping data (session IDs and result fields) associated with tos ID.
*DefaultApi* | [**siwUpdateSession**](docs/Api/DefaultApi.md#siwupdatesession) | **POST** /session.update | Update the session with new information. Useful for cases where the customer or cart information is changed. The later being the most common case.

## Models

- [AdditionalInfo](docs/Model/AdditionalInfo.md)
- [Address](docs/Model/Address.md)
- [Any](docs/Model/Any.md)
- [BillingItem](docs/Model/BillingItem.md)
- [CarrierAddon](docs/Model/CarrierAddon.md)
- [Cart](docs/Model/Cart.md)
- [CartItem](docs/Model/CartItem.md)
- [CompleteSessionRequest](docs/Model/CompleteSessionRequest.md)
- [CompleteSessionResponse](docs/Model/CompleteSessionResponse.md)
- [Coordinates](docs/Model/Coordinates.md)
- [Cost](docs/Model/Cost.md)
- [CreateSessionFromOrderRequest](docs/Model/CreateSessionFromOrderRequest.md)
- [CreateSessionFromOrderResponse](docs/Model/CreateSessionFromOrderResponse.md)
- [CreateSessionRequest](docs/Model/CreateSessionRequest.md)
- [CreateSessionResponse](docs/Model/CreateSessionResponse.md)
- [CustomerInfo](docs/Model/CustomerInfo.md)
- [DateTimeRange](docs/Model/DateTimeRange.md)
- [Dimensions](docs/Model/Dimensions.md)
- [Distance](docs/Model/Distance.md)
- [DistanceSpec](docs/Model/DistanceSpec.md)
- [Error](docs/Model/Error.md)
- [GetSessionResponse](docs/Model/GetSessionResponse.md)
- [LegLocation](docs/Model/LegLocation.md)
- [ListSessionsSummariesResponse](docs/Model/ListSessionsSummariesResponse.md)
- [OperationalHours](docs/Model/OperationalHours.md)
- [PickupLocation](docs/Model/PickupLocation.md)
- [PickupLocationType](docs/Model/PickupLocationType.md)
- [PriceComponent](docs/Model/PriceComponent.md)
- [PriceComponentType](docs/Model/PriceComponentType.md)
- [Result](docs/Model/Result.md)
- [ResultCategory](docs/Model/ResultCategory.md)
- [ResultDeliveryAddon](docs/Model/ResultDeliveryAddon.md)
- [ResultDeliveryTime](docs/Model/ResultDeliveryTime.md)
- [ResultDeliveryTimeRange](docs/Model/ResultDeliveryTimeRange.md)
- [ResultPricing](docs/Model/ResultPricing.md)
- [ResultSelection](docs/Model/ResultSelection.md)
- [ResultShipping](docs/Model/ResultShipping.md)
- [ResultWarehouse](docs/Model/ResultWarehouse.md)
- [Route](docs/Model/Route.md)
- [Section](docs/Model/Section.md)
- [SectionColumnItem](docs/Model/SectionColumnItem.md)
- [SectionItem](docs/Model/SectionItem.md)
- [SelectedShippingOption](docs/Model/SelectedShippingOption.md)
- [Session](docs/Model/Session.md)
- [SessionSummary](docs/Model/SessionSummary.md)
- [ShippingCost](docs/Model/ShippingCost.md)
- [ShippingDate](docs/Model/ShippingDate.md)
- [ShippingDateTag](docs/Model/ShippingDateTag.md)
- [ShippingLeg](docs/Model/ShippingLeg.md)
- [SnippetConfiguration](docs/Model/SnippetConfiguration.md)
- [Supports](docs/Model/Supports.md)
- [Tag](docs/Model/Tag.md)
- [TimeSlot](docs/Model/TimeSlot.md)
- [UpdateSessionRequest](docs/Model/UpdateSessionRequest.md)
- [UpdateSessionResponse](docs/Model/UpdateSessionResponse.md)

## Authorization

### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
