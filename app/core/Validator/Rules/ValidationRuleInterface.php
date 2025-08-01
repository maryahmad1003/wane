<?php

namespace mary\Core\Validator\Rules;

interface ValidationRuleInterface
{
    public function validate(string $field, $value, array &$errors): void;
}
