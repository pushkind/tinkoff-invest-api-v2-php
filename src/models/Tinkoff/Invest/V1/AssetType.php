<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Тип актива.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.AssetType</code>
 */
class AssetType
{
    /**
     *Тип не определён.
     *
     * Generated from protobuf enum <code>ASSET_TYPE_UNSPECIFIED = 0;</code>
     */
    const ASSET_TYPE_UNSPECIFIED = 0;
    /**
     *Валюта.
     *
     * Generated from protobuf enum <code>ASSET_TYPE_CURRENCY = 1;</code>
     */
    const ASSET_TYPE_CURRENCY = 1;
    /**
     *Товар.
     *
     * Generated from protobuf enum <code>ASSET_TYPE_COMMODITY = 2;</code>
     */
    const ASSET_TYPE_COMMODITY = 2;
    /**
     *Индекс.
     *
     * Generated from protobuf enum <code>ASSET_TYPE_INDEX = 3;</code>
     */
    const ASSET_TYPE_INDEX = 3;
    /**
     *Ценная бумага.
     *
     * Generated from protobuf enum <code>ASSET_TYPE_SECURITY = 4;</code>
     */
    const ASSET_TYPE_SECURITY = 4;

    private static $valueToName = [
        self::ASSET_TYPE_UNSPECIFIED => 'ASSET_TYPE_UNSPECIFIED',
        self::ASSET_TYPE_CURRENCY => 'ASSET_TYPE_CURRENCY',
        self::ASSET_TYPE_COMMODITY => 'ASSET_TYPE_COMMODITY',
        self::ASSET_TYPE_INDEX => 'ASSET_TYPE_INDEX',
        self::ASSET_TYPE_SECURITY => 'ASSET_TYPE_SECURITY',
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
