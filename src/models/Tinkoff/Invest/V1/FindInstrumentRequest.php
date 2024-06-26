<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос на поиск инструментов.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.FindInstrumentRequest</code>
 */
class FindInstrumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Строка поиска.
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = '';
    /**
     *Фильтр по типу инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 2;</code>
     */
    protected $instrument_kind = null;
    /**
     *Фильтр для отображения только торговых инструментов.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 3;</code>
     */
    protected $api_trade_available_flag = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *          Строка поиска.
     *     @type int $instrument_kind
     *          Фильтр по типу инструмента.
     *     @type bool $api_trade_available_flag
     *          Фильтр для отображения только торговых инструментов.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Строка поиска.
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     *Строка поиска.
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     *Фильтр по типу инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 2;</code>
     * @return int
     */
    public function getInstrumentKind()
    {
        return isset($this->instrument_kind) ? $this->instrument_kind : 0;
    }

    public function hasInstrumentKind()
    {
        return isset($this->instrument_kind);
    }

    public function clearInstrumentKind()
    {
        unset($this->instrument_kind);
    }

    /**
     *Фильтр по типу инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setInstrumentKind($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\InstrumentType::class);
        $this->instrument_kind = $var;

        return $this;
    }

    /**
     *Фильтр для отображения только торговых инструментов.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 3;</code>
     * @return bool
     */
    public function getApiTradeAvailableFlag()
    {
        return isset($this->api_trade_available_flag) ? $this->api_trade_available_flag : false;
    }

    public function hasApiTradeAvailableFlag()
    {
        return isset($this->api_trade_available_flag);
    }

    public function clearApiTradeAvailableFlag()
    {
        unset($this->api_trade_available_flag);
    }

    /**
     *Фильтр для отображения только торговых инструментов.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setApiTradeAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->api_trade_available_flag = $var;

        return $this;
    }

}

