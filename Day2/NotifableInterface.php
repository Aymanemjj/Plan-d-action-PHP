<?php 

interface NotifableInterface{
    public function sendNotification();
    public function send(string $message);
}