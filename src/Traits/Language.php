<?php

namespace DazzaDev\DianXmlGenerator\Traits;

use DazzaDev\DianXmlGenerator\DataLoader;
use DazzaDev\DianXmlGenerator\Models\Language as LanguageModel;

trait Language
{
    /**
     * Language
     */
    private ?LanguageModel $language = null;

    /**
     * Get language
     */
    public function getLanguage(): ?LanguageModel
    {
        return $this->language;
    }

    /**
     * Set language
     */
    public function setLanguage(string $languageCode): void
    {
        $language = (new DataLoader('languages'))->getByCode($languageCode);

        $this->language = new LanguageModel($language);
    }
}
