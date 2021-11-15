<?php

namespace App\Entities\CustomFields;

use App\Contracts\IFieldValueHolder;
use App\Entities\CustomFields\ValueHolders\SimpleTextValueHolder;

class SimpleTextField extends CustomField
{
        protected function makeValueHolder(string $field_type, mixed $value): IFieldValueHolder {
                $simple_text_value_holder = new SimpleTextValueHolder($field_type);
                $simple_text_value_holder->setValue($value);
                return $simple_text_value_holder;
        }
}