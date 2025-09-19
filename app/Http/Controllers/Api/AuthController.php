<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userLogin(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validated->fails()) {
            return response()->json(['responseStatus' => 422, 'responseMessage' => 'Validation Error', 'responseData' => $validated->errors()], 422);
        }

        $user = UserModel::where('username', $request->username)
            ->where('password', $request->password)
            ->first();


            

        if ($user) {
            return response()->json([
                'responseStatus'  => 200,
                'responseMessage' => 'User Found',
                'responseData'    => $user,
            ]);
        } else {
            return response()->json([
                'responseStatus'  => 404,
                'responseMessage' => 'User Not Found',
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
