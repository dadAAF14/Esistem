# 🧠 Expert System Diagnosis (PHP Version)

Sistem pakar berbasis **PHP + HTML** untuk mendiagnosis tingkat pemahaman awal mahasiswa terhadap **konsep dan mekanisme kerja sistem pakar**.

## 🚀 Cara Upload ke Hosting (cPanel)
1. Kompres folder `expert-system-php` menjadi `.zip`
2. Masuk ke **File Manager → public_html**
3. Upload file `.zip` dan ekstrak di dalam `public_html`
4. Akses melalui browser:
   https://namadomainkamu.com/

## 📋 Fitur
- Metode inferensi **Forward Chaining**
- Skor pemahaman otomatis (%)
- Penjelasan hasil diagnosis (explanation facility)
- Antarmuka sederhana dan responsif

## 📈 Skema Penilaian
| Jawaban | Nilai |
|----------|--------|
| 4 "ya"   | 100% (Pemahaman baik) |
| 3 "ya"   | 75% (Pemahaman cukup) |
| 2 "ya"   | 50% (Perlu penguatan) |
| 1 atau 0 "ya" | <50% (Perlu bimbingan) |
