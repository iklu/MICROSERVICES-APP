# Start server
$ rabbitmq-server

# Check status
$ rabbitmqctl status

# List queues
$ rabbitmqctl list_queue

# Check if messages unacknowledged turned on or off
$ rabbitmqctl list_queues name messages_ready messages_unacknowledged

# List all available exchanges
$ rabbitmqctl list_exchanges

# List all bindings
$ rabbitmqctl list_bindings

# Delete all queues in one go
$ rabbitmqctl stop_app
$ rabbitmqctl reset
$ rabbitmqctl start_app

RabbitMQ direct exchange example with symfony including 1 Producer & 1 Exchange & 1 Queue & N Worker & 1 Consumer
php bin/console rabbitmq:consume order_create

RabbitMQ direct example with symfony including 1 Producer & 1 Exchange & 2 Queue & N Worker & 2 Consumer
php bin/console rabbitmq:consumer -m 100 order_create_bmw
php bin/console rabbitmq:consumer -m 100 order_create_audi_mercedes