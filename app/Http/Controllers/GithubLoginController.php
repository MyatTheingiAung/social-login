<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class GithubLoginController extends Controller
{
    /**
     * Redirect the user to the Github authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from Github.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function handleGithubCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();

            $user = User::where('github_id', $githubUser->id)->first();
            if(! $user){
                $user = User::create([
                    'name' => $githubUser->nickname,
                    'email' => $githubUser->email,
                    'github_id'=> $githubUser->id,
                    'photo' => $githubUser->avatar,
                ]);
            }
            Auth::login($user);

            return redirect()->route('dashboard');

        } catch (Exception $e) {
            throw $e;
        }
    }
}
