<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function formatResponse($status,$message=null,$data=[],$code=200)
    {
        return [
            'status'=>$status,
            'message'=>$message,
            'data'=>$data,
            'code'=>$code
        ];
    }
    public function sendError($error, $errorMessages = [], $code = 404)
    {
    	$response = [
            'status' => 'error',
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
}
