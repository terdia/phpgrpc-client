<?php

require_once __DIR__ . '/vendor/autoload.php';

use Google\Protobuf\GPBEmpty;
use Grpc\ChannelCredentials;
use Todo\Task;
use Todo\TaskList;
use Todo\TasksClient;
use Todo\Text;

$client = new TasksClient('localhost:8888', [
    'credentials' => ChannelCredentials::createInsecure(),
]);

$new = $_GET['task'] ?? $argv[1] ?? null;

if (null !== $new) {
    /** @var Task $task */
    [$task, $status] = $client->Add((new Text())->setText($new))->wait();
    if ($status->code !== Grpc\STATUS_OK) {
        echo "Call did not complete successfully. Status object:\n";
        exit(1);
    }
    echo "Added task: " . $task->getText();
} else {
    /** @var TaskList $reply */
    [$reply, $status] = $client->List(new GPBEmpty())->wait();

    if ($status->code !== Grpc\STATUS_OK) {
        echo "Call did not complete successfully. Status object:\n";
        exit(1);
    }

    /** @var Task $task */
    foreach ($reply->getTasks() as $task) {
        if ($task->getDone()) {
            echo "✅";
        } else {
            echo "❌";
        }

        echo $task->getText() . " \n";
    }
}


