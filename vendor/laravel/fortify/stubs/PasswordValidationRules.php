<?php

namespace App\Actions\Fortify;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Validation\Rules\Password;
=======
use Laravel\Fortify\Rules\Password;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use Laravel\Fortify\Rules\Password;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function passwordRules(): array
    {
        return ['required', 'string', Password::default(), 'confirmed'];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        return ['required', 'string', new Password, 'confirmed'];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
