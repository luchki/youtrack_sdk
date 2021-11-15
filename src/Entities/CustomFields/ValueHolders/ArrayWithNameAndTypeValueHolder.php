<?php

namespace App\Entities\CustomFields\ValueHolders;

use App\Exceptions\InvalidValueException;

class ArrayWithNameAndTypeValueHolder extends AbstractValueHolder
{

        public function getValue(): string|int {
                return $this->value;
        }


        public function getValueForApi(): array {
                return [
                        'name' => $this->value,
                        '$type' => $this->getType(),
                ];
        }

        public function setValue(mixed $value): void {
                if (!is_string($value) && !is_int($value)) {
                        throw new InvalidValueException('String');
                }
                $this->value = $value;
        }
}