<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Ibadah</title>
    <link rel="stylesheet" href="css/style_ibadah.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navigation -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span><img src="img/logo simara no title.png" width="35px" style="margin-top: 10px; margin-left: 14px;"></span>
                        <h1 class="header">SiMaRa</h1>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><span class="iconify" data-icon="ion:home-outline" data-width="25" data-height="25"></span>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="pernikahan.php">
                        <span class="icon"><span class="iconify" data-icon="carbon:partnership" data-width="25" data-height="25"></span></span>
                        <span class="title">Pernikahan</span>
                    </a>
                </li>
                <li>
                    <a href="tempat_ibadah_dashboard.php">
                        <span class="icon"><span class="iconify" data-icon="carbon:worship-muslim" data-width="25" data-height="25"></span></span>
                        <span class="title">Tempat Ibadah</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="title">Madrasah</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><span class="iconify" data-icon="mdi:partnership-outline" data-width="25" data-height="25"></span></span>
                        <span class="title">Wakaf</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="grid-outline"></ion-icon></span>
                        <span class="title">Program</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="judul">
                    <img src="img/logo kua.svg">
                    <h1>Kantor Urusan Agama PUSAKA Kecamatan Karawang Barat</h1>
                </div>
            </div>
            <div class="cardBox">
                <h1>Pendataan Masjid di kecamatan karawang barat</h1>
            </div>
            <input type="search" placeholder="Cari nama atau lokasi " class="search-input "><img src="img/search.png" style="position: absolute; width: 20px; margin-top: 3rem; left: 4.5%;">
            <div class="table">
                <div class="header-tabel">
                    <h1 style="font-size: 20PX; margin-top: 10px; color: #3B3E51; opacity: 60%; font-family: 'poppins', sans-serif; ">Menampilkan Data Semua Masjid</h1>
                    <button id="btn-tambah"><ion-icon name="add-circle-outline"></ion-icon>Tambah</button>
                </div>
                <!-- Modal Structure -->
                <div id="modal-popup" class="modal">
                    <div class="modal-content">
                        <div class="header-modal">
                            <span class="close-modal">&times;</span>
                            <h2 style="color: #3B3E51; font-family: 'poppins',sans-serif;">Tambah Data Pernikahan</h2>
                        </div>
                        <form>
                            <br><br>
                            <div class="modal-input">
                                <div class="input1">
                                    <span class="iconify" data-icon="solar:upload-linear" data-width="70" style="opacity: 50%; margin-top: -2rem; position: relative;"></span><br>
                                    <span style="color: rgb(150, 150, 150);">Seret & Lepas file disini atau klik di bawah ini</span>
                                    <input type="file" accept="image/*" style="margin-top: 2rem;">
                                    <span style="color: red; ">Maksimal Berukuran 1MB</span>
                                </div>
                                <div class="input2 ">
                                    <label for="nama-masjid ">Nama Masjid:</label>
                                    <input type="text " id="nama-masjid " required>
                                    <label for="lokasi-masjid ">Lokasi:</label>
                                    <input type="text " id="lokasi-masjid " required>
                                </div>
                                <div class="input3">
                                    <label for="desk-masjid ">Deskripsi:</label>
                                    <input type="text " id="desk-masjid " style="height: 10rem; " required>
                                </div>
                                <div class="input4">
                                    <label for="kegiatan-masjid ">Kegiatan Rutin:</label>
                                    <input type="text " id="kegiatan-masjid " style="height: 10rem; " required>
                                </div>
                                <div class="input5">
                                    <label for="map-masjid ">Embed Map:</label>
                                    <input type="text " id="map-masjid " style="height: 10rem; " required>
                                </div>
                            </div>
                            <div class="modal-buttons">
                                <button type="button" id="btn-batal">Batal</button>
                                <button type="submit" id="btn-simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Modal Konfirmasi Hapus -->
                <div id="modal-konfirmasi" class="modal-hapus">
                    <div class="modal-content-hapus">
                        <dotlottie-player src="https://lottie.host/bc8a120e-5ed4-4bca-a3c2-f257898c0810/sUEQGb5RuL.json" background="transparent" speed="1" style="width: 200px; height: 200px; margin-left: 6rem;" loop autoplay></dotlottie-player>
                        <h2>Yakin Hapus Data ?</h2>
                        <p>Pastikan Kembali Sebelum Hapus Data</p>
                        <div class="modal-buttons-hapus">
                            <button id="btn-hapus">Hapus</button>
                            <button id="btn-batal-hapus">Batal</button>
                        </div>
                    </div>
                </div>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Lokasi</th>
                        <th>Embed Map</th>
                        <th>Deskripsi Singkat</th>
                        <th>Kegiatan Rutin</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Masjid Al-Jihad</td>
                        <td>Karawang Barat</td>
                        <td>Map</td>
                        <td><span class="limited_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo sequi officia quidem cum debitis. Soluta laudantium in quia quibusdam quasi pariatur ratione, esse quos accusamus, sit voluptatem placeat? Rerum, accusamus!</span></td>
                        <td><span class="limited_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo sequi officia quidem cum debitis. Soluta laudantium in quia quibusdam quasi pariatur ratione, esse quos accusamus, sit voluptatem placeat? Rerum, accusamus!</span></td>
                        <td>
                            <ion-icon name="trash-outline" class="icon-delete" style="cursor: pointer; "></ion-icon>
                            <ion-icon name="create-outline" class="icon-edit"></ion-icon>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Masjid Al-Jihad</td>
                        <td>Karawang Barat</td>
                        <td>Map</td>
                        <td><span class="limited_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo sequi officia quidem cum debitis. Soluta laudantium in quia quibusdam quasi pariatur ratione, esse quos accusamus, sit voluptatem placeat? Rerum, accusamus!</span></td>
                        <td><span class="limited_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo sequi officia quidem cum debitis. Soluta laudantium in quia quibusdam quasi pariatur ratione, esse quos accusamus, sit voluptatem placeat? Rerum, accusamus!</span></td>
                        <td>
                            <ion-icon name="trash-outline" class="icon-delete" style="cursor: pointer; "></ion-icon>
                            <ion-icon name="create-outline" class="icon-edit"></ion-icon>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Masjid Al-Jihad</td>
                        <td>Karawang Barat</td>
                        <td>Map</td>
                        <td><span class="limited_text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo sequi officia quidem cum debitis. Soluta laudantium in quia quibusdam quasi pariatur ratione, esse quos accusamus, sit voluptatem placeat? Rerum, accusamus!</span></td>
                        <td><span class="limited_text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo sequi officia quidem cum debitis. Soluta laudantium in quia quibusdam quasi pariatur ratione, esse quos accusamus, sit voluptatem placeat? Rerum, accusamus!</span></td>
                        <td>
                            <ion-icon name="trash-outline" class="icon-delete" style="cursor: pointer;"></ion-icon>
                            <ion-icon name="create-outline" class="icon-edit"></ion-icon>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <script src="js/js_ibadah.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</body>

</html>
