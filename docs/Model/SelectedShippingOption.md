# # SelectedShippingOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier** | **string** |  | [optional]
**category_tags** | [**\OpenAPI\Client\Model\Tag[]**](Tag.md) |  | [optional]
**currency** | **string** |  | [optional]
**delivery_type** | **string** |  | [optional]
**external_method_id** | **string** | External method identifier that can be used for custom shipping methods mappings, eg overriding a shipping product id from Ingrid by merchant&#39;s own. This mapping needs to be setup in the Merchant Admin tool. | [optional]
**location** | [**\OpenAPI\Client\Model\PickupLocation**](PickupLocation.md) |  | [optional]
**meta** | **array<string,string>** |  | [optional]
**price** | **int** |  | [optional]
**product** | **string** |  | [optional]
**routes** | [**\OpenAPI\Client\Model\Route[]**](Route.md) | Routes represent a list of delivery steps. This is used for so called chained deliveries where there are more than two deliveries involved to deliver a package to the customer. For example from central warehouse to the service point and then from a service point to customer&#39;s house. For a non-chained delivery this will contain only one step. | [optional]
**shipping_category** | **string** | Shipping category under which the selected shipping options are grouped. Shipping categories are setup and configured in the merchant admin tool. | [optional]
**shipping_method** | **string** |  | [optional]
**time_slot** | [**\OpenAPI\Client\Model\TimeSlot**](TimeSlot.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
