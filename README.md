# 🚀 API SERVER DRAMABOX

Api server sederhana untuk mengambil data scraper video dari dramabox
mungkin akan berguna bagi kalian.

## 🌟 Fitur

- ✅ Fitur 1: Searching Video With Title
- ✅ Fitur 2: Scrapping Video By Title
- ✅ Fitur 3: Auto Generate Signature & Full bypass

## Contoh Web Target

<center><img src="dm.png" alt="tools"></center>

## 📦 Example Api Server cURL

Langkah-langkah untuk menginstal dan menjalankan proyek ini di mesin lokal Anda.
Atau mau di server kalian juga boleh hhe.

1. Contoh function search: `getting title video`
```php
// function search untuk menemukan judul film yang akan kalian cari.
echo restAPI::seach();
```


2. Contoh function getVideo: `getting all path video`
```php
// function getVideo untuk mengambil data path URL video all sudah otomatis bypass signature.
echo restAPI::getVideo();
```
