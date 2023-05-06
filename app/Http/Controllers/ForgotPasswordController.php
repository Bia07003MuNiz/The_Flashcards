<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $credentials = $request->only('email');
        $user = \DB::table('users')->where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Não encontramos um usuário com este e-mail cadastrado.']);
        }

        $response = $this->broker()->sendResetLink(
            $credentials
        );

        return $response == Password::RESET_LINK_SENT
                    ? back()->with('success', 'E-mail enviado com sucesso!')
                    : back()->withErrors(['email' => trans($response)]);
    }
}
