<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use Socialite;
use Laravel\Socialite\Contracts\Provider;
use App\User;
use Auth;
 
class SocialAuthController extends Controller
{
    
    public function callback($provider)
    {
     
        try {
            $user = Socialite::driver($provider)->user();
            // $input['name'] = $user->getName();
            // $input['email'] = $user->getEmail();
            // $input['provider'] = $provider;
            // $input['provider_id'] = $user->getId();
          
            if($user->getEmail() == ''){
                return "Email was not found";
            }else{
                $user_d = User::where('email', $user->getEmail())->first();
                if(empty($user_d) == true || $user_d == '' || $user_d == NULL){

                    $userexp = explode(' ',$user->name);
                    $firstName = trim($userexp[0]);
                    $lastName = trim($userexp[1]);
                    return redirect("register")->with([
                        'firstName' => $firstName,
                        'lastName' => $lastName,
                        'email' => $user->getEmail()
                    ]);
                }else{
                    return "get user id and do login";
                }

                
            }

        } catch (Exception $e) {

            return redirect('auth/redirect/'.$provider);

        }
    
    }
 
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
 
    private function createOrGetUser(Provider $provider)
    {
        $providerUser = $provider->user();
        return $providerUser;
    }
 
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}