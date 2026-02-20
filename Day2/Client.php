<?php

class Client implements PayableInterface, NotifableInterface{

    public function pay(){
        return 'payed';
    }

    public function reimburse()
    {
        return 'reimbursed';
    }

    public function sendNotification()
    {
        return 'sent';
    }
}