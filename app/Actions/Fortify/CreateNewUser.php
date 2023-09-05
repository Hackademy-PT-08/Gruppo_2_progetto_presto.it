<?php

namespace App\Actions\Fortify;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname'=> ['required', 'string', 'max:255'],
            'birthday'=> ['required', 'date', 
            function ($attribute, $value, $fail) {
                $birthdate = Carbon::createFromFormat('Y-m-d', $value);
                $age = $birthdate->diffInYears(Carbon::now());
    
                if ($age < 18) {
                    $fail('Devi avere almeno 18 anni per registrarti.');
                }
            },
        ],
            'phone_number'=>['required', 'string', 'max:10', 'min:10', Rule::unique(User::class),],
            'address'=> ['required', 'string', 'max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'surname'=> $input['surname'],
            'city'=> $input['city'],
            'phone_number'=>$input['phone_number'],
            'address'=> $input['address'],
            'birthday'=>$input['birthday']
        ]);
    }
}
