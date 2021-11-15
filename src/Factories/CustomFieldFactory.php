<?php

namespace App\Factories;

use App\Contracts\ICustomField;
use App\Entities\CustomFields\EnumField;
use App\Entities\CustomFields\MultiEnumField;
use App\Entities\CustomFields\SimpleTextField;
use App\Entities\CustomFields\StateField;
use App\Entities\CustomFields\TextField;
use App\Entities\CustomFields\UserField;

class CustomFieldFactory
{
        public static function makeFieldFromArray(
                string $name,
                string $type,
                mixed  $value
        ): ICustomField {
                $field = match ($type) {
                        'SimpleIssueCustomField' => new SimpleTextField($name, $type, $value),
                        'SingleEnumIssueCustomField' => new EnumField($name, $type, $value),
                        'StateIssueCustomField' => new StateField($name, $type, $value),
                        'MultiEnumIssueCustomField' => new MultiEnumField($name, $type, $value),
                        'SingleUserIssueCustomField' => new UserField($name, $type, $value),
                        'TextIssueCustomField' => new TextField($name, $type, $value),
                        default => throw new \Exception("I don't know about type {$type}"),
                };

                return $field;
        }
}