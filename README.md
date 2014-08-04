php_queue_logging
=================

This is the centralized logging system for php using rabbitmq;

The purpose of this project is not to delay the php process for logging.

If a php process it self is logging the details (to DB/or a text file), definetly it will take time to do that.

So, as we dont need acknowledgement for any logging, The process can throw the log message in to queue and can go ahead with its work.

on the other end of the queue a worker process(of any language like php, java, erlang etc,.) will pick the message and puts it in to DB.

this process flow allows the project not to wait for logging.

Note: this will not be suitable for things that needs acknowledgement for further going.

For this all you need id pecl amqp library for php.
