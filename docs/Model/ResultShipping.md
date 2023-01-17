# # ResultShipping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addons** | [**\OpenAPI\Client\Model\CarrierAddon[]**](CarrierAddon.md) | Shipping products addons that are enabled by default. Can be configured in the Merchant Admin tool. | [optional]
**carrier** | **string** | Name of the shipping company. | [optional]
**delivery_addons** | [**\OpenAPI\Client\Model\ResultDeliveryAddon[]**](ResultDeliveryAddon.md) | Selected delivery addons. | [optional]
**delivery_time** | [**\OpenAPI\Client\Model\TimeSlot**](TimeSlot.md) |  | [optional]
**delivery_type** | **string** | Type of delivery (pickup, instore, mailbox, delivery). | [optional]
**external_method_id** | **string** | External method identifier, can be used for merchant-specific shipping methods mappings, eg override. | [optional]
**location** | [**\OpenAPI\Client\Model\PickupLocation**](PickupLocation.md) |  | [optional]
**meta** | **array<string,string>** | Carrier specific metadata related to the shipping option, for example addons. | [optional]
**product** | **string** | Name of the shipping product. | [optional]
**route** | [**\OpenAPI\Client\Model\Route**](Route.md) |  | [optional]
**shipping_method** | **string** | Ingrid&#39;s ID of the shipping product. Example &#x60;bst-std&#x60; for BEST Delivery. | [optional]
**supports** | [**\OpenAPI\Client\Model\Supports**](Supports.md) |  | [optional]
**warehouse** | [**\OpenAPI\Client\Model\ResultWarehouse**](ResultWarehouse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
