<?php

namespace App\Traits;

trait ApiResponse
{

    /**
     * Generate API response
     */
    
    public function generateResponse($message = '', $data = [], $status = 'success', $code = 200, $errors = [])
    {
        $obj['status'] = $status;
        $obj['code'] = $code;
        $obj['message'] = $message;
        $obj['data'] = $data;
        $obj['errors'] = $errors;

        return response()->json($obj, $code);
    }

    /**
     * Generate validation failed response
     */
    
    public function validationFailed($validator)
    {
        return $this->generateResponse('validation failed', [], 'failed', 422, $validator->messages()->toArray());
    }
}
