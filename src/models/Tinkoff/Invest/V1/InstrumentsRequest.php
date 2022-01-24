<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос получения инструментов.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.InstrumentsRequest</code>
 */
class InstrumentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Статус запрашиваемых инструментов. Возможные значения: [InstrumentStatus](#instrumentstatus)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentStatus instrument_status = 1;</code>
     */
    protected $instrument_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $instrument_status
     *          Статус запрашиваемых инструментов. Возможные значения: [InstrumentStatus](#instrumentstatus)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Статус запрашиваемых инструментов. Возможные значения: [InstrumentStatus](#instrumentstatus)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentStatus instrument_status = 1;</code>
     * @return int
     */
    public function getInstrumentStatus()
    {
        return $this->instrument_status;
    }

    /**
     *Статус запрашиваемых инструментов. Возможные значения: [InstrumentStatus](#instrumentstatus)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentStatus instrument_status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInstrumentStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\InstrumentStatus::class);
        $this->instrument_status = $var;

        return $this;
    }

}
