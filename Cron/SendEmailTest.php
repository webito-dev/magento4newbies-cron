<?php

namespace Webito\CronTest\Cron;

use Magento\Framework\Mail\MessageInterfaceFactory;
use Magento\Framework\Mail\TransportInterfaceFactory;

class SendEmailTest
{
    protected MessageInterfaceFactory $messageInterfaceFactory;
    protected TransportInterfaceFactory $transportInterfaceFactory;

    public function __construct(
        MessageInterfaceFactory $messageInterfaceFactory,
        TransportInterfaceFactory $transportInterfaceFactory
    ) {
        $this->messageInterfaceFactory = $messageInterfaceFactory;
        $this->transportInterfaceFactory = $transportInterfaceFactory;
    }

    public function execute()
    {
        $message = $this->messageInterfaceFactory->create();
        $message->setFrom('info@webito.it', 'Store');
        $message->addTo('info@webito.it', "Webito");
        $message->setSubject("email di test");
        $message->setBody(
            "Ciao,\n" .
            "Saluti,\nStore"
        );

        $this->transportInterfaceFactory->create(['message' => $message])->sendMessage();
    }
}
