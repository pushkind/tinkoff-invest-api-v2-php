<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1\PortfolioRequest;

use UnexpectedValueException;

/**
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.PortfolioRequest.CurrencyRequest</code>
 */
class CurrencyRequest
{
    /**
     *Рубли
     *
     * Generated from protobuf enum <code>RUB = 0;</code>
     */
    const RUB = 0;
    /**
     *Доллары
     *
     * Generated from protobuf enum <code>USD = 1;</code>
     */
    const USD = 1;
    /**
     *Евро
     *
     * Generated from protobuf enum <code>EUR = 2;</code>
     */
    const EUR = 2;

    private static $valueToName = [
        self::RUB => 'RUB',
        self::USD => 'USD',
        self::EUR => 'EUR',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CurrencyRequest::class, \Tinkoff\Invest\V1\PortfolioRequest_CurrencyRequest::class);
