<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Checkquantity implements Rule
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
        $result = false;
        foreach($value as $val) {
            foreach ($val as $v) {
                if ($v) {
                    $result = true;
                    break;
                }
            }
        }
        return $result;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('app.empty-quantity');
    }
}
