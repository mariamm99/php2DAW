<?php

declare(strict_types=1);

namespace Sokil\IsoCodes\Database;

use Sokil\IsoCodes\AbstractNotPartitionedDatabase;
use Sokil\IsoCodes\Database\Languages\Language;

/**
 * @method Language|null find(string $indexedFieldName, string $fieldValue)
 */
class Languages extends AbstractNotPartitionedDatabase implements LanguagesInterface
{
    /**
     * ISO Standard Number
     *
     * @psalm-pure
     */
    public static function getISONumber(): string
    {
        return '639-3';
    }

    /**
     * @param array<string, string> $entry
     */
    protected function arrayToEntry(array $entry): Language
    {
        return new Language(
            $this->translationDriver,
            $entry['name'],
            $entry['alpha_3'],
            $entry['scope'],
            $entry['type'],
            !empty($entry['inverted_name']) ? $entry['inverted_name'] : null,
            !empty($entry['alpha_2']) ? $entry['alpha_2'] : null
        );
    }

    /**
     * @return string[]
     */
    protected function getIndexDefinition(): array
    {
        return [
            'alpha_2',
            'alpha_3',
        ];
    }

    public function getByAlpha2(string $alpha2): ?Language
    {
        return $this->find('alpha_2', $alpha2);
    }

    public function getByAlpha3(string $alpha3): ?Language
    {
        return $this->find('alpha_3', $alpha3);
    }
}
