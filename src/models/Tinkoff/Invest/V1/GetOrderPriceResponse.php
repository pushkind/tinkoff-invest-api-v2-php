<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Предварительная стоимость заявки
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetOrderPriceResponse</code>
 */
class GetOrderPriceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Итоговая стоимость заявки
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_order_amount = 1;</code>
     */
    protected $total_order_amount = null;
    /**
     *Стоимость заявки без комиссий, НКД, ГО (для фьючерсов — стоимость контрактов)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_order_amount = 5;</code>
     */
    protected $initial_order_amount = null;
    /**
     *Запрошено лотов
     *
     * Generated from protobuf field <code>int64 lots_requested = 3;</code>
     */
    protected $lots_requested = 0;
    /**
     *Общая комиссия
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_commission = 7;</code>
     */
    protected $executed_commission = null;
    /**
     *Общая комиссия в рублях
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_commission_rub = 8;</code>
     */
    protected $executed_commission_rub = null;
    /**
     *Сервисная комиссия
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue service_commission = 9;</code>
     */
    protected $service_commission = null;
    /**
     *Комиссия за проведение сделки
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue deal_commission = 10;</code>
     */
    protected $deal_commission = null;
    protected $instrument_extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_order_amount
     *          Итоговая стоимость заявки
     *     @type \Tinkoff\Invest\V1\MoneyValue $initial_order_amount
     *          Стоимость заявки без комиссий, НКД, ГО (для фьючерсов — стоимость контрактов)
     *     @type int|string $lots_requested
     *          Запрошено лотов
     *     @type \Tinkoff\Invest\V1\MoneyValue $executed_commission
     *          Общая комиссия
     *     @type \Tinkoff\Invest\V1\MoneyValue $executed_commission_rub
     *          Общая комиссия в рублях
     *     @type \Tinkoff\Invest\V1\MoneyValue $service_commission
     *          Сервисная комиссия
     *     @type \Tinkoff\Invest\V1\MoneyValue $deal_commission
     *          Комиссия за проведение сделки
     *     @type \Tinkoff\Invest\V1\GetOrderPriceResponse\ExtraBond $extra_bond
     *          Дополнительная информация по облигациям
     *     @type \Tinkoff\Invest\V1\GetOrderPriceResponse\ExtraFuture $extra_future
     *          Дополнительная информация по фьючерсам
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Итоговая стоимость заявки
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_order_amount = 1;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getTotalOrderAmount()
    {
        return isset($this->total_order_amount) ? $this->total_order_amount : null;
    }

    public function hasTotalOrderAmount()
    {
        return isset($this->total_order_amount);
    }

    public function clearTotalOrderAmount()
    {
        unset($this->total_order_amount);
    }

    /**
     *Итоговая стоимость заявки
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_order_amount = 1;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalOrderAmount($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_order_amount = $var;

        return $this;
    }

    /**
     *Стоимость заявки без комиссий, НКД, ГО (для фьючерсов — стоимость контрактов)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_order_amount = 5;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getInitialOrderAmount()
    {
        return isset($this->initial_order_amount) ? $this->initial_order_amount : null;
    }

    public function hasInitialOrderAmount()
    {
        return isset($this->initial_order_amount);
    }

    public function clearInitialOrderAmount()
    {
        unset($this->initial_order_amount);
    }

    /**
     *Стоимость заявки без комиссий, НКД, ГО (для фьючерсов — стоимость контрактов)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_order_amount = 5;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setInitialOrderAmount($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->initial_order_amount = $var;

        return $this;
    }

    /**
     *Запрошено лотов
     *
     * Generated from protobuf field <code>int64 lots_requested = 3;</code>
     * @return int|string
     */
    public function getLotsRequested()
    {
        return $this->lots_requested;
    }

    /**
     *Запрошено лотов
     *
     * Generated from protobuf field <code>int64 lots_requested = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLotsRequested($var)
    {
        GPBUtil::checkInt64($var);
        $this->lots_requested = $var;

        return $this;
    }

    /**
     *Общая комиссия
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_commission = 7;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getExecutedCommission()
    {
        return isset($this->executed_commission) ? $this->executed_commission : null;
    }

    public function hasExecutedCommission()
    {
        return isset($this->executed_commission);
    }

    public function clearExecutedCommission()
    {
        unset($this->executed_commission);
    }

    /**
     *Общая комиссия
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_commission = 7;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setExecutedCommission($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->executed_commission = $var;

        return $this;
    }

    /**
     *Общая комиссия в рублях
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_commission_rub = 8;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getExecutedCommissionRub()
    {
        return isset($this->executed_commission_rub) ? $this->executed_commission_rub : null;
    }

    public function hasExecutedCommissionRub()
    {
        return isset($this->executed_commission_rub);
    }

    public function clearExecutedCommissionRub()
    {
        unset($this->executed_commission_rub);
    }

    /**
     *Общая комиссия в рублях
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_commission_rub = 8;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setExecutedCommissionRub($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->executed_commission_rub = $var;

        return $this;
    }

    /**
     *Сервисная комиссия
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue service_commission = 9;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getServiceCommission()
    {
        return isset($this->service_commission) ? $this->service_commission : null;
    }

    public function hasServiceCommission()
    {
        return isset($this->service_commission);
    }

    public function clearServiceCommission()
    {
        unset($this->service_commission);
    }

    /**
     *Сервисная комиссия
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue service_commission = 9;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setServiceCommission($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->service_commission = $var;

        return $this;
    }

    /**
     *Комиссия за проведение сделки
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue deal_commission = 10;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getDealCommission()
    {
        return isset($this->deal_commission) ? $this->deal_commission : null;
    }

    public function hasDealCommission()
    {
        return isset($this->deal_commission);
    }

    public function clearDealCommission()
    {
        unset($this->deal_commission);
    }

    /**
     *Комиссия за проведение сделки
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue deal_commission = 10;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setDealCommission($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->deal_commission = $var;

        return $this;
    }

    /**
     *Дополнительная информация по облигациям
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GetOrderPriceResponse.ExtraBond extra_bond = 12;</code>
     * @return \Tinkoff\Invest\V1\GetOrderPriceResponse\ExtraBond|null
     */
    public function getExtraBond()
    {
        return $this->readOneof(12);
    }

    public function hasExtraBond()
    {
        return $this->hasOneof(12);
    }

    /**
     *Дополнительная информация по облигациям
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GetOrderPriceResponse.ExtraBond extra_bond = 12;</code>
     * @param \Tinkoff\Invest\V1\GetOrderPriceResponse\ExtraBond $var
     * @return $this
     */
    public function setExtraBond($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\GetOrderPriceResponse\ExtraBond::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     *Дополнительная информация по фьючерсам
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GetOrderPriceResponse.ExtraFuture extra_future = 13;</code>
     * @return \Tinkoff\Invest\V1\GetOrderPriceResponse\ExtraFuture|null
     */
    public function getExtraFuture()
    {
        return $this->readOneof(13);
    }

    public function hasExtraFuture()
    {
        return $this->hasOneof(13);
    }

    /**
     *Дополнительная информация по фьючерсам
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GetOrderPriceResponse.ExtraFuture extra_future = 13;</code>
     * @param \Tinkoff\Invest\V1\GetOrderPriceResponse\ExtraFuture $var
     * @return $this
     */
    public function setExtraFuture($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\GetOrderPriceResponse\ExtraFuture::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInstrumentExtra()
    {
        return $this->whichOneof("instrument_extra");
    }

}

