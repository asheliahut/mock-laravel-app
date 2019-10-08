# Mock Laravel App

Have you ever wanted to use updated 5.6+ laravel components in your Slim or other php framework applications? Now you can just inject this mock container in and you will be able to do everything you want.

```
$container['queue'] = static function (ContainerInterface $c): Queue {
    $queue = new Queue();

    // Library is broken - cast some magic to get redis to work
    if ('redis' === $c['settings']['queue']['driver']) {
        $connector = static function () use ($c) {
            $app = new \Asheliahut\MockLaravelApp();
            $redisManager = new Redis($app,'predis', [
                'cluster' => false,
                'default' => $c['settings']['queue'],
            ]);

            return new RedisConnector($redisManager);
        };

        $queue->getQueueManager()->addConnector('redis', $connector);
    }

    $queue->addConnection($c['settings']['queue']);
    $queue->setAsGlobal();

    return $queue;
};
```
