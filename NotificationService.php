<?php 
require_once 'EmailService.php';
 class NotificationService{
    private $emailservice;
    public function __construct(EmailService $emailservice)
    {
        $this->emailservice = $emailservice; // Hardcoded intstant
    }
    public function notify($message)
    {
        $this->emailservice->send($message);
    }
 }
 $emailservice = new EmailService();
 $notification = new NotificationService($emailservice);
 $notification->notify("Welcome to the the php dependency injection");
?>