<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Todo;

/**
 */
class TasksClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/todo.Tasks/List',
        $argument,
        ['\Todo\TaskList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Todo\Text $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Add(\Todo\Text $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/todo.Tasks/Add',
        $argument,
        ['\Todo\Task', 'decode'],
        $metadata, $options);
    }

}
