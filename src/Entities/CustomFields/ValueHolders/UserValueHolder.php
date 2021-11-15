<?php

namespace App\Entities\CustomFields\ValueHolders;

use App\Exceptions\InvalidValueException;

class UserValueHolder extends AbstractValueHolder
{

        public function setValue(mixed $value): void {
                if (!is_array($value)) {
                        throw new InvalidValueException('Array');
                }

                if (!array_key_exists('name', $value) || !array_key_exists('login', $value)) {
                        throw new InvalidValueException("Array<name,login>");
                }

                $this->value = $value;
        }

        public function getValue(): array {
                return $this->value;
        }

        public function getValueForApi(): array {
                return [
                        'login' => $this->value['login'],
                        'name' => $this->value['name'],
                        '$type' => $this->getType(),
                ];
        }
}