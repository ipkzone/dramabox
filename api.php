<?php

class restAPI
{
    private const URL = "https://iddant.site/restAPI/";
    private const AUTH = "3203fccb29d361eac970918731d68255abc9c7907fba4b54f432743f754f62f3";
    private const LICENSIKEY = "public";

    public static function curl($url, $method, $postData = null, $headers = [])
    {
        $curl = curl_init();
        $curlOptions = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
        ];

        if ($method === 'POST' && $postData !== null) {
            $curlOptions[CURLOPT_POSTFIELDS] = $postData;
        }

        if (!empty($headers)) {
            $curlOptions[CURLOPT_HTTPHEADER] = $headers;
        }
        curl_setopt_array($curl, $curlOptions);
        $response = curl_exec($curl);
        return $response;
    }

    public static function request()
    {
        $headers = [
            "Accept: */*",
            "Authorization: Bearer ".self::AUTH,
            "Content-Type: application/json",
            "User-Agent: Thunder Client (https://www.thunderclient.com)",
            "X-License-Key: ".self::LICENSIKEY,
        ];
        return $headers;
    }

    public static function seach()
    {
        $body = json_encode([
          'type' => 'search',
          'keyword' => 'CEO',
        ]);
        $headers = self::request();
        $response = self::curl(self::URL, 'POST', $body, $headers);
        return $response;
    }

    public static function getVideo()
    {
        $body = json_encode([
            'type' => 'video',
            'requestID' => '41000119793'
        ]);
        $headers = self::request();
        $response = self::curl(self::URL, 'POST', $body, $headers);
        return $response;
    }
}

// function search untuk menemukan judul film yang akan kalian cari.
echo restAPI::seach();

// function getVideo untuk mengambil data path URL video all sudah otomatis bypass signature.
echo restAPI::getVideo();

