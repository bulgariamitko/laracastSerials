<?php 

interface Logger {
	public function execute($message);
}

Class LogToFile implements Logger {
	public function execute($message)
	{
		var_dump('log message to a file: ' . $message);
	}
}

Class LogToDatabase implements Logger {
	public function execute($message)
	{
		var_dump('log message to a database: ' . $message);
	}
}


Class UsersController {
	protected $logger;

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = 'JohnDoe';

		// log this information
		$this->logger->execute($user);
	}
}

$logger = new UsersController(new LogToDatabase);

$logger->show();