<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Массив предложений/спроса.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Order</code>
 */
class Order extends \Google\Protobuf\Internal\Message
{
    /**
     *Цена за 1 лот.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 1;</code>
     */
    protected $price = null;
    /**
     *Количество в лотах.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     */
    protected $quantity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Quotation $price
     *          Цена за 1 лот.
     *     @type int|string $quantity
     *          Количество в лотах.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Цена за 1 лот.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 1;</code>
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
     *Цена за 1 лот.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 1;</code>
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
     *Количество в лотах.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *Количество в лотах.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;

        return $this;
    }

}

