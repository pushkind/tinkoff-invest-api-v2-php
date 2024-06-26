<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1\GetBondEventsRequest;

use UnexpectedValueException;

/**
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.GetBondEventsRequest.EventType</code>
 */
class EventType
{
    /**
     *Неопределенное значение
     *
     * Generated from protobuf enum <code>EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * Купон
     *
     * Generated from protobuf enum <code>EVENT_TYPE_CPN = 1;</code>
     */
    const EVENT_TYPE_CPN = 1;
    /**
     * Опцион (оферта)
     *
     * Generated from protobuf enum <code>EVENT_TYPE_CALL = 2;</code>
     */
    const EVENT_TYPE_CALL = 2;
    /**
     * Погашение
     *
     * Generated from protobuf enum <code>EVENT_TYPE_MTY = 3;</code>
     */
    const EVENT_TYPE_MTY = 3;
    /**
     * Конвертация
     *
     * Generated from protobuf enum <code>EVENT_TYPE_CONV = 4;</code>
     */
    const EVENT_TYPE_CONV = 4;

    private static $valueToName = [
        self::EVENT_TYPE_UNSPECIFIED => 'EVENT_TYPE_UNSPECIFIED',
        self::EVENT_TYPE_CPN => 'EVENT_TYPE_CPN',
        self::EVENT_TYPE_CALL => 'EVENT_TYPE_CALL',
        self::EVENT_TYPE_MTY => 'EVENT_TYPE_MTY',
        self::EVENT_TYPE_CONV => 'EVENT_TYPE_CONV',
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
class_alias(EventType::class, \Tinkoff\Invest\V1\GetBondEventsRequest_EventType::class);
