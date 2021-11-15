<?php

namespace App\Entities\CustomFields;

use App\Contracts\IFieldValueHolder;
use App\Entities\CustomFields\ValueHolders\MultiEnumValueHolder;

class MultiEnumField extends CustomField
{
        protected function makeValueHolder(string $field_type, mixed $value): IFieldValueHolder {
                $value_holder = new MultiEnumValueHolder('EnumBundleElement');
                $value_holder->setValue($value);

                return $value_holder;
        }
}