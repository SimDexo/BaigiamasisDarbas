<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PersonalCodeRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public $message = 'Personal code is invalid.';

    public function passes($attribute, $value): bool
    {
        if (preg_match('/^\d{11}$/', $value) === 1) {
            return true;
        } else {
            $this->message = 'Personal code is invalid.';
            return false;
        }
    }


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'Personal code invalid.';
    }
}
