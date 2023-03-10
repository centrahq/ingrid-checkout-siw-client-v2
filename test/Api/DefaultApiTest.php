<?php
/**
 * DefaultApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * DefaultApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DefaultApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for siwCompleteSession
     *
     * When the customer completes the purchase you also need to complete the session. At this point you will have to supply us with the address and the contact details of the user..
     *
     */
    public function testSiwCompleteSession()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for siwCreateSession
     *
     * To add the Ingrid widget to the checkout page you will need to create a new session. This can be done by this call. When doing this you will need to provide some required information..
     *
     */
    public function testSiwCreateSession()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for siwCreateSessionFromOrder
     *
     * Creates a session from an already existing order..
     *
     */
    public function testSiwCreateSessionFromOrder()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for siwGetSession
     *
     * Fetches a session by ID. Can be used for loading a previously created session that have been stored together with a customer's shopping cart from a previous visit..
     *
     */
    public function testSiwGetSession()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for siwListSessionsSummaries
     *
     * Allows the user to get shipping data (session IDs and result fields) associated with tos ID..
     *
     */
    public function testSiwListSessionsSummaries()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for siwUpdateSession
     *
     * Update the session with new information. Useful for cases where the customer or cart information is changed. The later being the most common case..
     *
     */
    public function testSiwUpdateSession()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
