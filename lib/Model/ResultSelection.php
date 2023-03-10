<?php
/**
 * ResultSelection
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SIW API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ResultSelection Class Doc Comment
 *
 * @category Class
 * @description Specifies ways to obtain the result.   - RESULT_SELECTION_UNDEFINED: Delivery Checkout failed to compute the selection reason for the delivery option use.  - USER_CHOICE: Delivery option selection was done by the end user.  - PRESELECTED_CHOICE: The preselected delivery option was used for selection. End user did not change delivery option from what was preselected.  - FALLBACK_FROM_USER_CHOICE: The user choice could not be respected when completing the session. Eg. due to carrier not covering the delivery address used for completing the session.  - FALLBACK_FROM_PRESELECTED_CHOICE: The preselected choice could not be respected when completing the session. Eg. due to carrier not covering the delivery address used for completing the session.  - FALLBACK_FAILED_FOR_USER_CHOICE: Selection was made based on user choice and fallback failing.  - FALLBACK_FAILED_FOR_PRESELECTED_CHOICE: Selection was made based on preselected choice and fallback failing.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResultSelection
{
    /**
     * Possible values of this enum
     */
    public const RESULT_SELECTION_UNDEFINED = 'RESULT_SELECTION_UNDEFINED';

    public const USER_CHOICE = 'USER_CHOICE';

    public const PRESELECTED_CHOICE = 'PRESELECTED_CHOICE';

    public const FALLBACK_FROM_USER_CHOICE = 'FALLBACK_FROM_USER_CHOICE';

    public const FALLBACK_FROM_PRESELECTED_CHOICE = 'FALLBACK_FROM_PRESELECTED_CHOICE';

    public const FALLBACK_FAILED_FOR_USER_CHOICE = 'FALLBACK_FAILED_FOR_USER_CHOICE';

    public const FALLBACK_FAILED_FOR_PRESELECTED_CHOICE = 'FALLBACK_FAILED_FOR_PRESELECTED_CHOICE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RESULT_SELECTION_UNDEFINED,
            self::USER_CHOICE,
            self::PRESELECTED_CHOICE,
            self::FALLBACK_FROM_USER_CHOICE,
            self::FALLBACK_FROM_PRESELECTED_CHOICE,
            self::FALLBACK_FAILED_FOR_USER_CHOICE,
            self::FALLBACK_FAILED_FOR_PRESELECTED_CHOICE
        ];
    }
}


