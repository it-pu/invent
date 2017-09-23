<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'c_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['wifi'] = 'c_wifi';
$route['dashboard'] = 'c_dashboard';
$route['wifi'] = 'c_wifi';

$route['finance'] = 'c_finance';
$route['finance/add-pr'] = 'c_finance/add_pr';


$route['inventory'] = 'c_inventory';
$route['inventory/purchase-requisition'] = 'c_inventory/purchase_requisition';
$route['inventory/create-pr'] = 'c_inventory/create_pr';

$route['inventory/form/pr'] = 'c_inventory/form_pr';
$route['inventory/form/af'] = 'c_inventory/form_af';
$route['inventory/form/iom'] = 'c_inventory/form_iom';
$route['inventory/form/berita_acara'] = 'c_inventory/form_berita_acara';
$route['inventory/form/dokumen_pendukung'] = 'c_inventory/form_dokumen_pendukung';
$route['inventory/form/daftar_barang_rusak'] = 'c_inventory/form_daftar_barang_rusak';
$route['inventory/form/cs'] = 'c_inventory/form_cs';


$route['budgeting'] = 'c_budgeting';
