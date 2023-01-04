<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidIC implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //

//        if (!empty($value)){
//            $value = '/^[0-9]{6}-[0-9]{2}-[0-9]{4}$/';
//        }

        return preg_match('/^[0-9]{6}-[0-9]{2}-[0-9]{4}$/', $value);

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The IC No. format is incorrect.';
    }
}
