<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1\OrderStateStreamResponse\SubscriptionResponse;

use UnexpectedValueException;

/**
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse.SubscriptionResponse.SubscriptionStatus</code>
 */
class SubscriptionStatus
{
    /**
     *Статус подписки не определен.
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_UNSPECIFIED = 0;</code>
     */
    const SUBSCRIPTION_STATUS_UNSPECIFIED = 0;
    /**
     *Подписка успешно установлена.
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_OK = 1;</code>
     */
    const SUBSCRIPTION_STATUS_OK = 1;
    /**
     *Ошибка подписки
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_STATUS_ERROR = 13;</code>
     */
    const SUBSCRIPTION_STATUS_ERROR = 13;

    private static $valueToName = [
        self::SUBSCRIPTION_STATUS_UNSPECIFIED => 'SUBSCRIPTION_STATUS_UNSPECIFIED',
        self::SUBSCRIPTION_STATUS_OK => 'SUBSCRIPTION_STATUS_OK',
        self::SUBSCRIPTION_STATUS_ERROR => 'SUBSCRIPTION_STATUS_ERROR',
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
class_alias(SubscriptionStatus::class, \Tinkoff\Invest\V1\OrderStateStreamResponse_SubscriptionResponse_SubscriptionStatus::class);

