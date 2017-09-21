<?php
namespace Models;

Class normilizeJson {
    
    public function normalizeJson($jsonObject)
    {
        return preg_replace_callback('~"([\[{].*?[}\]])"~s', function ($match) {
            return preg_replace('~\s*"\s*~', "\"", $match[1]);
        }, $jsonObject);
    }


    static function normalizeJsonErrorResponse($responseBody,$errorTemplate = false)
    {
        if(!empty($responseBody) && !is_array($responseBody))
        {
            $responseBody = str_replace('<![CDATA[','',$responseBody);
            $responseBody = str_replace(']]>','',$responseBody);

            libxml_use_internal_errors(true);
            $xml =  simplexml_load_string($responseBody);
            if($xml)
            {
                $responseBody = json_decode(json_encode((array) $xml), 1);
            } else if($errorTemplate)
            {
                $responseBody  = 'Wrong params.';
            }
        }

        return $responseBody;
    }

}
