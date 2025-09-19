<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function loginaction(Request $request)
    {

  
        $api      = new AuthController();
        $response = $api->userLogin(request());
         

        $data = $response->getData(true);

        if ($data['responseStatus'] == 200 && $data['responseData']['user_type'] == 1) {
            return view('admin.adminDashboard');
        } elseif($data['responseStatus'] == 200 && $data['responseData']['user_type'] == 1){
            return view('students.studentDashboard');

        }else {
            return redirect()->back()->with('error', 'Authentication Failed');
        }
    }

}
