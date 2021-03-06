<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// Dashboard
$routes->get('/', 'Home::index');

// Profile
$routes->get('/profile', 'Home::profile');

// Dokter
$routes->get('/tambah-dokter', 'Dokter::tambah');
$routes->get('/dokter/(:segment)', 'Dokter::detail/$1');

// Jadwal Dokter
$routes->get('/jadwal-dokter', 'JadwalDokter::index');
$routes->get('/detail-jadwal-dokter', 'JadwalDokter::detail');

// Cuti Dokter
$routes->get('/cuti-dokter', 'CutiDokter::index');
$routes->post('/cutiDokter', 'CutiDokter::tambah');

// Poliklinik
$routes->post('/poliklinik', 'Poliklinik::tambah');

// Kamar
$routes->post('/kamar', 'Kamar::tambah');

// Rawat Jalan
$routes->get('/rawat-jalan', 'Pendaftaran::index');
$routes->get('/rawat-jalan/(:segment)', 'Pendaftaran::detailRawatJalan/$1');
$routes->get('/tambah-rawat-jalan', 'Pendaftaran::tambahRawatJalan');

// Rawat Inap
$routes->get('/rawat-inap', 'Pendaftaran::rawatInap');
$routes->get('/rawat-inap/(:segment)', 'Pendaftaran::detailRawatInap/$1');
$routes->get('/tambah-rawat-inap', 'Pendaftaran::tambahRawatInap');

// Nomor Antrian
$routes->get('/nomor-antrian', 'Antrian::index');

// Pasien
$routes->get('/pasien/(:segment)', 'Pasien::detail/$1');
$routes->get('/tambah-pasien', 'Pasien::tambah');

// Laporan
$routes->get('/laporan-dokter', 'Laporan::index');
$routes->get('/laporan-jadwal-dokter', 'Laporan::jadwalDokter');
$routes->get('/laporan-pasien', 'Laporan::pasien');
$routes->get('/laporan-rawat-jalan', 'Laporan::rawatJalan');
$routes->get('/laporan-rawat-inap', 'Laporan::rawatInap');

// Profile
$routes->get('/ubah-profile', 'Profile::index');
$routes->get('/ubah-password', 'Profile::ubahPassword');

// Manajemen Pengguna
$routes->get('/pengguna-web', 'ManajUser::index');
$routes->post('/pengguna-web', 'ManajUser::tambahWeb');

$routes->get('/pengguna-mobile', 'ManajUser::userMobile');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
