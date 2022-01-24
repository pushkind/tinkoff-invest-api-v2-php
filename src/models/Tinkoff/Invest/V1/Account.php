<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: users.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о счёте.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Account</code>
 */
class Account extends \Google\Protobuf\Internal\Message
{
    /**
     * Идентификатор счёта.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Тип счёта.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AccountType type = 2;</code>
     */
    protected $type = 0;
    /**
     * Название счёта.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Статус счёта.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AccountStatus status = 4;</code>
     */
    protected $status = 0;
    /**
     * Дата открытия счёта в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp opened_date = 5;</code>
     */
    protected $opened_date = null;
    /**
     * Дата закрытия счёта в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp closed_date = 6;</code>
     */
    protected $closed_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Идентификатор счёта.
     *     @type int $type
     *           Тип счёта.
     *     @type string $name
     *           Название счёта.
     *     @type int $status
     *           Статус счёта.
     *     @type \Google\Protobuf\Timestamp $opened_date
     *           Дата открытия счёта в часовом поясе UTC.
     *     @type \Google\Protobuf\Timestamp $closed_date
     *           Дата закрытия счёта в часовом поясе UTC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Users::initOnce();
        parent::__construct($data);
    }

    /**
     * Идентификатор счёта.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Идентификатор счёта.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Тип счёта.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AccountType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Тип счёта.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AccountType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\AccountType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Название счёта.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Название счёта.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Статус счёта.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AccountStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Статус счёта.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AccountStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\AccountStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Дата открытия счёта в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp opened_date = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getOpenedDate()
    {
        return isset($this->opened_date) ? $this->opened_date : null;
    }

    public function hasOpenedDate()
    {
        return isset($this->opened_date);
    }

    public function clearOpenedDate()
    {
        unset($this->opened_date);
    }

    /**
     * Дата открытия счёта в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp opened_date = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setOpenedDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->opened_date = $var;

        return $this;
    }

    /**
     * Дата закрытия счёта в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp closed_date = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getClosedDate()
    {
        return isset($this->closed_date) ? $this->closed_date : null;
    }

    public function hasClosedDate()
    {
        return isset($this->closed_date);
    }

    public function clearClosedDate()
    {
        unset($this->closed_date);
    }

    /**
     * Дата закрытия счёта в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp closed_date = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setClosedDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->closed_date = $var;

        return $this;
    }

}

