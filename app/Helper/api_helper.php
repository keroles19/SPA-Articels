<?php


if(!function_exists('apiResponse')){
    function apiResponse($data=null,$status=200,$message=null): \Illuminate\Http\JsonResponse
    {

        return response()->json([
           'data'=>$data,
           'status'=>$status,
           'message'=>$message
        ]);

    }
}
