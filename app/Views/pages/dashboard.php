<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">

    <!-- Dashboard BOX 1 -->
    <div class="row">
        <div class="col p-2">
            <div class="dashboard-box">
                <div class="row content-box d-flex align-content-items shadow">
                    <div class="row row-box">
                        <div class="col main-box">
                            <p>Jumlah Pendapatan 2022</p>
                        </div>
                    </div>
                    <div class="row row-box">
                        <div class="col main-box">
                            <h3>Rp.200.000.000</h3>
                        </div>
                        <div class="col main-box">
                            <i class="fas fa-caret-square-up"></i>
                            <p class="percent-box">+ 100.0%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-3 p-2">
            <div class="dashboard-box">
                <div class="row content-box d-flex align-content-items shadow">
                    <div class="row row-box">
                        <div class="col main-box">
                            <p>Jumlah WP Total 2022</p>
                        </div>
                    </div>
                    <div class="row row-box">
                        <div class="col main-box">
                            <h3>4120</h3>
                        </div>
                        <div class="col main-box">
                            <i class="fas fa-caret-square-up"></i>
                            <p class="percent-box">+ 100.0%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-3 p-2">
            <div class="dashboard-box">
                <div class="row content-box d-flex align-content-items shadow">
                    <div class="row row-box">
                        <div class="col main-box">
                            <p>Jumlah WP Baru 2022</p>
                        </div>
                    </div>
                    <div class="row row-box">
                        <div class="col main-box">
                            <h3>60</h3>
                        </div>
                        <div class="col main-box">
                            <i class="fas fa-caret-square-up"></i>
                            <p class="percent-box">+ 100.0%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard BOX 1 -->

    <!-- Dashboard BOX 2 -->
    <div class="row">
        <div class="col p-2">
            <div class="dashboard-box">
                <div class="row content-box d-flex align-content-items shadow">
                    <div class="row row-box">
                        <div class="col main-box">
                            <p>Jumlah Pendapatan 2022</p>
                        </div>
                    </div>
                    <div class="row row-box">
                        <div class="col main-box">
                            <h3>Rp.200.000.000</h3>
                        </div>
                        <div class="col main-box">
                            <i class="fas fa-caret-square-up"></i>
                            <p class="percent-box">+ 100.0%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-3 p-2">
            <div class="dashboard-box">
                <div class="row content-box d-flex align-content-items shadow">
                    <div class="row row-box">
                        <div class="col main-box">
                            <p>Jumlah WP Total 2022</p>
                        </div>
                    </div>
                    <div class="row row-box">
                        <div class="col main-box">
                            <h3>4120</h3>
                        </div>
                        <div class="col main-box">
                            <i class="fas fa-caret-square-up"></i>
                            <p class="percent-box">+ 100.0%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-3 p-2">
            <div class="dashboard-box">
                <div class="row content-box d-flex align-content-items shadow">
                    <div class="row row-box">
                        <div class="col main-box">
                            <p>Jumlah WP Baru 2022</p>
                        </div>
                    </div>
                    <div class="row row-box">
                        <div class="col main-box">
                            <h3>60</h3>
                        </div>
                        <div class="col main-box">
                            <i class="fas fa-caret-square-up"></i>
                            <p class="percent-box">+ 100.0%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard BOX 2 -->

    <!-- Judul Table 1 -->
    <div class="row mt-4">
        <h2 class="bolder">Penerimaan total per jenis pajak <i class="fas fa-angle-up"></i></h2>
    </div>
    <!-- Judul Table 2 -->

    <!-- Table 1 -->
    <div class="row mt-2 table-dashboard">
        <table class="table table-bordered bg-white table-striped table-content">
            <thead class="table-success text-center">
                <tr>
                    <th scope="col" rowspan="2">Jenis Pajak</th>
                    <th scope="col" colspan="3">2022</th>
                    <th scope="col" colspan="3">2021</th>
                </tr>
                <tr>
                    <th scope="col">Penerimaan Pajak</th>
                    <th scope="col">WP Baru</th>
                    <th scope="col">WP Total</th>
                    <th scope="col">Penerimaan Pajak</th>
                    <th scope="col">WP Baru</th>
                    <th scope="col">WP Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pajak as $p) : ?>
                <tr>
                    <td><?= $p['jenis_pajak']; ?></td>
                    <td><?= $p['pajak']; ?></td>
                    <td><?= $p['wpbaru']; ?></td>
                    <td><?= $p['wptotal']; ?></td>
                    <td><?= $p['pajak']; ?></td>
                    <td><?= $p['wpbaru']; ?></td>
                    <td><?= $p['wptotal']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Table 1 -->

    <!-- Judul Table 1 -->
    <div class="row mt-4">
        <h2 class="bolder">Penerimaan total pajak per wilayah</h2>
        <div class=" d-flex align-items-center mx-5">
            <form class="d-flex" role="search">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search color-dark"></i></span>
                <input class="form-control me-2" type="search" placeholder="Cari Wilayah" aria-label="Search">
            </form>
        </div>
    </div>
    <!-- Judul Table 2 -->

    <!-- Table 2 -->
    <div class="row mt-2 table-dashboard">
        <div class="scrolling-table">
            <table class="table table-bordered bg-white table-striped table-content">
                <thead class="table-success text-center">
                    <tr>
                        <th scope="col" rowspan="2">Kecamatan</th>
                        <th scope="col" colspan="3">Pajak Hotel</th>
                        <th scope="col" colspan="3">Pajak Restoran</th>
                        <th scope="col" colspan="3">Pajak Hiburan</th>
                        <th scope="col" colspan="3">Pajak Reklame</th>
                        <th scope="col" colspan="3">Pajak Parkir</th>
                        <th scope="col" colspan="3">Pajak Penerangan Jalan</th>
                        <th scope="col" colspan="3">Pajak Air Tanah</th>
                        <th scope="col" colspan="3">Pajak Burung Walet</th>
                        <th scope="col" colspan="3">Pajak Mineral Bukan Logam Batuan</th>
                        <th scope="col" colspan="3">Pajak PBB</th>
                        <th scope="col" colspan="3">Pajak BPHTB</th>
                    </tr>
                    <tr>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                        <th scope="col">Penerimaan Pajak</th>
                        <th scope="col">WP Baru</th>
                        <th scope="col">WP Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($wilayah as $w) : ?>
                    <tr>
                        <td><?= $w['kecamatan']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                        <td><?= $w['pajak']; ?></td>
                        <td><?= $w['wpbaru']; ?></td>
                        <td><?= $w['wptotal']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table 2 -->

</div>

<?= $this->endSection(); ?>