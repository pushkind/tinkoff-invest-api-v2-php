<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: users.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Лимит stream-соединений.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.StreamLimit</code>
 */
class StreamLimit extends \Google\Protobuf\Internal\Message
{
    /**
     *Максимальное количество stream-соединений
     *
     * Generated from protobuf field <code>int32 limit = 1;</code>
     */
    protected $limit = 0;
    /**
     *Названия stream-методов
     *
     * Generated from protobuf field <code>repeated string streams = 2;</code>
     */
    private $streams;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $limit
     *          Максимальное количество stream-соединений
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $streams
     *          Названия stream-методов
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Users::initOnce();
        parent::__construct($data);
    }

    /**
     *Максимальное количество stream-соединений
     *
     * Generated from protobuf field <code>int32 limit = 1;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     *Максимальное количество stream-соединений
     *
     * Generated from protobuf field <code>int32 limit = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     *Названия stream-методов
     *
     * Generated from protobuf field <code>repeated string streams = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStreams()
    {
        return $this->streams;
    }

    /**
     *Названия stream-методов
     *
     * Generated from protobuf field <code>repeated string streams = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->streams = $arr;

        return $this;
    }

}

