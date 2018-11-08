<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	$route['Dashboard'] = 'admin/Dashboard';


	$route['PostManager/Home'] = 'admin/Home';
	$route['PostManager/Home/Create'] = 'admin/Home/Create';
	$route['PostManager/Home/create_action'] = 'admin/Home/create_action';
	$route['PostManager/Home/Read/(:any)'] = 'admin/Home/read/$1';
	$route['PostManager/Home/Update/(:any)'] = 'admin/Home/update/$1';
	$route['PostManager/Home/update_action'] = 'admin/Home/update_action';
	$route['PostManager/Home/Delete/(:any)'] = 'admin/Home/delete/$1';
	

	$route['PostManager/About'] = 'admin/About';
	$route['PostManager/About/Create'] = 'admin/About/Create';
	$route['PostManager/About/create_action'] = 'admin/About/create_action';
	$route['PostManager/About/Read/(:any)'] = 'admin/About/read/$1';
	$route['PostManager/About/Update/(:any)'] = 'admin/About/update/$1';
	$route['PostManager/About/update_action'] = 'admin/About/update_action';
	$route['PostManager/About/Delete/(:any)'] = 'admin/About/delete/$1';



	$route['PostManager/Mitra'] = 'admin/Mitra';
	$route['PostManager/Mitra/create'] = 'admin/Mitra/Create';
	$route['PostManager/Mitra/create_action'] = 'admin/Mitra/create_action';
	$route['PostManager/Mitra/read/(:any)'] = 'admin/Mitra/read/$1';
	$route['PostManager/Mitra/update/(:any)'] = 'admin/Mitra/update/$1';
	$route['PostManager/Mitra/update_action'] = 'admin/Mitra/update_action';
	$route['PostManager/Mitra/delete/(:any)'] = 'admin/Mitra/delete/$1';


	$route['PostManager/Pengamanan'] = 'admin/Pengamanan';
	$route['PostManager/Pengamanan/create'] = 'admin/Pengamanan/Create';
	$route['PostManager/Pengamanan/create_action'] = 'admin/Pengamanan/create_action';
	$route['PostManager/Pengamanan/read/(:any)'] = 'admin/Pengamanan/read/$1';
	$route['PostManager/Pengamanan/update/(:any)'] = 'admin/Pengamanan/update/$1';
	$route['PostManager/Pengamanan/update_action'] = 'admin/Pengamanan/update_action';
	$route['PostManager/Pengamanan/delete/(:any)'] = 'admin/Pengamanan/delete/$1';

	

	$route['PostManager/Pelatihan'] = 'admin/Pelatihan';
	$route['PostManager/Pelatihan/create'] = 'admin/Pelatihan/Create';
	$route['PostManager/Pelatihan/create_action'] = 'admin/Pelatihan/create_action';
	$route['PostManager/Pelatihan/read/(:any)'] = 'admin/Pelatihan/read/$1';
	$route['PostManager/Pelatihan/update/(:any)'] = 'admin/Pelatihan/update/$1';
	$route['PostManager/Pelatihan/update_action'] = 'admin/Pelatihan/update_action';
	$route['PostManager/Pelatihan/delete/(:any)'] = 'admin/Pelatihan/delete/$1';
	
	$route['PostManager/ArtikelBerita'] = 'admin/ArtikelBerita';
	
	$route['PostManager/Gallery'] = 'admin/Gallery';
	$route['PostManager/Gallery/create'] = 'admin/Gallery/Create';
	$route['PostManager/Gallery/create_action'] = 'admin/Gallery/create_action';
	$route['PostManager/Gallery/read/(:any)'] = 'admin/Gallery/read/$1';
	$route['PostManager/Gallery/update/(:any)'] = 'admin/Gallery/update/$1';
	$route['PostManager/Gallery/update_action'] = 'admin/Gallery/update_action';
	$route['PostManager/Gallery/delete/(:any)'] = 'admin/Gallery/delete/$1';



	$route['PostManager/Karir'] = 'admin/Karir';
	$route['PostManager/Karir/create'] = 'admin/karir/Create';
	$route['PostManager/Karir/create_action'] = 'admin/karir/create_action';
	$route['PostManager/Karir/read/(:any)'] = 'admin/karir/read/$1';
	$route['PostManager/Karir/update/(:any)'] = 'admin/karir/update/$1';
	$route['PostManager/Karir/update_action'] = 'admin/karir/update_action';
	$route['PostManager/Karir/delete/(:any)'] = 'admin/karir/delete/$1';
	
	$route['PostManager/Kontak'] = 'admin/Kontak';
	$route['PostManager/Kontak/create'] = 'admin/Kontak/Create';
	$route['PostManager/Kontak/create_action'] = 'admin/Kontak/create_action';
	$route['PostManager/Kontak/read/(:any)'] = 'admin/Kontak/read/$1';
	$route['PostManager/Kontak/update/(:any)'] = 'admin/Kontak/update/$1';
	$route['PostManager/Kontak/update_action'] = 'admin/Kontak/update_action';
	$route['PostManager/Kontak/delete/(:any)'] = 'admin/Kontak/delete/$1';
	
	$route['PostManager/Testimoni'] = 'admin/Testimoni';
	$route['PostManager/Testimoni/create'] = 'admin/Testimoni/Create';
	$route['PostManager/Testimoni/create_action'] = 'admin/Testimoni/create_action';
	$route['PostManager/Testimoni/read/(:any)'] = 'admin/Testimoni/read/$1';
	$route['PostManager/Testimoni/update/(:any)'] = 'admin/Testimoni/update/$1';
	$route['PostManager/Testimoni/update_action'] = 'admin/Testimoni/update_action';
	$route['PostManager/Testimoni/delete/(:any)'] = 'admin/Testimoni/delete/$1';

	$route['PostManager/Berita'] = 'admin/Berita';
	$route['PostManager/Berita/create'] = 'admin/Berita/Create';
	$route['PostManager/Berita/create_action'] = 'admin/Berita/create_action';
	$route['PostManager/Berita/read/(:any)'] = 'admin/Berita/read/$1';
	$route['PostManager/Berita/update/(:any)'] = 'admin/Berita/update/$1';
	$route['PostManager/Berita/update_action'] = 'admin/Berita/update_action';
	$route['PostManager/Berita/delete/(:any)'] = 'admin/Berita/delete/$1';
	
	$route['PostManager/Artikel'] = 'admin/Artikel';
	$route['PostManager/Artikel/create'] = 'admin/Artikel/Create';
	$route['PostManager/Artikel/create_action'] = 'admin/Artikel/create_action';
	$route['PostManager/Artikel/read/(:any)'] = 'admin/Artikel/read/$1';
	$route['PostManager/Artikel/update/(:any)'] = 'admin/Artikel/update/$1';
	$route['PostManager/Artikel/update_action'] = 'admin/Artikel/update_action';
	$route['PostManager/Artikel/delete/(:any)'] = 'admin/Artikel/delete/$1';
	
	$route['PostManager/Hotnews'] = 'admin/Hotnews';
	$route['PostManager/Hotnews/create'] = 'admin/Hotnews/Create';
	$route['PostManager/Hotnews/create_action'] = 'admin/Hotnews/create_action';
	$route['PostManager/Hotnews/read/(:any)'] = 'admin/Hotnews/read/$1';
	$route['PostManager/Hotnews/update/(:any)'] = 'admin/Hotnews/update/$1';
	$route['PostManager/Hotnews/update_action'] = 'admin/Hotnews/update_action';
	$route['PostManager/Hotnews/delete/(:any)'] = 'admin/Hotnews/delete/$1';

	$route['PostManager/Mitrapengamanan'] = 'admin/Mitrapengamanan';
	$route['PostManager/Mitrapengamanan/create'] = 'admin/Mitrapengamanan/Create';
	$route['PostManager/Mitrapengamanan/create_action'] = 'admin/Mitrapengamanan/create_action';
	$route['PostManager/Mitrapengamanan/read/(:any)'] = 'admin/Mitrapengamanan/read/$1';
	$route['PostManager/Mitrapengamanan/update/(:any)'] = 'admin/Mitrapengamanan/update/$1';
	$route['PostManager/Mitrapengamanan/update_action'] = 'admin/Mitrapengamanan/update_action';
	$route['PostManager/Mitrapengamanan/delete/(:any)'] = 'admin/Mitrapengamanan/delete/$1';


	$route['PostManager/Mitrapelatihan'] = 'admin/Mitrapelatihan';
	$route['PostManager/Mitrapelatihan/create'] = 'admin/Mitrapelatihan/Create';
	$route['PostManager/Mitrapelatihan/create_action'] = 'admin/Mitrapelatihan/create_action';
	$route['PostManager/Mitrapelatihan/read/(:any)'] = 'admin/Mitrapelatihan/read/$1';
	$route['PostManager/Mitrapelatihan/update/(:any)'] = 'admin/Mitrapelatihan/update/$1';
	$route['PostManager/Mitrapelatihan/update_action'] = 'admin/Mitrapelatihan/update_action';
	$route['PostManager/Mitrapelatihan/delete/(:any)'] = 'admin/Mitrapelatihan/delete/$1';



	$route['PostManager/Filtermitra'] = 'admin/Filtermitra';
	$route['PostManager/Filtermitra/create'] = 'admin/Filtermitra/Create';
	$route['PostManager/Filtermitra/create_action'] = 'admin/Filtermitra/create_action';
	$route['PostManager/Filtermitra/read/(:any)'] = 'admin/Filtermitra/read/$1';
	$route['PostManager/Filtermitra/update/(:any)'] = 'admin/Filtermitra/update/$1';
	$route['PostManager/Filtermitra/update_action'] = 'admin/Filtermitra/update_action';
	$route['PostManager/Filtermitra/delete/(:any)'] = 'admin/Filtermitra/delete/$1';

	$route['PostManager/Pelatihankompetensikhusus_content'] = 'admin/Pelatihankompetensikhusus_content';
	$route['PostManager/Pelatihankompetensikhusus_content/create'] = 'admin/Pelatihankompetensikhusus_content/Create';
	$route['PostManager/Pelatihankompetensikhusus_content/create_action'] = 'admin/Pelatihankompetensikhusus_content/create_action';
	$route['PostManager/Pelatihankompetensikhusus_content/read/(:any)'] = 'admin/Pelatihankompetensikhusus_content/read/$1';
	$route['PostManager/Pelatihankompetensikhusus_content/update/(:any)'] = 'admin/Pelatihankompetensikhusus_content/update/$1';
	$route['PostManager/Pelatihankompetensikhusus_content/update_action'] = 'admin/Pelatihankompetensikhusus_content/update_action';
	$route['PostManager/Pelatihankompetensikhusus_content/delete/(:any)'] = 'admin/Pelatihankompetensikhusus_content/delete/$1';

	$route['PostManager/Lamarkerja'] = 'admin/Lamarkerja';



	$route['PostManager/Beritahariini'] = 'admin/Beritahariini';
	$route['PostManager/Beritahariini/create'] = 'admin/Beritahariini/Create';
	$route['PostManager/Beritahariini/create_action'] = 'admin/Beritahariini/create_action';
	$route['PostManager/Beritahariini/read/(:any)'] = 'admin/Beritahariini/read/$1';
	$route['PostManager/Beritahariini/update/(:any)'] = 'admin/Beritahariini/update/$1';
	$route['PostManager/Beritahariini/update_action'] = 'admin/Beritahariini/update_action';
	$route['PostManager/Beritahariini/delete/(:any)'] = 'admin/Beritahariini/delete/$1';

	$route['PostManager/Pelatihandasar'] = 'admin/Pelatihandasar';
	$route['PostManager/Pelatihandasar/create'] = 'admin/Pelatihandasar/Create';
	$route['PostManager/Pelatihandasar/create_action'] = 'admin/Pelatihandasar/create_action';
	$route['PostManager/Pelatihandasar/read/(:any)'] = 'admin/Pelatihandasar/read/$1';
	$route['PostManager/Pelatihandasar/update/(:any)'] = 'admin/Pelatihandasar/update/$1';
	$route['PostManager/Pelatihandasar/update_action'] = 'admin/Pelatihandasar/update_action';
	$route['PostManager/Pelatihandasar/delete/(:any)'] = 'admin/Pelatihandasar/delete/$1';



	$route['Settings/AssetImage'] = 'admin/AssetImageController';
	$route['Settings/getAllAsset'] = 'admin/GalleryController/getAllAsset';
	$route['Settings/saveAsset'] = 'admin/GalleryController/saveAsset';
	$route['Settings/deleteAsset'] = 'admin/GalleryController/deleteAsset';
