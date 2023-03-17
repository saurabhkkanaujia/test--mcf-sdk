<?php
/**
 * FeaturedOfferExpectedPriceResult
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ced
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products.  For more information, see the [Product Pricing v2022-05-01 Use Case Guide](doc:product-pricing-api-v2022-05-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-05-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ced\Model;

use \ArrayAccess;
use \Ced\ObjectSerializer;

/**
 * FeaturedOfferExpectedPriceResult Class Doc Comment
 *
 * @category Class
 * @description The featured offer expected price result data for the requested offer.
 * @package  Ced
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FeaturedOfferExpectedPriceResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeaturedOfferExpectedPriceResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'featured_offer_expected_price' => '\Ced\Model\FeaturedOfferExpectedPrice',
        'result_status' => 'string',
        'competing_featured_offer' => '\Ced\Model\FeaturedOffer',
        'current_featured_offer' => '\Ced\Model\FeaturedOffer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'featured_offer_expected_price' => null,
        'result_status' => null,
        'competing_featured_offer' => null,
        'current_featured_offer' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'featured_offer_expected_price' => false,
		'result_status' => false,
		'competing_featured_offer' => false,
		'current_featured_offer' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'featured_offer_expected_price' => 'featuredOfferExpectedPrice',
        'result_status' => 'resultStatus',
        'competing_featured_offer' => 'competingFeaturedOffer',
        'current_featured_offer' => 'currentFeaturedOffer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'featured_offer_expected_price' => 'setFeaturedOfferExpectedPrice',
        'result_status' => 'setResultStatus',
        'competing_featured_offer' => 'setCompetingFeaturedOffer',
        'current_featured_offer' => 'setCurrentFeaturedOffer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'featured_offer_expected_price' => 'getFeaturedOfferExpectedPrice',
        'result_status' => 'getResultStatus',
        'competing_featured_offer' => 'getCompetingFeaturedOffer',
        'current_featured_offer' => 'getCurrentFeaturedOffer'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('featured_offer_expected_price', $data ?? [], null);
        $this->setIfExists('result_status', $data ?? [], null);
        $this->setIfExists('competing_featured_offer', $data ?? [], null);
        $this->setIfExists('current_featured_offer', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['result_status'] === null) {
            $invalidProperties[] = "'result_status' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets featured_offer_expected_price
     *
     * @return \Ced\Model\FeaturedOfferExpectedPrice|null
     */
    public function getFeaturedOfferExpectedPrice()
    {
        return $this->container['featured_offer_expected_price'];
    }

    /**
     * Sets featured_offer_expected_price
     *
     * @param \Ced\Model\FeaturedOfferExpectedPrice|null $featured_offer_expected_price featured_offer_expected_price
     *
     * @return self
     */
    public function setFeaturedOfferExpectedPrice($featured_offer_expected_price)
    {
        if (is_null($featured_offer_expected_price)) {
            throw new \InvalidArgumentException('non-nullable featured_offer_expected_price cannot be null');
        }
        $this->container['featured_offer_expected_price'] = $featured_offer_expected_price;

        return $this;
    }

    /**
     * Gets result_status
     *
     * @return string
     */
    public function getResultStatus()
    {
        return $this->container['result_status'];
    }

    /**
     * Sets result_status
     *
     * @param string $result_status The status of the featured offer expected price computation. Possible values include VALID_FOEP, NO_COMPETING_OFFER, OFFER_NOT_ELIGIBLE, OFFER_NOT_FOUND.
     *
     * @return self
     */
    public function setResultStatus($result_status)
    {
        if (is_null($result_status)) {
            throw new \InvalidArgumentException('non-nullable result_status cannot be null');
        }
        $this->container['result_status'] = $result_status;

        return $this;
    }

    /**
     * Gets competing_featured_offer
     *
     * @return \Ced\Model\FeaturedOffer|null
     */
    public function getCompetingFeaturedOffer()
    {
        return $this->container['competing_featured_offer'];
    }

    /**
     * Sets competing_featured_offer
     *
     * @param \Ced\Model\FeaturedOffer|null $competing_featured_offer competing_featured_offer
     *
     * @return self
     */
    public function setCompetingFeaturedOffer($competing_featured_offer)
    {
        if (is_null($competing_featured_offer)) {
            throw new \InvalidArgumentException('non-nullable competing_featured_offer cannot be null');
        }
        $this->container['competing_featured_offer'] = $competing_featured_offer;

        return $this;
    }

    /**
     * Gets current_featured_offer
     *
     * @return \Ced\Model\FeaturedOffer|null
     */
    public function getCurrentFeaturedOffer()
    {
        return $this->container['current_featured_offer'];
    }

    /**
     * Sets current_featured_offer
     *
     * @param \Ced\Model\FeaturedOffer|null $current_featured_offer current_featured_offer
     *
     * @return self
     */
    public function setCurrentFeaturedOffer($current_featured_offer)
    {
        if (is_null($current_featured_offer)) {
            throw new \InvalidArgumentException('non-nullable current_featured_offer cannot be null');
        }
        $this->container['current_featured_offer'] = $current_featured_offer;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


