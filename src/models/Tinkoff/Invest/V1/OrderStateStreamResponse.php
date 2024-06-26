<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация по заявкам
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse</code>
 */
class OrderStateStreamResponse extends \Google\Protobuf\Internal\Message
{
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\OrderStateStreamResponse\OrderState $order_state
     *          Информация об исполнении торгового поручения.
     *     @type \Tinkoff\Invest\V1\Ping $ping
     *          Проверка активности стрима.
     *     @type \Tinkoff\Invest\V1\OrderStateStreamResponse\SubscriptionResponse $subscription
     *          Ответ на запрос на подписку.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Информация об исполнении торгового поручения.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse.OrderState order_state = 1;</code>
     * @return \Tinkoff\Invest\V1\OrderStateStreamResponse\OrderState|null
     */
    public function getOrderState()
    {
        return $this->readOneof(1);
    }

    public function hasOrderState()
    {
        return $this->hasOneof(1);
    }

    /**
     *Информация об исполнении торгового поручения.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse.OrderState order_state = 1;</code>
     * @param \Tinkoff\Invest\V1\OrderStateStreamResponse\OrderState $var
     * @return $this
     */
    public function setOrderState($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\OrderStateStreamResponse\OrderState::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *Проверка активности стрима.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Ping ping = 2;</code>
     * @return \Tinkoff\Invest\V1\Ping|null
     */
    public function getPing()
    {
        return $this->readOneof(2);
    }

    public function hasPing()
    {
        return $this->hasOneof(2);
    }

    /**
     *Проверка активности стрима.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Ping ping = 2;</code>
     * @param \Tinkoff\Invest\V1\Ping $var
     * @return $this
     */
    public function setPing($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Ping::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     *Ответ на запрос на подписку.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse.SubscriptionResponse subscription = 3;</code>
     * @return \Tinkoff\Invest\V1\OrderStateStreamResponse\SubscriptionResponse|null
     */
    public function getSubscription()
    {
        return $this->readOneof(3);
    }

    public function hasSubscription()
    {
        return $this->hasOneof(3);
    }

    /**
     *Ответ на запрос на подписку.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse.SubscriptionResponse subscription = 3;</code>
     * @param \Tinkoff\Invest\V1\OrderStateStreamResponse\SubscriptionResponse $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\OrderStateStreamResponse\SubscriptionResponse::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}
