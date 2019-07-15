<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class Kuddencheck implements Rule
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
        $file = $filename = storage_path('/KDNR.csv');
        $lines       = file($file);

        $model = collect($lines)->map(function ($item){
            return trim(str_replace(array("\n", "\r"), '', $item));
        })->first(function ($item) use ($value){
            return $value == $item;
        });
        return boolval($model);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid kuddennumber!';
    }
}
