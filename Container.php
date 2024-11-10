<?php
require_once 'EmailService.php';
class Container
{
    private $bindings = [];

    public function bind($abstract, $concrete)
    {
        $this->bindings[$abstract] = $concrete;
    }

    public function make($abstract)
    {
        if (isset($this->bindings[$abstract])) {
            return call_user_func($this->bindings[$abstract]);
        }
        throw new Exception("No binding found for {$abstract}");
    }
}

// Usage
$container = new Container();
$container->bind(EmailService::class, function () {
    return new EmailService();
});

$emailService = $container->make(EmailService::class);
$emailService->send("Hello, Dependency Injection Container!");

?>