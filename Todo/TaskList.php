<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: todo.proto

namespace Todo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>todo.TaskList</code>
 */
class TaskList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .todo.Task tasks = 1;</code>
     */
    private $tasks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Todo\Task[]|\Google\Protobuf\Internal\RepeatedField $tasks
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Todo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .todo.Task tasks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Generated from protobuf field <code>repeated .todo.Task tasks = 1;</code>
     * @param \Todo\Task[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTasks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Todo\Task::class);
        $this->tasks = $arr;

        return $this;
    }

}

