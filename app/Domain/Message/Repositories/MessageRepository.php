<?php

namespace App\Domain\Message\Repositories;

use App\Domain\Message\Models\Message;

class MessageRepository
{
    public function getAll()
    {
        return Message::all();
    }
}
