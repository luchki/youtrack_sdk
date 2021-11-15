<?php

namespace App\Entities\CustomFields\ValueHolders;

use App\Exceptions\InvalidValueException;

class SimpleTextValueHolder extends AbstractValueHolder
{

        public function setValue(mixed $value): void {
                if (!is_string($value) && !is_int($value)) {
                        throw new InvalidValueException('String');
                }
                $this->value = $value;
        }

        public function getValue(): int|string {
                return $this->value;
        }

        public function getValueForApi(): int|string {
                return $this->value;
        }
}