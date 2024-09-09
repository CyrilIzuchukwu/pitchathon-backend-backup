// <?php

// namespace App\Rules;

// use Illuminate\Contracts\Validation\Rule;
// use App\Models\Code;

// class ValidCode implements Rule
// {
//     public function passes($attribute, $value)
//     {
//         $code = Code::where('code', $value)->where('is_used', false)->first();
//         return !is_null($code);
//     }

//     public function message()
//     {
//         return 'The code is invalid or has already been used.';
//     }
// }
