<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о торговом поручении.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OrderState</code>
 */
class OrderState extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор заявки.
     *
     * Generated from protobuf field <code>string order_id = 1;</code>
     */
    protected $order_id = '';
    /**
     *Текущий статус заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatus execution_report_status = 2;</code>
     */
    protected $execution_report_status = 0;
    /**
     *Запрошено лотов.
     *
     * Generated from protobuf field <code>int64 lots_requested = 3;</code>
     */
    protected $lots_requested = 0;
    /**
     *Исполнено лотов.
     *
     * Generated from protobuf field <code>int64 lots_executed = 4;</code>
     */
    protected $lots_executed = 0;
    /**
     *Начальная цена заявки. Произведение количества запрошенных лотов на цену.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_order_price = 5;</code>
     */
    protected $initial_order_price = null;
    /**
     *Исполненная цена заявки. Произведение средней цены покупки на количество лотов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_order_price = 6;</code>
     */
    protected $executed_order_price = null;
    /**
     *Итоговая стоимость заявки, включающая все комиссии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_order_amount = 7;</code>
     */
    protected $total_order_amount = null;
    /**
     *Средняя цена позиции по сделке.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price = 8;</code>
     */
    protected $average_position_price = null;
    /**
     *Начальная комиссия. Комиссия, рассчитанная на момент подачи заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_commission = 9;</code>
     */
    protected $initial_commission = null;
    /**
     *Фактическая комиссия по итогам исполнения заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_commission = 10;</code>
     */
    protected $executed_commission = null;
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 11;</code>
     */
    protected $figi = '';
    /**
     *Направление заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderDirection direction = 12;</code>
     */
    protected $direction = 0;
    /**
     *Начальная цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_security_price = 13;</code>
     */
    protected $initial_security_price = null;
    /**
     *Стадии выполнения заявки.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.OrderStage stages = 14;</code>
     */
    private $stages;
    /**
     *Сервисная комиссия.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue service_commission = 15;</code>
     */
    protected $service_commission = null;
    /**
     *Валюта заявки.
     *
     * Generated from protobuf field <code>string currency = 16;</code>
     */
    protected $currency = '';
    /**
     *Тип заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderType order_type = 17;</code>
     */
    protected $order_type = 0;
    /**
     *Дата и время выставления заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp order_date = 18;</code>
     */
    protected $order_date = null;
    /**
     *UID идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 19;</code>
     */
    protected $instrument_uid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $order_id
     *          Идентификатор заявки.
     *     @type int $execution_report_status
     *          Текущий статус заявки.
     *     @type int|string $lots_requested
     *          Запрошено лотов.
     *     @type int|string $lots_executed
     *          Исполнено лотов.
     *     @type \Tinkoff\Invest\V1\MoneyValue $initial_order_price
     *          Начальная цена заявки. Произведение количества запрошенных лотов на цену.
     *     @type \Tinkoff\Invest\V1\MoneyValue $executed_order_price
     *          Исполненная цена заявки. Произведение средней цены покупки на количество лотов.
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_order_amount
     *          Итоговая стоимость заявки, включающая все комиссии.
     *     @type \Tinkoff\Invest\V1\MoneyValue $average_position_price
     *          Средняя цена позиции по сделке.
     *     @type \Tinkoff\Invest\V1\MoneyValue $initial_commission
     *          Начальная комиссия. Комиссия, рассчитанная на момент подачи заявки.
     *     @type \Tinkoff\Invest\V1\MoneyValue $executed_commission
     *          Фактическая комиссия по итогам исполнения заявки.
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type int $direction
     *          Направление заявки.
     *     @type \Tinkoff\Invest\V1\MoneyValue $initial_security_price
     *          Начальная цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *     @type \Tinkoff\Invest\V1\OrderStage[]|\Google\Protobuf\Internal\RepeatedField $stages
     *          Стадии выполнения заявки.
     *     @type \Tinkoff\Invest\V1\MoneyValue $service_commission
     *          Сервисная комиссия.
     *     @type string $currency
     *          Валюта заявки.
     *     @type int $order_type
     *          Тип заявки.
     *     @type \Google\Protobuf\Timestamp $order_date
     *          Дата и время выставления заявки в часовом поясе UTC.
     *     @type string $instrument_uid
     *          UID идентификатор инструмента.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор заявки.
     *
     * Generated from protobuf field <code>string order_id = 1;</code>
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     *Идентификатор заявки.
     *
     * Generated from protobuf field <code>string order_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;

        return $this;
    }

    /**
     *Текущий статус заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatus execution_report_status = 2;</code>
     * @return int
     */
    public function getExecutionReportStatus()
    {
        return $this->execution_report_status;
    }

    /**
     *Текущий статус заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatus execution_report_status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExecutionReportStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OrderExecutionReportStatus::class);
        $this->execution_report_status = $var;

        return $this;
    }

    /**
     *Запрошено лотов.
     *
     * Generated from protobuf field <code>int64 lots_requested = 3;</code>
     * @return int|string
     */
    public function getLotsRequested()
    {
        return $this->lots_requested;
    }

    /**
     *Запрошено лотов.
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
     *Исполнено лотов.
     *
     * Generated from protobuf field <code>int64 lots_executed = 4;</code>
     * @return int|string
     */
    public function getLotsExecuted()
    {
        return $this->lots_executed;
    }

    /**
     *Исполнено лотов.
     *
     * Generated from protobuf field <code>int64 lots_executed = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLotsExecuted($var)
    {
        GPBUtil::checkInt64($var);
        $this->lots_executed = $var;

        return $this;
    }

    /**
     *Начальная цена заявки. Произведение количества запрошенных лотов на цену.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_order_price = 5;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getInitialOrderPrice()
    {
        return isset($this->initial_order_price) ? $this->initial_order_price : null;
    }

    public function hasInitialOrderPrice()
    {
        return isset($this->initial_order_price);
    }

    public function clearInitialOrderPrice()
    {
        unset($this->initial_order_price);
    }

    /**
     *Начальная цена заявки. Произведение количества запрошенных лотов на цену.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_order_price = 5;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setInitialOrderPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->initial_order_price = $var;

        return $this;
    }

    /**
     *Исполненная цена заявки. Произведение средней цены покупки на количество лотов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_order_price = 6;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getExecutedOrderPrice()
    {
        return isset($this->executed_order_price) ? $this->executed_order_price : null;
    }

    public function hasExecutedOrderPrice()
    {
        return isset($this->executed_order_price);
    }

    public function clearExecutedOrderPrice()
    {
        unset($this->executed_order_price);
    }

    /**
     *Исполненная цена заявки. Произведение средней цены покупки на количество лотов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_order_price = 6;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setExecutedOrderPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->executed_order_price = $var;

        return $this;
    }

    /**
     *Итоговая стоимость заявки, включающая все комиссии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_order_amount = 7;</code>
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
     *Итоговая стоимость заявки, включающая все комиссии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_order_amount = 7;</code>
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
     *Средняя цена позиции по сделке.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price = 8;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getAveragePositionPrice()
    {
        return isset($this->average_position_price) ? $this->average_position_price : null;
    }

    public function hasAveragePositionPrice()
    {
        return isset($this->average_position_price);
    }

    public function clearAveragePositionPrice()
    {
        unset($this->average_position_price);
    }

    /**
     *Средняя цена позиции по сделке.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price = 8;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setAveragePositionPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->average_position_price = $var;

        return $this;
    }

    /**
     *Начальная комиссия. Комиссия, рассчитанная на момент подачи заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_commission = 9;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getInitialCommission()
    {
        return isset($this->initial_commission) ? $this->initial_commission : null;
    }

    public function hasInitialCommission()
    {
        return isset($this->initial_commission);
    }

    public function clearInitialCommission()
    {
        unset($this->initial_commission);
    }

    /**
     *Начальная комиссия. Комиссия, рассчитанная на момент подачи заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_commission = 9;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setInitialCommission($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->initial_commission = $var;

        return $this;
    }

    /**
     *Фактическая комиссия по итогам исполнения заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_commission = 10;</code>
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
     *Фактическая комиссия по итогам исполнения заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue executed_commission = 10;</code>
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
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 11;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 11;</code>
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
     *Направление заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderDirection direction = 12;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     *Направление заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderDirection direction = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OrderDirection::class);
        $this->direction = $var;

        return $this;
    }

    /**
     *Начальная цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_security_price = 13;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getInitialSecurityPrice()
    {
        return isset($this->initial_security_price) ? $this->initial_security_price : null;
    }

    public function hasInitialSecurityPrice()
    {
        return isset($this->initial_security_price);
    }

    public function clearInitialSecurityPrice()
    {
        unset($this->initial_security_price);
    }

    /**
     *Начальная цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue initial_security_price = 13;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setInitialSecurityPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->initial_security_price = $var;

        return $this;
    }

    /**
     *Стадии выполнения заявки.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.OrderStage stages = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStages()
    {
        return $this->stages;
    }

    /**
     *Стадии выполнения заявки.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.OrderStage stages = 14;</code>
     * @param \Tinkoff\Invest\V1\OrderStage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\OrderStage::class);
        $this->stages = $arr;

        return $this;
    }

    /**
     *Сервисная комиссия.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue service_commission = 15;</code>
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
     *Сервисная комиссия.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue service_commission = 15;</code>
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
     *Валюта заявки.
     *
     * Generated from protobuf field <code>string currency = 16;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *Валюта заявки.
     *
     * Generated from protobuf field <code>string currency = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     *Тип заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderType order_type = 17;</code>
     * @return int
     */
    public function getOrderType()
    {
        return $this->order_type;
    }

    /**
     *Тип заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderType order_type = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OrderType::class);
        $this->order_type = $var;

        return $this;
    }

    /**
     *Дата и время выставления заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp order_date = 18;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getOrderDate()
    {
        return isset($this->order_date) ? $this->order_date : null;
    }

    public function hasOrderDate()
    {
        return isset($this->order_date);
    }

    public function clearOrderDate()
    {
        unset($this->order_date);
    }

    /**
     *Дата и время выставления заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp order_date = 18;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setOrderDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->order_date = $var;

        return $this;
    }

    /**
     *UID идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 19;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *UID идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 19;</code>
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

