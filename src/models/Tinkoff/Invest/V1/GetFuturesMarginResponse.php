<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Данные по фьючерсу
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetFuturesMarginResponse</code>
 */
class GetFuturesMarginResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Гарантийное обеспечение при покупке.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_margin_on_buy = 1;</code>
     */
    protected $initial_margin_on_buy = null;
    /**
     *Гарантийное обеспечение при продаже.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_margin_on_sell = 2;</code>
     */
    protected $initial_margin_on_sell = null;
    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>float min_price_increment = 3;</code>
     */
    protected $min_price_increment = 0.0;
    /**
     *Стоимость шага цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment_amount = 4;</code>
     */
    protected $min_price_increment_amount = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\MoneyValue $initial_margin_on_buy
     *          Гарантийное обеспечение при покупке.
     *     @type \Tinkoff\Invest\V1\MoneyValue $initial_margin_on_sell
     *          Гарантийное обеспечение при продаже.
     *     @type float $min_price_increment
     *          Шаг цены.
     *     @type \Tinkoff\Invest\V1\Quotation $min_price_increment_amount
     *          Стоимость шага цены.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Гарантийное обеспечение при покупке.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_margin_on_buy = 1;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getInitialMarginOnBuy()
    {
        return isset($this->initial_margin_on_buy) ? $this->initial_margin_on_buy : null;
    }

    public function hasInitialMarginOnBuy()
    {
        return isset($this->initial_margin_on_buy);
    }

    public function clearInitialMarginOnBuy()
    {
        unset($this->initial_margin_on_buy);
    }

    /**
     *Гарантийное обеспечение при покупке.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_margin_on_buy = 1;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setInitialMarginOnBuy($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->initial_margin_on_buy = $var;

        return $this;
    }

    /**
     *Гарантийное обеспечение при продаже.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_margin_on_sell = 2;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getInitialMarginOnSell()
    {
        return isset($this->initial_margin_on_sell) ? $this->initial_margin_on_sell : null;
    }

    public function hasInitialMarginOnSell()
    {
        return isset($this->initial_margin_on_sell);
    }

    public function clearInitialMarginOnSell()
    {
        unset($this->initial_margin_on_sell);
    }

    /**
     *Гарантийное обеспечение при продаже.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_margin_on_sell = 2;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setInitialMarginOnSell($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->initial_margin_on_sell = $var;

        return $this;
    }

    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>float min_price_increment = 3;</code>
     * @return float
     */
    public function getMinPriceIncrement()
    {
        return $this->min_price_increment;
    }

    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>float min_price_increment = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setMinPriceIncrement($var)
    {
        GPBUtil::checkFloat($var);
        $this->min_price_increment = $var;

        return $this;
    }

    /**
     *Стоимость шага цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment_amount = 4;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getMinPriceIncrementAmount()
    {
        return isset($this->min_price_increment_amount) ? $this->min_price_increment_amount : null;
    }

    public function hasMinPriceIncrementAmount()
    {
        return isset($this->min_price_increment_amount);
    }

    public function clearMinPriceIncrementAmount()
    {
        unset($this->min_price_increment_amount);
    }

    /**
     *Стоимость шага цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment_amount = 4;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setMinPriceIncrementAmount($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->min_price_increment_amount = $var;

        return $this;
    }

}

