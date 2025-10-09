<?php

namespace DazzaDev\DianXmlGenerator\Models;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class DocumentType extends BaseModel
{
    /**
     * Hash type
     */
    private string $hashType;

    /**
     * Code type
     */
    private string $codeType;

    /**
     * DocumentType constructor
     */
    public function __construct(array $data = [])
    {
        parent::initialize($data);

        $this->initializeAdditionalProperties($data);
    }

    /**
     * Initialize additional properties specific to DocumentType
     */
    protected function initializeAdditionalProperties(array $data): void
    {
        $this->setHashType($data['hash_type']);
        $this->setCodeType($data['code_type']);
    }

    /**
     * Get hash type
     */
    public function getHashType(): string
    {
        return $this->hashType;
    }

    /**
     * Set hash type
     */
    private function setHashType(string $hashType): void
    {
        $this->hashType = $hashType;
    }

    /**
     * Get code type
     */
    public function getCodeType(): string
    {
        return $this->codeType;
    }

    /**
     * Set code type
     */
    private function setCodeType(string $codeType): void
    {
        $this->codeType = $codeType;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return array_merge($this->getBaseArray(), [
            'hash_type' => $this->hashType,
            'code_type' => $this->codeType,
        ]);
    }
}
