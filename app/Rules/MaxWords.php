<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxWords implements Rule
{
    protected $maxWords;

    public function __construct($maxWords)
    {
        $this->maxWords = $maxWords;
    }

    public function passes($attribute, $value)
    {
        $wordCount = str_word_count($value);
        return $wordCount <= $this->maxWords;
    }

    public function message()
    {
        return "The :attribute field must not exceed {$this->maxWords} words.";
    }
}
