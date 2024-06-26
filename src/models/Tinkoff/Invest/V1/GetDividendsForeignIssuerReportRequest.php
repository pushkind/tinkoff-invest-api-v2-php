<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Объект запроса сформированного отчёта "Справка о доходах за пределами РФ".
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetDividendsForeignIssuerReportRequest</code>
 */
class GetDividendsForeignIssuerReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор задачи формирования отчёта.
     *
     * Generated from protobuf field <code>string task_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $task_id = '';
    /**
     *Номер страницы отчета (начинается с 0), значение по умолчанию: 0.
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     */
    protected $page = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_id
     *          Идентификатор задачи формирования отчёта.
     *     @type int $page
     *          Номер страницы отчета (начинается с 0), значение по умолчанию: 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор задачи формирования отчёта.
     *
     * Generated from protobuf field <code>string task_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     *Идентификатор задачи формирования отчёта.
     *
     * Generated from protobuf field <code>string task_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_id = $var;

        return $this;
    }

    /**
     *Номер страницы отчета (начинается с 0), значение по умолчанию: 0.
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     * @return int
     */
    public function getPage()
    {
        return isset($this->page) ? $this->page : 0;
    }

    public function hasPage()
    {
        return isset($this->page);
    }

    public function clearPage()
    {
        unset($this->page);
    }

    /**
     *Номер страницы отчета (начинается с 0), значение по умолчанию: 0.
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

}

