<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: todo.proto

namespace Todo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>todo.Task</code>
 */
class Task extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';
    /**
     * Generated from protobuf field <code>bool done = 2;</code>
     */
    protected $done = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *     @type bool $done
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Todo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool done = 2;</code>
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Generated from protobuf field <code>bool done = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDone($var)
    {
        GPBUtil::checkBool($var);
        $this->done = $var;

        return $this;
    }

}

