<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Diagnosis Pemahaman Awal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Diagnosis Pemahaman Awal Mahasiswa</h1>
    <form method="post" action="">
        <label>1. Apakah Anda tahu apa itu sistem pakar?</label>
        <select name="pengertian">
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>

        <label>2. Apakah Anda tahu komponen utama sistem pakar?</label>
        <select name="komponen">
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>

        <label>3. Apakah Anda tahu bagaimana sistem pakar bekerja (inferensi)?</label>
        <select name="mekanisme">
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>

        <label>4. Apakah Anda bisa menyebutkan contoh penerapan sistem pakar?</label>
        <select name="aplikasi">
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>

        <button type="submit" name="submit">Lihat Hasil Diagnosis</button>
    </form>

<?php
if (isset($_POST['submit'])) {
    $pengertian = $_POST['pengertian'];
    $komponen = $_POST['komponen'];
    $mekanisme = $_POST['mekanisme'];
    $aplikasi = $_POST['aplikasi'];

    // Hitung skor pemahaman (25 poin per jawaban 'ya')
    $totalPertanyaan = 4;
    $totalYa = 0;
    if ($pengertian == "ya") $totalYa++;
    if ($komponen == "ya") $totalYa++;
    if ($mekanisme == "ya") $totalYa++;
    if ($aplikasi == "ya") $totalYa++;
    $score = ($totalYa / $totalPertanyaan) * 100;

    // Inferensi (Forward Chaining)
    if ($pengertian == "tidak") {
        $diagnosis = "Kesulitan pada pengertian dasar sistem pakar.";
        $explanation = "Anda belum memahami definisi dasar sistem pakar.";
    } elseif ($pengertian == "ya" && $komponen == "tidak") {
        $diagnosis = "Kesulitan pada struktur atau komponen sistem pakar.";
        $explanation = "Anda mengetahui pengertian sistem pakar, namun belum memahami komponennya seperti knowledge base dan inference engine.";
    } elseif ($pengertian == "ya" && $komponen == "ya" && $mekanisme == "tidak") {
        $diagnosis = "Kesulitan pada mekanisme kerja atau inferensi sistem pakar.";
        $explanation = "Anda memahami konsep dan komponen, tetapi belum memahami bagaimana sistem menarik kesimpulan melalui proses inferensi.";
    } elseif ($pengertian == "ya" && $komponen == "ya" && $mekanisme == "ya" && $aplikasi == "tidak") {
        $diagnosis = "Kesulitan pada penerapan konsep sistem pakar di dunia nyata.";
        $explanation = "Anda memahami teori, namun belum dapat mengaitkan dengan aplikasi nyata seperti diagnosa penyakit atau sistem rekomendasi.";
    } else {
        $diagnosis = "Pemahaman Anda terhadap konsep dan mekanisme sistem pakar sudah baik.";
        $explanation = "Anda mampu memahami konsep, komponen, mekanisme kerja, dan penerapannya.";
    }

    echo "<div class='result'>";
    echo "<h3>Hasil Diagnosis:</h3>";
    echo "<p><strong>$diagnosis</strong></p>";
    echo "<p>$explanation</p>";
    echo "<p class='score'>Skor Pemahaman Anda: " . round($score) . "%</p>";
    echo "</div>";
}
?>
</div>
</body>
</html>