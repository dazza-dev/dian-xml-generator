<?php

namespace DazzaDev\DianXmlGenerator\Models;

class Language
{
    /**
     * Language code
     */
    private string $code;

    /**
     * Language name
     */
    private string $name;

    /**
     * Language constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize language data
     */
    private function initialize(array $data): void
    {
        if (empty($data)) {
            return;
        }

        $this->setCode($data['code']);
        $this->setName($data['name']);
    }

    /**
     * Get language code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set language code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Get language name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set language name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'code' => $this->getCode(),
            'name' => $this->getName(),
        ];
    }
}
