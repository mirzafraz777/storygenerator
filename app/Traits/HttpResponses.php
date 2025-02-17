<?php

namespace App\Traits;

trait HttpResponses
{
    protected function success($data, $message = null, $code = 200, $model = 'data')
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            $model => [
                'children'=>$data
            ]
        ], $code);
    }

    protected function error($data, $message = null, $code)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
