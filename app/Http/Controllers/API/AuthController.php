<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use Carbon\Carbon;

class AuthController extends BaseController
{

     public function signup(Request $request) {
         $validator = Validator::make($request->all(), [
             'name' => 'required',
             'email' => 'required|email|unique:users',
             'password' => 'required',
             'c_password' => 'required|same:password',
         ]);

         if($validator->fails()){
             return $this->sendError('Validation Error.', $validator->errors());
         }

         $user = new User([
             'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt($request->password)
         ]);
         $user->save();


         return $this->sendResponse($user, 'User register successfully.');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
        return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        $token->save();

        // dd($token);

        $success['token_type'] =  'Bearer';
        $success['access_token'] =  $tokenResult->accessToken;
        $success['expires_at'] =  Carbon::parse(
            $tokenResult->token->expires_at
        )->toDateTimeString();

        return $this->sendResponse($success, 'User login successfully.');
    }

    public function logout(Request $request) {
        $request->user()->token()->revoke();
        return $this->sendResponse('Successfully logged out');
    }

    public function user(Request $request) {
        return $this->sendResponse($request->user(), 'User Profile');
    }
    public function broaduser(Request $request) {
        return $this->sendResponse($request->user(), 'successfully');
    }

    public function daftar(Request $request){
        $update = User::find($request->user()->id);
        $update->name = $request->name;
        $update->phone = $request->phone;
        $update->save();
        return response()->json($update, 200);
    }
}
