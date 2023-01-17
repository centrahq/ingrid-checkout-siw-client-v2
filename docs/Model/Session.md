# # Session

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_information** | [**\OpenAPI\Client\Model\AdditionalInfo**](AdditionalInfo.md) |  | [optional]
**cart** | [**\OpenAPI\Client\Model\Cart**](Cart.md) |  | [optional]
**customer** | [**\OpenAPI\Client\Model\CustomerInfo**](CustomerInfo.md) |  | [optional]
**customer_info** | [**\OpenAPI\Client\Model\CustomerInfo**](CustomerInfo.md) |  | [optional]
**experiment_id** | **string** | Identifier of an A/B testing experiment, which is related to the session. If the session is not related to any A/B testing experiment, this field is empty. | [optional]
**expires_at** | **string** | Time at which some of the shipping options will be invalid. This is influenced by the cutoff times at the warehouse among other things. Session should be refreshed if this value is in the past. | [optional]
**external_id** | **string** | Can be used to store a unique identifier from the merchant. For example external order ID or external shipment ID. | [optional]
**id** | **string** | UUIDv4 identifier of the session. Generated when session is created. Used for updating, fetching and completing the session. | [optional]
**result** | [**\OpenAPI\Client\Model\Result**](Result.md) |  | [optional]
**search_address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]
**selected_shipping_option** | [**\OpenAPI\Client\Model\SelectedShippingOption**](SelectedShippingOption.md) |  | [optional]
**shipping_cost** | [**\OpenAPI\Client\Model\ShippingCost**](ShippingCost.md) |  | [optional]
**shipping_price** | **int** | Price of currently selected (or pre-selected) shipping option. | [optional]
**status** | **string** |  | [optional]
**tos_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
