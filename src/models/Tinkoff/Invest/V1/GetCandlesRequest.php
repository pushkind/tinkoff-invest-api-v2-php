<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос исторических свечей.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetCandlesRequest</code>
 */
class GetCandlesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Начало запрашиваемого периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     */
    protected $from = null;
    /**
     *Окончание запрашиваемого периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     */
    protected $to = null;
    /**
     *Интервал запрошенных свечей.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CandleInterval interval = 4;</code>
     */
    protected $interval = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента
     *     @type \Google\Protobuf\Timestamp $from
     *          Начало запрашиваемого периода в часовом поясе UTC.
     *     @type \Google\Protobuf\Timestamp $to
     *          Окончание запрашиваемого периода в часовом поясе UTC.
     *     @type int $interval
     *          Интервал запрошенных свечей.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Figi-идентификатор инструмента
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi-идентификатор инструмента
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

    /**
     *Начало запрашиваемого периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFrom()
    {
        return isset($this->from) ? $this->from : null;
    }

    public function hasFrom()
    {
        return isset($this->from);
    }

    public function clearFrom()
    {
        unset($this->from);
    }

    /**
     *Начало запрашиваемого периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->from = $var;

        return $this;
    }

    /**
     *Окончание запрашиваемого периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTo()
    {
        return isset($this->to) ? $this->to : null;
    }

    public function hasTo()
    {
        return isset($this->to);
    }

    public function clearTo()
    {
        unset($this->to);
    }

    /**
     *Окончание запрашиваемого периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->to = $var;

        return $this;
    }

    /**
     *Интервал запрошенных свечей.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CandleInterval interval = 4;</code>
     * @return int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     *Интервал запрошенных свечей.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.CandleInterval interval = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\CandleInterval::class);
        $this->interval = $var;

        return $this;
    }

}

