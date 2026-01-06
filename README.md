# 🚀 Dramabox API Server

API server sederhana untuk mengambil data **video & episode** dari hasil scraping Dramabox.  
Proyek ini dibuat untuk keperluan **eksperimen, pembelajaran, dan pengembangan aplikasi**.

> ⚠️ **Catatan:** Project ini menggunakan sistem **License Key** demi keamanan.

---

## ✨ Fitur Utama

- 🔍 **Search Video**
- 📊 **Top Popular Rank**
- 🆕 **Latest Update Video**
- 🎬 **Daftar Episode Lengkap**
- 🔐 **License Key Protection**

---

## 🌐 Contoh Web Target

<p align="center">
  <img src="dm.png" alt="Dramabox Web" width="80%">
</p>

---

## 🔍 Example Search

<p align="center">
  <img src="search.png" alt="Search Video" width="80%">
</p>

---

## 📈 Example Top Rank Film

<p align="center">
  <img src="range.png" alt="Top Rank" width="80%">
</p>

---

## 🆕 Example Latest Update

<p align="center">
  <img src="latest.png" alt="Latest Update" width="80%">
</p>

---

## 📦 API Endpoint Examples (cURL)
```php
API_TOKEN  : 3203fccb29d361eac970918731d68255abc9c7907fba4b54f432743f754f62f3
LICENSE_KEY: AAVB-TW33-6M40-JOLQ

```

### 🔍 Search Video
```bash
curl -X GET "https://zmailx.online/dracin/search/?keyword=sulih suara" \
 -H "Authorization: Bearer YOUR_API_TOKEN" \
 -H "X-License-Key: YOUR_LICENSE_KEY"
```

### 📊 Get Top Popular Rank Video
```bash
curl -X GET "https://zmailx.online/dracin/rank/?type=1" \
 -H "Authorization: Bearer YOUR_API_TOKEN" \
 -H "X-License-Key: YOUR_LICENSE_KEY"
```

### 🆕 Get Latest Video
```bash
curl -X GET "https://zmailx.online/dracin/latest" \
 -H "Authorization: Bearer YOUR_API_TOKEN" \
 -H "X-License-Key: YOUR_LICENSE_KEY"
```

### 🎬 Get All Episode Video
```bash
curl -X GET "https://zmailx.online/dracin/{bookId}/episode" \
 -H "Authorization: Bearer YOUR_API_TOKEN" \
 -H "X-License-Key: YOUR_LICENSE_KEY"
```

### 🔐 License System
- Script tidak dapat dijalankan tanpa License Key
- License Key bersifat private & terikat user
- Untuk mendapatkan License Key, silakan hubungi creator
(Activation via donation)

###  🚀 Pengembangan

Silakan:
- Fork 🍴
- Modifikasi ✍️
- Kembangkan sesuai kebutuhan 🤝<br>
Jika API ini bermanfaat, jangan lupa ⭐ Star & Follow GitHub creator-nya 😄

### ⚠️ Disclaimer
Project ini dibuat untuk tujuan edukasi & eksperimen.
Segala bentuk penyalahgunaan berada di luar tanggung jawab developer.


Silahkan kembangkan lagi sesuka kalian.<br>
Jika berguna api server nya silahkan follow akun github nya ya wkwkwk.

# Note
The script runs with the license key,
if you don't have a license key then you can't run it,
to get a license key you have to ask the creator for its activation for a donation of course,
This script blocks multiple user logins so that the script remains safe and secure.

Regards,
**Iddant ID**

