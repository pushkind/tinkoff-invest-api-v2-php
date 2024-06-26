<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о цене последней сделки.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.LastPrice</code>
 */
class LastPrice extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Цена последней сделки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента. Для перевод цен в валюту рекомендуем использовать [информацию со страницы](https://russianinvestments.github.io/investAPI/faq_marketdata/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 2;</code>
     */
    protected $price = null;
    /**
     *Время получения последней цены в часовом поясе UTC по времени биржи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 3;</code>
     */
    protected $time = null;
    /**
     *Uid инструмента
     *
     * Generated from protobuf field <code>string instrument_uid = 11;</code>
     */
    protected $instrument_uid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi инструмента.
     *     @type \Tinkoff\Invest\V1\Quotation $price
     *          Цена последней сделки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента. Для перевод цен в валюту рекомендуем использовать [информацию со страницы](https://russianinvestments.github.io/investAPI/faq_marketdata/)
     *     @type \Google\Protobuf\Timestamp $time
     *          Время получения последней цены в часовом поясе UTC по времени биржи.
     *     @type string $instrument_uid
     *          Uid инструмента
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Figi инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi инструмента.
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
     *Цена последней сделки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента. Для перевод цен в валюту рекомендуем использовать [информацию со страницы](https://russianinvestments.github.io/investAPI/faq_marketdata/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 2;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getPrice()
    {
        return isset($this->price) ? $this->price : null;
    }

    public function hasPrice()
    {
        return isset($this->price);
    }

    public function clearPrice()
    {
        unset($this->price);
    }

    /**
     *Цена последней сделки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента. Для перевод цен в валюту рекомендуем использовать [информацию со страницы](https://russianinvestments.github.io/investAPI/faq_marketdata/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 2;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->price = $var;

        return $this;
    }

    /**
     *Время получения последней цены в часовом поясе UTC по времени биржи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return isset($this->time) ? $this->time : null;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     *Время получения последней цены в часовом поясе UTC по времени биржи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     *Uid инструмента
     *
     * Generated from protobuf field <code>string instrument_uid = 11;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *Uid инструмента
     *
     * Generated from protobuf field <code>string instrument_uid = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_uid = $var;

        return $this;
    }

}

