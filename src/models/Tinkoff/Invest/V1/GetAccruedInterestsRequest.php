<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос НКД по облигации
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetAccruedInterestsRequest</code>
 */
class GetAccruedInterestsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $figi = '';
    /**
     *Начало запрашиваемого периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $from = null;
    /**
     *Окончание запрашиваемого периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $to = null;
    /**
     *Идентификатор инструмента Figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instrument_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type \Google\Protobuf\Timestamp $from
     *          Начало запрашиваемого периода в часовом поясе UTC.
     *     @type \Google\Protobuf\Timestamp $to
     *          Окончание запрашиваемого периода в часовом поясе UTC.
     *     @type string $instrument_id
     *          Идентификатор инструмента Figi или instrument_uid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getFigi()
    {
        @trigger_error('figi is deprecated.', E_USER_DEPRECATED);
        return $this->figi;
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setFigi($var)
    {
        @trigger_error('figi is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

    /**
     *Начало запрашиваемого периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     *Идентификатор инструмента Figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     *Идентификатор инструмента Figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_id = $var;

        return $this;
    }

}

