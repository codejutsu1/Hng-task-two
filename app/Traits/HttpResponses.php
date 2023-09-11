<?php

namespace App\Traits;

trait HttpResponses 
{
    protected function success($data, $message=null, $code=200)
    {
        return response()->json([
            "message" => "Request was successful.",
            "data" => $data,
            "status_code" => $code,
        ], $code);
    }

    protected function error($data, $message=null, $code)
    {
        return response()->json([
            "message" => "Error has occurred.",
            "data" => $data,
            "status_code"=> $code,
        ], $code);
    }
}