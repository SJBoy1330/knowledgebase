<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>Muding <?php if (isset($title)) {
                        echo '| ' . $title;
                    } ?> </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?= base_url('assets/logo/color.png'); ?>" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="<?= base_url(); ?>assets/admin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?= base_url(); ?>assets/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://kit.fontawesome.com/7b5de42309.css" crossorigin="anonymous">
    <!--end::Global Stylesheets Bundle-->
    <?php
    if (isset($css_add) && is_array($css_add)) {
        foreach ($css_add as $css) {
            echo $css;
        }
    } else {
        echo (isset($css_add) && ($css_add != "") ? $css_add : "");
    }
    ?>

    <style>
        .image-input-placeholder {
            background-image: url('svg/avatars/blank.svg');
        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('svg/avatars/blank-dark.svg');
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-tabs-enabled header-menu-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header">
                    <!--begin::Header top-->
                    <div class="header-top d-flex align-items-stretch flex-grow-1 h-100px h-lg-150px" data-kt-sticky="true" data-kt-sticky-name="header-topbar" data-kt-sticky-offset="{default: '100px', lg: 'false'}" data-kt-sticky-dependencies="#kt_wrapper" data-kt-sticky-class="fixed-top bg-body shadow-sm border-0">
                        <!--begin::Brand container-->
                        <div class="container-custom container-xxl d-flex w-100">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack align-items-stretch w-100">
                                <!--begin::Brand-->
                                <div class="d-flex align-items-center align-items-lg-stretch me-5">
                                    <!--begin::Heaeder navs toggle-->
                                    <button class="d-lg-none btn btn-icon btn-color-gray-500 btn-active-color-primary w-40px h-40px ms-n3 me-2" id="kt_header_navs_toggle">
                                        <i class="ki-duotone ki-abstract-14 fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Heaeder navs toggle-->
                                    <!--begin::Logo-->
                                    <div style="width : 100vw;" class="d-flex justify-content-center align-items-center">
                                        <a href="<?= base_url('dashboard') ?>" class="d-flex align-items-center justify-content-center">
                                            <img alt="Logo" src="<?= base_url(); ?>assets/logo/color_text.png" class="h-60px h-lg-80px" />
                                        </a>
                                    </div>

                                    <!--end::Logo-->
                                </div>
                                <!--end::Brand-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Brand container-->
                    </div>
                    <!--end::Header top-->
                    <!--begin::Header bottom-->
                    <div class="header-bottom d-lg-flex flex-column align-items-stretch w-100" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
                        <!--begin::Tabs container-->
                        <div class="container-custom container-xxl d-lg-flex flex-column w-100">
                            <!--begin::Header tabs-->
                            <div class="header-tabs d-flex align-items-stretch w-100 h-60px h-lg-100px overflow-auto mb-5 mb-lg-0" id="kt_header_tabs">
                                <ul class="nav nav-stretch flex-nowrap w-100 h-100">
                                    <li class="nav-item flex-equal">
                                        <a class="nav-link d-flex flex-column text-nowrap flex-center w-100 <?= set_menu_active($this->uri->segment(1), ['dashboard', 'order']) ?>" data-bs-toggle="tab" href="#dashboard" <?php if ($this->uri->segment(1) != 'dashboard' && $this->session->userdata('hotel_id_role') == 2) {
                                                                                                                                                                                                                                echo 'onclick="redirect(`dashboard`)"';
                                                                                                                                                                                                                            } ?>>
                                            <span class="text-uppercase text-dark fw-bold fs-6 fs-lg-5"><?= language('beranda', 'first') ?></span>
                                            <span class="text-gray-500 fs-8 fs-lg-7"><?= language('antrian', 'first') ?> & <?= language('pesanan', 'first') ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-equal">
                                        <a class="nav-link d-flex flex-column text-nowrap flex-center w-100 <?= set_menu_active($this->uri->segment(1), ['management']) ?>" data-bs-toggle="tab" href="#management">
                                            <span class="text-uppercase text-dark fw-bold fs-6 fs-lg-5"><?= language('manajemen', 'first') ?></span>
                                            <span class="text-gray-500 fs-8 fs-lg-7"><?= language('penyimpanan', 'first') ?> & <?= language('pengelolaan', 'first') ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-equal">
                                        <a class="nav-link d-flex flex-column text-nowrap flex-center w-100 <?= set_menu_active($this->uri->segment(1), ['cms']) ?>" data-bs-toggle="tab" href="#cms">
                                            <span class="text-uppercase text-dark fw-bold fs-6 fs-lg-5">CMS</span>
                                            <span class="text-gray-500 fs-8 fs-lg-7"><?= language('sistem manajemen konten', 'firstbig') ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-equal">
                                        <a class="nav-link d-flex flex-column text-nowrap flex-center w-100 <?= set_menu_active($this->uri->segment(1), ['report']) ?>" data-bs-toggle="tab" href="#report">
                                            <span class="text-uppercase text-dark fw-bold fs-6 fs-lg-5"><?= language('laporan', 'first') ?></span>
                                            <span class="text-gray-500 fs-8 fs-lg-7"><?= language('catatan', 'first') ?> & <?= language('evaluasi', 'first') ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-equal">
                                        <a class="nav-link d-flex flex-column text-nowrap flex-center w-100 <?= set_menu_active($this->uri->segment(1), ['setting']) ?>" data-bs-toggle="tab" href="#setting">
                                            <span class="text-uppercase text-dark fw-bold fs-6 fs-lg-5"><?= language('pengaturan', 'first') ?></span>
                                            <span class="text-gray-500 fs-8 fs-lg-7"><?= language('komponen pengaturan', 'firstbig') ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--end::Header tabs-->
                        </div>
                        <!--end::Tabs container-->
                        <!--begin::Header panel-->
                        <div class="d-flex align-items-stretch h-lg-70px" data-kt-sticky="true" data-kt-sticky-name="header-tabs" data-kt-sticky-offset="{default: 'false', lg: '300px'}" data-kt-sticky-dependencies="#kt_wrapper" data-kt-sticky-class="fixed-top bg-body shadow-sm border-0">
                            <!--begin::Panel container-->
                            <div class="container-custom container-xxl d-lg-flex flex-column w-100">
                                <!--begin::Header navs-->
                                <div class="header-navs d-lg-flex flex-column justify-content-lg-center h-100 w-100" id="kt_header_navs_wrapper">
                                    <!--begin::Header tab content-->
                                    <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade <?= set_menu_active($this->uri->segment(1), ['dashboard', 'order'], 'active show') ?>" id="dashboard">
                                            <!--begin::Menu wrapper-->
                                            <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                                <div class="d-flex flex-column flex-lg-row gap-2">
                                                    <?php if ($this->session->userdata('hotel_id_role') == 3) : ?>
                                                        <a class="btn btn-sm fw-bold <?= set_menu_active($this->uri->segment(1), ['dashboard'], 'btn-personal active', 'btn-light ') ?>" href="<?= base_url('dashboard') ?>"><?= language('beranda', 'first') ?></a>
                                                        <a class="btn btn-sm fw-bold <?= set_menu_active($this->uri->segment(1), ['order'], 'btn-personal active', 'btn-light ') ?>" href="<?= basE_url('order') ?>"><?= language('pesanan', 'first') ?></a>
                                                    <?php else : ?>
                                                        <a class="btn btn-sm fw-bold <?= set_menu_active($this->uri->segment(1), ['dashboard'], 'btn-personal active', 'btn-light ') ?>" href="<?= base_url('dashboard') ?>"><?= language('pesanan', 'first') ?></a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="d-flex flex-column flex-lg-row gap-2">
                                                    <a id="kt_drawer_example_basic_button" class="btn btn-sm btn-light-personal fw-bold hover-rotate-end"><?= language('pesanan daring', 'firstbig') ?></a>
                                                    <div id="kt_drawer_example_basic_button" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_drawer_example_basic_button" data-kt-drawer-close="#kt_drawer_example_basic_close" data-kt-drawer-width="{default:'300px', 'md': '500px'}">
                                                        <div class="card w-100 rounded-0">
                                                            <!--begin::Card header-->
                                                            <div class="card-header pe-5">
                                                                <!--begin::Title-->
                                                                <div class="card-title">
                                                                    <!--begin::User-->
                                                                    <div class="d-flex justify-content-center flex-column me-3">
                                                                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 lh-1"><?= language('pesanan daring', 'firstbig') ?></a>
                                                                    </div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Title-->

                                                                <!--begin::Card toolbar-->
                                                                <div class="card-toolbar">
                                                                    <!--begin::Close-->
                                                                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_example_basic_close">
                                                                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>
                                                                <!--end::Card toolbar-->
                                                            </div>
                                                            <!--end::Card header-->

                                                            <!--begin::Card body-->
                                                            <div class="card-body hover-scroll-overlay-y">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-stack">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-5">
                                                                        <img src="<?= base_url() ?>assets/admin/media/avatars/300-11.jpg" class="h-50 align-self-center" alt="">
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Section-->
                                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                        <!--begin:Author-->
                                                                        <div class="flex-grow-1 me-2">
                                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
                                                                            <span class="text-success fw-semibold d-block fs-7"><?= language('lunas', 'first') ?></span>
                                                                        </div>
                                                                        <!--end:Author-->
                                                                        <!--begin:Action-->
                                                                        <a href="#" class="btn btn-sm btn-light fs-8 fw-bold"><i class="fa-solid fa-arrow-right"></i></a>
                                                                        <!--end:Action-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Separator-->
                                                                <div class="separator separator-dashed my-4"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-stack">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-5">
                                                                        <img src="<?= base_url() ?>assets/admin/media/avatars/300-2.jpg" class="h-50 align-self-center" alt="">
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Section-->
                                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                        <!--begin:Author-->
                                                                        <div class="flex-grow-1 me-2">
                                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Annette Black</a>
                                                                            <span class="text-danger fw-semibold d-block fs-7"><?= language('belum lunas', 'first') ?></span>
                                                                        </div>
                                                                        <!--end:Author-->
                                                                        <!--begin:Action-->
                                                                        <a href="#" class="btn btn-sm btn-light fs-8 fw-bold"><i class="fa-solid fa-arrow-right"></i></a>
                                                                        <!--end:Action-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Separator-->
                                                                <div class="separator separator-dashed my-4"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-stack">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-5">
                                                                        <img src="<?= base_url() ?>assets/admin/media/avatars/300-7.jpg" class="h-50 align-self-center" alt="">
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Section-->
                                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                        <!--begin:Author-->
                                                                        <div class="flex-grow-1 me-2">
                                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Devon Lane</a>
                                                                            <span class="text-success fw-semibold d-block fs-7"><?= language('lunas', 'first') ?></span>
                                                                        </div>
                                                                        <!--end:Author-->
                                                                        <!--begin:Action-->
                                                                        <a href="#" class="btn btn-sm btn-light fs-8 fw-bold"><i class="fa-solid fa-arrow-right"></i></a>
                                                                        <!--end:Action-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Separator-->
                                                                <div class="separator separator-dashed my-4"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-stack">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-5">
                                                                        <img src="<?= base_url() ?>assets/admin/media/avatars/300-9.jpg" class="h-50 align-self-center" alt="">
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Section-->
                                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                        <!--begin:Author-->
                                                                        <div class="flex-grow-1 me-2">
                                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Kristin Watson</a>
                                                                            <span class="text-warning fw-semibold d-block fs-7"><?= language('konfirmasi', 'first') ?></span>
                                                                        </div>
                                                                        <!--end:Author-->
                                                                        <!--begin:Action-->
                                                                        <a href="#" class="btn btn-sm btn-light fs-8 fw-bold"><i class="fa-solid fa-arrow-right"></i></a>
                                                                        <!--end:Action-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Separator-->
                                                                <div class="separator separator-dashed my-4"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-stack">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-5">
                                                                        <img src="<?= base_url() ?>assets/admin/media/avatars/300-12.jpg" class="h-50 align-self-center" alt="">
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Section-->
                                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                        <!--begin:Author-->
                                                                        <div class="flex-grow-1 me-2">
                                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Eleanor Pena</a>
                                                                            <span class="text-warning fw-semibold d-block fs-7"><?= language('konfirmasi', 'first') ?></span>
                                                                        </div>
                                                                        <!--end:Author-->
                                                                        <!--begin:Action-->
                                                                        <a href="#" class="btn btn-sm btn-light fs-8 fw-bold"><i class="fa-solid fa-arrow-right"></i></a>
                                                                        <!--end:Action-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Menu wrapper-->
                                        </div>
                                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade <?= set_menu_active($this->uri->segment(1), ['management'], 'active show') ?>" id="management">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                                <div class="d-flex flex-column flex-lg-row gap-2">
                                                    <a class="btn btn-sm fw-bold <?= set_submenu_active($this->uri->segment(1), ['management'], $this->uri->segment(2), ['customer'], 'btn-personal active', 'btn-light') ?>" href="<?= base_url('management/customer') ?>"><?= language('pelanggan', 'first') ?></a>
                                                    <a class="btn btn-sm fw-bold <?= set_submenu_active($this->uri->segment(1), ['management'], $this->uri->segment(2), ['staf'], 'btn-personal active', 'btn-light') ?>" href="<?= base_url('management/staf') ?>"><?= language('pegawai', 'first') ?></a>
                                                    <a class="btn btn-sm fw-bold <?= set_submenu_active($this->uri->segment(1), ['management'], $this->uri->segment(2), ['product'], 'btn-personal active', 'btn-light') ?>" href="<?= base_url('management/product') ?>"><?= language('produk', 'first') ?></a>
                                                </div>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade <?= set_menu_active($this->uri->segment(1), ['cms'], 'active show') ?>" id="cms">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                                <div class="d-flex flex-column flex-lg-row gap-2">
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['cms'], $this->uri->segment(2), ['banner'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('cms/banner') ?>"><?= language('spanduk', 'first') ?></a>
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['cms'], $this->uri->segment(2), ['about'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('cms/about') ?>"><?= language('tentang kami', 'first') ?></a>
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['cms'], $this->uri->segment(2), ['galery'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('cms/galery') ?>"><?= language('galeri', 'first') ?></a>
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['cms'], $this->uri->segment(2), ['footer'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('cms/footer') ?>">Footer</a>
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['cms'], $this->uri->segment(2), ['sosmed'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('cms/sosmed') ?>"><?= language('sosial media', 'firstbig') ?></a>
                                                </div>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade <?= set_menu_active($this->uri->segment(1), ['report'], 'active show') ?>" id="report">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                                <div class="d-flex flex-column flex-lg-row gap-2">
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['report'], $this->uri->segment(2), ['order'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('report/order') ?>"><?= language('laporan pemesanan', 'firstbig') ?></a>
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['report'], $this->uri->segment(2), ['finance'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('report/finance') ?>"><?= language('laporan keuangan', 'first') ?></a>
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                        </div>
                                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade <?= set_menu_active($this->uri->segment(1), ['setting'], 'active show') ?>" id="setting">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                                <div class="d-flex flex-column flex-lg-row gap-2">
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['setting'], $this->uri->segment(2), ['profil'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('setting/profil') ?>"><?= language('profil', 'firstbig') ?></a>
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['setting'], $this->uri->segment(2), ['language'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('setting/language') ?>"><?= language('aturan bahasa', 'firstbig') ?></a>
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['setting'], $this->uri->segment(2), ['booking'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('setting/booking') ?>"><?= language('aturan pemesanan', 'firstbig') ?></a>
                                                    <a class="btn btn-sm <?= set_submenu_active($this->uri->segment(1), ['setting'], $this->uri->segment(2), ['themes'], 'btn-personal active', 'btn-light') ?> fw-bold" href="<?= base_url('setting/themes') ?>"><?= language('aturan tampilan', 'firstbig') ?></a>

                                                </div>

                                                <div class="d-flex flex-column flex-lg-row gap-2">
                                                    <a data-judul="<?= language('konfirmasi', 'allbig') ?>" data-message="<?= language('apakah anda yakin akan keluar dari akun ini', 'first') . '?' ?>" data-icon="question" href=" <?= base_url('logout') ?>" class="btn btn-sm btn-light-danger fw-bold hover-rotate-end question_alert"><?= language('keluar', 'firstbig') ?></a>
                                                </div>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tab panel-->
                                    </div>
                                    <!--end::Header tab content-->
                                </div>
                                <!--end::Header navs-->
                            </div>
                            <!--end::Panel container-->
                        </div>
                        <!--end::Header panel-->
                    </div>
                    <!--end::Header bottom-->
                </div>
                <!--end::Header-->