<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Employee;
use Validator;

class AuthController extends Controller
{
    public $successStatus = 200;

    // register
    public function register(Request $request)
    {

        $v = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string|unique:employees',
            'password' => 'required|confirmed|min:6'
        ]);

        if ($v->fails()) {
            return response()->json([
                "status" => "error",
                "errors" => $v->errors()
            ], 422);
        }

        $employee = new Employee([
            "name" => $request->name,
            "phone" => $request->phone,
            "password" => bcrypt($request->password)
        ]);
        $employee->save();
        return response()->json(["message" => "Successfully created employee."], 200);

    }

    // login employee & create token
    public function login(Request $request)
    { 
        $request->validate([
            'phone' => 'required',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        
        $auth_user = Employee::where('phone',$request->phone)->first();
        // $auth_user->password=bcrypt('123456789');
        // $auth_user->save();
        if(isset($auth_user)&&\Hash::check($request->password, $auth_user->password)){
            \Auth::loginUsingId($auth_user->id);
            $tokenResult = $auth_user->createToken('MyApp');
            $success['token'] =  $tokenResult->accessToken;
            $success['user'] =  $auth_user;
            return response()->json(['success' => $success], $this->successStatus);
        }

        return response()->json(["error" => "Your Phone/Password is wrong"], 401);
    }

    // get authenticated employee
    public function user(Request $request)
    {
        $auth_user=Auth::guard('employee')->user();
        $success['user'] =  $auth_user;
        return response()->json(['success' => $success ],$this->successStatus);
    }

    // logout employee form application
    public function logout()
    {
        Auth::guard('employee')->user()->tokens->each(function($token, $key) {
            $token->delete();
        });
        // $employee = Auth::guard('employee')->user();
        // $employee->token()->delete();
        return response()->json(['success' => 'done'], 200);
    }

}
