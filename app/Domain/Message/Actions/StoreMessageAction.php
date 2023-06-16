<?php

namespace App\Domain\Message\Actions;

use App\Domain\Message\DTO\StoreMessageDTO;
use App\Domain\Message\Models\Message;
use Illuminate\Support\Facades\DB;

class StoreMessageAction
{
    public function execute(StoreMessageDTO $messageDTO)
    {
        DB::beginTransaction();
        try {
            $messages = new Message();
            $messages->client_name = $messageDTO->getClientName();
            $messages->client_email = $messageDTO->getClientEmail();
            $messages->message_title = $messageDTO->getMessageTitle();
            $messages->message_description = $messageDTO->getMessageDescription();
            $messages->save();
        }catch (\Exception $exception)
        {
            DB::rollBack();
            throw $exception;
        }
        DB::commit();
        return $messages;
    }
}
