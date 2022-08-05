<?php

namespace App\Actions\Fortify;

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
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $input['nim'] = explode('@', $input['email'])[0];
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:27', 'regex:/\d{9}@student.uksw.edu/', Rule::unique(User::class),],
            'nim' => ['required', Rule::unique(User::class),],
            'password' => $this->passwordRules(),
        ], ['regex' => 'The :attribute must use student email'])->validate();
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'nim' => $input['nim'],
        ]);
    }
}
