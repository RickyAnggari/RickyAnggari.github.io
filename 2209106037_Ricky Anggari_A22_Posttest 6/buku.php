<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="buku.css">
</head>
<body>
    <div>
        <div class="atas">
            <h1>Data Penjualan Buku</h1>
        </div>
        <div class="atas1">
            <h1>Silahkan tekan next untuk lanjut ke menu berikutnya</h1>
        </div>
        <div class="atas1">
            <h1>Silahkan tekan prev untuk lanjut ke menu sebelumnya</h1>
        </div>
        <div>
        <button class="tombol-tambah"><a href="CRUD.php"><h1 class="tulisan-tambah">Halaman sebelumnya</h1></a></button>
        </div>
        <section>
            <div class="carousel" data-carousel>
                <ul data-slides>
                    <li class="slide">
                        <table>
                            <tr>
                                <td><img src="Naruto.jpg">
                                <h2>Naruto</h2>
                                <h2>Rp.100.000</h2>
                                <button class="buy-button">Beli sekarang</button>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <li class="slide">
                        <table>
                            <tr>
                                <td><img src="Informatika.jpeg">
                                <h2>Informatika</h2>
                                <h2>Rp.700.000</h2>
                                <button class="buy-button">Beli sekarang</button>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <li class="slide">
                        <table>
                            <tr>
                                <td>
                                    <img src="Onepiece.jpg">
                                    <h2>One Piece</h2>
                                    <h2>Rp.200.000</h2>
                                    <button>Beli sekarang</button>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <li class="slide">
                        <table>
                            <tr>
                                <td>
                                    <img src="Boku no Hero.jpg">
                                    <h2>Boku no Hero</h2>
                                    <h2>Rp.200.000</h2>
                                    <button>Beli Sekarang</button>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <li class="slide">
                        <table>
                            <tr>
                                <td>
                                    <img src="cold war.jpeg">
                                    <h2>Sejarah perang dingin</h2>
                                    <h2>Rp.2.000.000</h2>
                                    <button>Beli Sekarang</button>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <li class="slide">
                        <table>
                            <tr>
                                <td>
                                    <img src="Kimi no nawa.jpeg">
                                    <h2>Kimi no nawa</h2>
                                    <h2>Rp.200.000</h2>
                                    <button>Beli Sekarang</button>
                                </td>
                            </tr>
                        </table>
                    </li>
                </ul>
                <!-- 2 buah DOM -->
                <button class="carousel-button next" data-carousel-button="next">next/start first</button>
                <button class="carousel-button prev" data-carousel-button="prev">prev/start last</button>
            </div>
        </section>
        <script src="buku.js"></script>
    </div>
</body>
</html>
