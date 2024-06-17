<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\ResetsUserPasswords;
<<<<<<< HEAD
use Illuminate\Support\Facades\Session;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class ResetUserPassword implements ResetsUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and reset the user's forgotten password.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function reset($user, array $input)
    {
        Validator::make($input, [
            'password' => $this->passwordRules(),
        ])->validate();

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
<<<<<<< HEAD

        // Set success message in session
        Session::flash('reset_success', 'Password successfully reset!');
    }
}

=======
    }
}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
