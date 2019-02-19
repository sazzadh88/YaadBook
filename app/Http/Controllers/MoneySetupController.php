<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\User;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;
// use Illuminate\Support\Facades\Request;

class MoneySetupController extends Controller
{
    public function payWithStripe(Request $request)
    {
        // $request->session()->flush();
        return view('Payment');
    }
    public function postPaymentWithStripe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required'
            // 'amount' => 'required'
        ]);
        $input = $request->all();
        if ($validator->passes()) {
            $input = array_except($input, array('_token'));
            $stripe = Stripe::make(env('STRIPE_SECRET'));
            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $request->get('card_no'),
                        'exp_month' => $request->get('ccExpiryMonth'),
                        'exp_year' => $request->get('ccExpiryYear'),
                        'cvc' => $request->get('cvvNumber'),
                    ],
                ]);
                // $token = $stripe->tokens()->create([
                //     'card' => [
                //         'number' => '4242424242424242',
                //         'exp_month' => 10,
                //         'cvc' => 314,
                //         'exp_year' => 2020,
                //     ],
                // ]);
                if (!isset($token['id'])) {
                    return redirect()->route('addmoney.paywithstripe');
                }
                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'USD',
                    'amount' => 10.49,
                    'description' => 'Add in wallet',
                ]);

                if ($charge['status'] == 'succeeded') {
                    /**
                     * Write Here Your Database insert logic.
                     */
                    echo "<pre>";
                    print_r($charge);
                    exit();
                    return redirect()->route('addmoney.paywithstripe');
                } else {
                    return redirect()->route('addmoney.paywithstripe')->withError($e->getMessage());
                }
            } catch (Exception $e) {
                
                return redirect()->route('addmoney.paywithstripe')->withError($e->getMessage());
            } catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {
                return redirect()->route('addmoney.paywithstripe')->withError($e->getMessage());
            } catch (\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                return redirect()->route('addmoney.paywithstripe')->withError($e->getMessage());
            }
        }
    }
}