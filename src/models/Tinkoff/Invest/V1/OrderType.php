<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Тип заявки.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.OrderType</code>
 */
class OrderType
{
    /**
     *Значение не указано
     *
     * Generated from protobuf enum <code>ORDER_TYPE_UNSPECIFIED = 0;</code>
     */
    const ORDER_TYPE_UNSPECIFIED = 0;
    /**
     *Лимитная
     *
     * Generated from protobuf enum <code>ORDER_TYPE_LIMIT = 1;</code>
     */
    const ORDER_TYPE_LIMIT = 1;
    /**
     *Рыночная
     *
     * Generated from protobuf enum <code>ORDER_TYPE_MARKET = 2;</code>
     */
    const ORDER_TYPE_MARKET = 2;
    /**
     *Лучшая цена
     *
     * Generated from protobuf enum <code>ORDER_TYPE_BESTPRICE = 3;</code>
     */
    const ORDER_TYPE_BESTPRICE = 3;

    private static $valueToName = [
        self::ORDER_TYPE_UNSPECIFIED => 'ORDER_TYPE_UNSPECIFIED',
        self::ORDER_TYPE_LIMIT => 'ORDER_TYPE_LIMIT',
        self::ORDER_TYPE_MARKET => 'ORDER_TYPE_MARKET',
        self::ORDER_TYPE_BESTPRICE => 'ORDER_TYPE_BESTPRICE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

