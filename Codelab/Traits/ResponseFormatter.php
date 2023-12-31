<?php

namespace Traits;

// DISIMULASIKAN INI TRAIT UNTUK FORMATTER 35ON RESPONSE
trait ResponseFormatter
{
    public function responseFormatter($code, $message, $data = null)
    {
        return json_encode([
            "code" => $code, 
            "message" => $message, 
            "data" => $data
        ]);
    }
}
