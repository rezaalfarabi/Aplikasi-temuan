<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Homecontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['/']['get'] = 'Homecontroller/index';
$route['data-master']['get'] = 'Homecontroller/datamaster';

// lokasi
$route['lokasi']['get'] = 'Lokasicontroller/index';
$route['tambah-lokasi']['get'] = 'Lokasicontroller/tambahdata';
$route['simpan-lokasi']['post'] = 'Lokasicontroller/simpan';
$route['edit-lokasi/(:num)']['get'] = 'Lokasicontroller/edit/$1';
$route['simpan-lokasi-edit']['post'] = 'Lokasicontroller/simpanedit';
$route['hapus-lokasi/(:num)']['get'] = 'Lokasicontroller/delete/$1';

// ruangan
$route['ruangan']['get'] = 'Ruangancontroller/index';
$route['tambah-ruangan']['get'] = 'Ruangancontroller/tambahruangan';
$route['simpan-ruangan']['post'] = 'Ruangancontroller/simpan';
$route['edit-ruangan/(:num)']['get'] = 'Ruangancontroller/edit/$1';
$route['simpan-ruangan-edit']['post'] = 'Ruangancontroller/simpanedit';
$route['hapus-ruangan/(:num)']['get'] = 'Ruangancontroller/delete/$1';


// panel
$route['panel']['get'] = 'Panelcontroller/index';
$route['tambah-panel']['get'] = 'Panelcontroller/tambah';
$route['simpan-panel']['post'] = 'Panelcontroller/save';
$route['edit-panel/(:num)']['get'] = 'Panelcontroller/edit/$1';
$route['simpan-panel-edit']['post'] = 'Panelcontroller/update';
$route['hapus-panel/(:num)']['get'] = 'Panelcontroller/delete/$1';

// genset
$route['genset']['get'] = 'Gensetcontroller/index';
$route['tambah-genset']['get'] = 'Gensetcontroller/tambah';
$route['simpan-genset']['post'] = 'Gensetcontroller/save';
$route['edit-genset/(:num)']['get'] = 'Gensetcontroller/edit/$1';
$route['simpan-genset-edit']['post'] = 'Gensetcontroller/update';
$route['hapus-genset/(:num)']['get'] = 'Gensetcontroller/delete/$1';

// ups
$route['ups']['get'] = 'Upscontroller/index';
$route['tambah-ups']['get'] = 'Upscontroller/tambah';
$route['simpan-ups']['post'] = 'Upscontroller/save';
$route['edit-ups/(:num)']['get'] = 'Upscontroller/edit/$1';
$route['simpan-ups-edit']['post'] = 'Upscontroller/update';
$route['hapus-ups/(:num)']['get'] = 'Upscontroller/delete/$1';

// pac
$route['pac']['get'] = 'Paccontroller/index';
$route['tambah-pac']['get'] = 'Paccontroller/tambah';
$route['simpan-pac']['post'] = 'Paccontroller/save';
$route['edit-pac/(:num)']['get'] = 'Paccontroller/edit/$1';
$route['simpan-pac-edit']['post'] = 'Paccontroller/update';
$route['hapus-pac/(:num)']['get'] = 'Paccontroller/delete/$1';

// pkg
$route['pkg']['get'] = 'Pkgcontroller/index';
$route['tambah-pkg']['get'] = 'Pkgcontroller/tambah';
$route['simpan-pkg']['post'] = 'Pkgcontroller/save';
$route['edit-pkg/(:num)']['get'] = 'Pkgcontroller/edit/$1';
$route['simpan-pkg-edit']['post'] = 'Pkgcontroller/update';
$route['hapus-pkg/(:num)']['get'] = 'Pkgcontroller/delete/$1';


