<?php
// Data biodata
$namaLengkap = "Salzadyah Amanda";
$tanggalLahir = "23 Juni 2005";
$alamat = "Desa Palece";
$email = "daman03746@gmail.com";
$deskripsi = "Mahasiswa yang penuh semangat dengan minat dalam bidang pemrograman dan teknologi.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('https://id.pinterest.com/pin/730146158309258409.jpg');
            background-size: cover;
            background-position: center;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        h1 {
            font-size: 24px;
            margin: 10px 0;
        }
        p {
            font-size: 16px;
            color: #555;
            margin: 5px 0;
        }
        .info {
            margin-top: 15px;
        }
        .info-item {
            margin-bottom: 10px;
        }
        .info-item label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="Salzadyah Amanda.jpg" alt="Salzadyah Amanda" class="profile-pic"> <!-- Ganti "profile.jpg" dengan URL gambar profil Anda jika perlu -->
        <h1><?php echo $namaLengkap; ?></h1>
        <p><?php echo $deskripsi; ?></p>

        <div class="info">
            <div class="info-item">
                <label>Nama Lengkap:</label>
                <p><?php echo $namaLengkap; ?></p>
            </div>
            <div class="info-item">
                <label>Tanggal Lahir:</label>
                <p><?php echo $tanggalLahir; ?></p>
            </div>
            <div class="info-item">
                <label>Alamat:</label>
                <p><?php echo $alamat; ?></p>
            </div>
            <div class="info-item">
                <label>Email:</label>
                <p><?php echo $email; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
