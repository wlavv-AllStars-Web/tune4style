<?php
/**
 * 2021 Worldline Online Payments
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0).
 * It is also available through the world-wide-web at this URL: https://opensource.org/licenses/AFL-3.0
 *
 * @author    PrestaShop partner
 * @copyright 2021 Worldline Online Payments
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *
 */

/**
 * Class WorldlineopToken
 */
class WorldlineopToken extends ObjectModel
{
    /** @var int $id_worldlineop_token */
    public $id_worldlineop_token;

    /** @var int $id_customer */
    public $id_customer;

    /** @var int $id_shop */
    public $id_shop;

    /** @var string $product_id */
    public $product_id;

    /** @var string $card_number */
    public $card_number;

    /** @var string $expiry_date */
    public $expiry_date;

    /** @var string $value */
    public $value;

    /** @var string $secure_key */
    public $secure_key;

    /** @var array $definition */
    public static $definition = [
        'table' => 'worldlineop_token',
        'primary' => 'id_worldlineop_token',
        'fields' => [
            'id_customer' => [
                'type' => self::TYPE_INT,
                'required' => true,
            ],
            'id_shop' => [
                'type' => self::TYPE_INT,
                'required' => true,
            ],
            'product_id' => [
                'type' => self::TYPE_STRING,
                'allow_null' => false,
                'required' => true,
            ],
            'card_number' => [
                'type' => self::TYPE_STRING,
                'allow_null' => true,
                'required' => false,
            ],
            'expiry_date' => [
                'type' => self::TYPE_STRING,
                'allow_null' => true,
                'required' => false,
            ],
            'value' => [
                'type' => self::TYPE_STRING,
                'allow_null' => false,
                'required' => true,
            ],
            'secure_key' => [
                'type' => self::TYPE_STRING,
                'allow_null' => false,
                'required' => true,
            ],
        ],
    ];
}
