<?php

namespace App\Domain\Message\DTO;

class StoreMessageDTO
{
    private string $client_name;
    private string $client_email;
    private string $message_title;
    private string $message_description;


    public static function fromArray(array $data)
    {
        $dto = new self();
        $dto->setClientName($data['client_name']);
        $dto->setClientEmail($data['client_email']);
        $dto->setMessageTitle($data['message_title']);
        $dto->setMessageDescription($data['message_description']);
        return $dto;
    }

    /**
     * @return string
     */
    public function getClientName(): string
    {
        return $this->client_name;
    }

    /**
     * @param string $client_name
     */
    public function setClientName(string $client_name): void
    {
        $this->client_name = $client_name;
    }

    /**
     * @return string
     */
    public function getClientEmail(): string
    {
        return $this->client_email;
    }

    /**
     * @param string $client_email
     */
    public function setClientEmail(string $client_email): void
    {
        $this->client_email = $client_email;
    }

    /**
     * @return string
     */
    public function getMessageTitle(): string
    {
        return $this->message_title;
    }

    /**
     * @param string $message_title
     */
    public function setMessageTitle(string $message_title): void
    {
        $this->message_title = $message_title;
    }

    /**
     * @return string
     */
    public function getMessageDescription(): string
    {
        return $this->message_description;
    }

    /**
     * @param string $message_description
     */
    public function setMessageDescription(string $message_description): void
    {
        $this->message_description = $message_description;
    }

}
