# 🚀 API SERVER DRAMABOX

Api server sederhana untuk mengambil data scraper video dari dramabox
mungkin akan berguna bagi kalian.

## 🌟 Fitur

- ✅ Fitur 1: Searching Video With Page
- ✅ Fitur 2: Scrapping Video By Page
- ✅ Fitur 3: Auto Scrapping Link Video Dramabox

## Contoh Web Target

<center><img src="dm.png" alt="tools"></center>

## 📦 Example Api Server cURL

Langkah-langkah untuk menginstal dan menjalankan proyek ini di mesin lokal Anda.

1. Contoh Code PHP: `getVideo.php`
```php
<?php
$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://serveripkzone.site/dramabox/?page=".$page."",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Accept: */*",
    "Content-Type: application/json",
    "User-Agent: Api Server Ipkzone (https://ipkzone.my.id)"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
```


2. Contoh Code PHP: `getLinkVideo.php`
```php
<?php
$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://serveripkzone.site/dramabox/video.php?id=".$id."&idName=".$idName."",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Accept: */*",
    "Content-Type: application/json",
    "User-Agent: Api Server Ipkzone (https://ipkzone.my.id)"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
```
