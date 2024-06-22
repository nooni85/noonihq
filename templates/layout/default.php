<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        'vendors/litepicker.css',
        'vendors/tiny-slider.css',
        'vendors/tippy.css',
        'vendors/simplebar.css',
        'themes/dagger.css',
        'app.css'])?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <div class="dagger before:content-[''] before:bg-gradient-to-b before:from-slate-100 before:to-slate-50 before:fixed before:inset-0">
        <div class="h-screen relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:inset-0 before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
            <div class="fixed top-0 left-0 z-50 h-screen side-menu group side-menu--collapsed">
                <div class="box fixed inset-x-0 top-0 z-10 flex h-[65px] rounded-none border-x-0 border-t-0">
                    <div class="side-menu__content bg-white flex-none flex items-center z-10 px-5 h-full xl:w-[275px] overflow-hidden relative duration-300 group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000001f] before:content-[''] before:hidden before:xl:block before:absolute before:right-0 before:border-r before:border-dashed before:border-slate-300/70 before:h-4/6 before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:border-solid before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:h-full">
                        <a class="hidden items-center transition-[margin] xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-2" href="">
                            <div class="flex h-[34px] w-[34px] items-center justify-center rounded-lg bg-gradient-to-r from-theme-1 to-theme-2 transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
                                <div class="relative h-[16px] w-[16px] -rotate-45 [&_div]:bg-white">
                                    <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                    </div>
                                    <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                                    <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                    </div>
                                </div>
                            </div>
                            <div class="ml-3.5 font-medium transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                                DAGGER
                            </div>
                        </a>
                        <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-slate-600/40 transition-[opacity,transform] hover:bg-slate-600/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex" href="">
                            <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
                        </a>
                        <div class="flex items-center gap-1 xl:hidden">
                            <a class="p-2 rounded-full open-mobile-menu hover:bg-slate-100" href="">
                                <i data-tw-merge="" data-lucide="align-justify" class="stroke-[1] h-[18px] w-[18px]"></i>
                            </a>
                            <a class="p-2 rounded-full hover:bg-slate-100" data-tw-toggle="modal" data-tw-target="#quick-search" href="javascript:;">
                                <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                            </a>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 h-full transition-[padding] duration-100 xl:pl-[275px] group-[.side-menu--collapsed]:xl:pl-[91px]">
                        <div class="flex items-center w-full h-full px-5">
                            <!-- BEGIN: Breadcrumb -->
                            <nav aria-label="breadcrumb" class="flex flex-1 hidden xl:block">
                                <ol class="flex items-center text-theme-1 dark:text-slate-300">
                                    <li class="">
                                        <a href="">App</a>
                                    </li>
                                    <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white">
                                        <a href="">Dashboards</a>
                                    </li>
                                    <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
                                        <a href="">Analytics</a>
                                    </li>
                                </ol>
                            </nav>
                            <!-- END: Breadcrumb -->
                            <!-- BEGIN: Search -->
                            <div class="relative justify-center flex-1 hidden xl:flex" data-tw-toggle="modal" data-tw-target="#quick-search">
                                <div class="flex w-[350px] cursor-pointer items-center rounded-[0.5rem] border bg-slate-50 px-3.5 py-2 text-slate-400 transition-colors hover:bg-slate-100">
                                    <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                                    <div class="ml-2.5 mr-auto">Quick search...</div>
                                    <div>⌘K</div>
                                </div>
                            </div>
                            <div id="quick-search" aria-hidden="true" tabindex="-1" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 overflow-y-hidden z-[60] [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.1s]">
                                <div class="relative mx-auto my-2 w-[95%] scale-95 transition-transform group-[.show]:scale-100 sm:mt-40 sm:w-[600px] lg:w-[700px]">
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex w-12 items-center justify-center">
                                            <i data-tw-merge="" data-lucide="search" class="stroke-[1] w-5 h-5 -mr-1.5 text-slate-500"></i>
                                        </div>
                                        <input data-tw-merge="" type="text" placeholder="Quick search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full border-slate-200 placeholder:text-slate-400/90 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-lg border-0 py-3.5 pl-12 pr-14 text-base shadow-lg focus:ring-0">
                                        <div class="absolute inset-y-0 right-0 flex w-14 items-center">
                                            <div class="mr-auto rounded-[0.4rem] border bg-slate-100 px-2 py-1 text-xs text-slate-500/80">
                                                ESC
                                            </div>
                                        </div>
                                    </div>
                                    <div class="global-search global-search--show-result group relative z-10 mt-1 max-h-[468px] overflow-y-auto rounded-lg bg-white pb-1 shadow-lg sm:max-h-[615px]">
                                        <div class="flex flex-col items-center justify-center pb-28 pt-20 group-[.global-search--show-result]:hidden">
                                            <i data-tw-merge="" data-lucide="search-x" class="h-20 w-20 fill-theme-1/5 stroke-[0.5] text-theme-1/20"></i>
                                            <div class="mt-5 text-xl font-medium">
                                                No result found
                                            </div>
                                            <div class="mt-3 w-2/3 text-center leading-relaxed text-slate-500">
                                                No results found for
                                                <span class="global-search__keyword font-medium italic"></span>
                                                . Please try a different search term or check your
                                                spelling.
                                            </div>
                                        </div>
                                        <div class="hidden group-[.global-search--show-result]:block">
                                            <div class="px-5 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Start your search here...
                                                    </div>
                                                </div>
                                                <div class="mt-3.5 flex flex-wrap gap-2">
                                                    <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50" href="">
                                                        <i data-tw-merge="" data-lucide="users2" class="h-4 w-4 stroke-[1.3]"></i>
                                                        Users
                                                    </a>
                                                    <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50" href="">
                                                        <i data-tw-merge="" data-lucide="building2" class="h-4 w-4 stroke-[1.3]"></i>
                                                        Departments
                                                    </a>
                                                    <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50" href="">
                                                        <i data-tw-merge="" data-lucide="kanban-square" class="h-4 w-4 stroke-[1.3]"></i>
                                                        Products
                                                    </a>
                                                    <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50" href="">
                                                        <i data-tw-merge="" data-lucide="mail-check" class="h-4 w-4 stroke-[1.3]"></i>
                                                        Mails
                                                    </a>
                                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><a data-tw-toggle="dropdown" aria-expanded="false" href="javascript:;" class="cursor-pointer flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50">More
                                                            <i data-tw-merge="" data-lucide="chevron-down" class="-ml-0.5 h-4 w-4 stroke-[1.3]"></i>
                                                        </a>
                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="map" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                    Locations</a>
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-check" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                    Projects</a>
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                    Devices</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-t border-dashed px-5 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Users
                                                    </div>
                                                    <a class="ml-auto text-xs text-slate-500" href="">
                                                        See All
                                                    </a>
                                                </div>
                                                <div class="mt-3.5 flex flex-col gap-1">
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                        <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user4-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Angelina Jolie
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            San Francisco, USA
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                        <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user2-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Meryl Streep
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Los Angeles, USA
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                        <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user7-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Johnny Depp
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Denver, USA
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="border-t border-dashed px-5 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Departments
                                                    </div>
                                                    <a class="ml-auto text-xs text-slate-500" href="">
                                                        See All
                                                    </a>
                                                </div>
                                                <div class="mt-3.5 flex flex-col gap-1">
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                        <div class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                            <i data-tw-merge="" data-lucide="hotel" class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Sales
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            India
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                        <div class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                            <i data-tw-merge="" data-lucide="hotel" class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Operations
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Andorra
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                        <div class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                            <i data-tw-merge="" data-lucide="hotel" class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Product Management
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            French Southern and Antarctic Lands
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="border-t border-dashed px-5 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Products
                                                    </div>
                                                    <a class="ml-auto text-xs text-slate-500" href="">
                                                        See All
                                                    </a>
                                                </div>
                                                <div class="mt-3.5 flex flex-col gap-1">
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                        <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/products/product3-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Wireless Noise-Cancelling Headphones
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Beauty & Personal Care
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                        <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/products/product8-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            8-Cup Coffee Maker
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Electronics
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="">
                                                        <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/products/product9-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Bluetooth Speaker with Bass Boost
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Books
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Search -->
                            <!-- BEGIN: Notification & User Menu -->
                            <div class="flex items-center flex-1">
                                <div class="flex items-center gap-1 ml-auto">
                                    <a class="p-2 rounded-full hover:bg-slate-100" data-tw-toggle="modal" data-tw-target="#activities-panel" href="javascript:;">
                                        <i data-tw-merge="" data-lucide="layout-grid" class="stroke-[1] h-[18px] w-[18px]"></i>
                                    </a>
                                    <a class="p-2 rounded-full request-full-screen hover:bg-slate-100" href="javascript:;">
                                        <i data-tw-merge="" data-lucide="expand" class="stroke-[1] h-[18px] w-[18px]"></i>
                                    </a>
                                    <a class="p-2 rounded-full hover:bg-slate-100" data-tw-toggle="modal" data-tw-target="#notifications-panel" href="javascript:;">
                                        <i data-tw-merge="" data-lucide="bell" class="stroke-[1] h-[18px] w-[18px]"></i>
                                    </a>
                                </div>
                                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-slate-200/70"><img src="<?= $this->Url->image('/users/user4-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                    </button>
                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                        <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-56 mt-1">
                                            <a data-tw-toggle="modal" data-tw-target="#switch-account" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="toggle-left" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Switch Account</a>
                                            <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                            </div>
                                            <a href="dagger-settings-connected-services.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="settings" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Connected Services</a>
                                            <a href="dagger-settings-email-settings.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="inbox" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Email Settings</a>
                                            <a href="dagger-settings-security.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="lock" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Reset Password</a>
                                            <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                            </div>
                                            <a href="dagger-settings.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="users" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Profile Info</a>
                                            <a href="dagger-login.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="power" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="activities-panel" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                                    <div data-tw-merge="" class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]"><a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14" data-tw-dismiss="modal" href="javascript:;">
                                            <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                                        </a>
                                        <div data-tw-merge="" class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                                            <h2 class="mr-auto text-base font-medium">Latest Activities</h2>
                                        </div>
                                        <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                                            <div class="flex flex-col gap-3.5 px-5 py-3">
                                                <div class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                    <div class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="">
                                                                Uploaded video files
                                                            </a>
                                                            <div class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Shared video tutorials
                                                                <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 success">
                                                                    <span class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">Completed</span>
                                                                </span>
                                                            </div>
                                                            <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                <div class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div class="max-w-[8rem] truncate font-medium text-primary">
                                                                            video1.mp4
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            15MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div class="max-w-[8rem] truncate font-medium text-primary">
                                                                            video2.mov
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            12.5MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sat Aug 2020
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="">
                                                                Uploaded presentations
                                                            </a>
                                                            <div class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Added slides for the team meeting
                                                                <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 warning">
                                                                    <span class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">Completed</span>
                                                                </span>
                                                            </div>
                                                            <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                <div class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div class="max-w-[8rem] truncate font-medium text-primary">
                                                                            presentation1.pptx
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            5.2MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div class="max-w-[8rem] truncate font-medium text-primary">
                                                                            presentation2.ppt
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            4.5MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Tue Sep 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="">
                                                                Logged out
                                                            </a>
                                                            <div class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Signed out from the dashboard
                                                                <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 success">
                                                                    <span class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">Info</span>
                                                                </span>
                                                            </div>
                                                            <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-[80%]">
                                                                <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                    <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                        <img src="<?= $this->Url->image('/projects/project9-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                        <img src="<?= $this->Url->image('/projects/project7-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                        <img src="<?= $this->Url->image('/projects/project8-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Mon Jan 2021
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="">
                                                                Uploaded audio recordings
                                                            </a>
                                                            <div class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Recorded podcast episodes
                                                                <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 success">
                                                                    <span class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">Completed</span>
                                                                </span>
                                                            </div>
                                                            <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                <div class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div class="max-w-[8rem] truncate font-medium text-primary">
                                                                            audio1.mp3
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            4.8MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div class="max-w-[8rem] truncate font-medium text-primary">
                                                                            audio2.wav
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            6.2MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sun Mar 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="">
                                                                Uploaded a spreadsheet
                                                            </a>
                                                            <div class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Added financial data for Q3
                                                                <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 warning">
                                                                    <span class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">Completed</span>
                                                                </span>
                                                            </div>
                                                            <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                <div class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div class="max-w-[8rem] truncate font-medium text-primary">
                                                                            spreadsheet.xlsx
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            3.4MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Wed Oct 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="notifications-panel" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                                    <div data-tw-merge="" class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]"><a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14" data-tw-dismiss="modal" href="javascript:;">
                                            <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                                        </a>
                                        <div data-tw-merge="" class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                                            <h2 class="mr-auto text-base font-medium">Notifications</h2>
                                            <button data-tw-merge="" class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 hidden sm:flex"><i data-tw-merge="" data-lucide="shield-check" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Mark all as
                                                read</button>
                                        </div>
                                        <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                                            <div class="flex flex-col gap-0.5 p-3">
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded code files</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added new code modules
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon May 2021
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded video files</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Shared video tutorials
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon Aug 2021
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded documents</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Uploaded important project documents
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon Mar 2021
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Posted a status update</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Shared thoughts on the project
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon Jul 2022
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Task completed: Review Project Proposal</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Reviewed and provided feedback
                                                        </div>
                                                        <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project6-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project6-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project7-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Tue Oct 2021
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Logged in successfully</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Accessed the dashboard
                                                        </div>
                                                        <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project1-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project9-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project6-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Wed May 2020
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Updated profile picture</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Changed profile photo
                                                        </div>
                                                        <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project3-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project4-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project3-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Sat Nov 2021
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded images</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added project screenshots
                                                        </div>
                                                        <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project1-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project10-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project4-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon Nov 2020
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Logged out</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Signed out from the dashboard
                                                        </div>
                                                        <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project1-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project9-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project10-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon May 2021
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded a spreadsheet</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added financial data for Q3
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon Sep 2022
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded audio recordings</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Recorded podcast episodes
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Sat Nov 2022
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Added a new contact</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added a new contact, Sarah
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Wed May 2020
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Received 5 new emails</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Inbox updates
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Sat Aug 2022
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded presentations</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added slides for the team meeting
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Thu Apr 2021
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="">
                                                    <div>
                                                        <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="<?= $this->Url->image('/users/user5-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Received a friend request</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Friend request from John
                                                        </div>
                                                        <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project5-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project10-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="<?= $this->Url->image('/projects/project4-400x400.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Sat Aug 2022
                                                        </div>
                                                    </div>
                                                    <div class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="switch-account" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                                <div data-tw-merge="" class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400 h-14 justify-center">
                                        <h2 class="text-base font-medium">Switch Account</h2>
                                    </div>
                                    <div data-tw-merge="" class="p-5 px-2.5 pb-4 pt-3.5">
                                        <div class="flex flex-col gap-1.5">
                                            <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="<?= $this->Url->image('/users/user3-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3.5">
                                                    <div class="font-medium">Leonardo DiCaprio</div>
                                                    <div class="mt-0.5 text-xs text-slate-500">
                                                        leonardo.dicaprio@left4code.com
                                                    </div>
                                                </div>
                                                <div class="relative ml-auto h-7 w-7">
                                                    <input data-tw-merge="" checked="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-0" value="switch-account">
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                        <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                    </div>
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="<?= $this->Url->image('/users/user10-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3.5">
                                                    <div class="font-medium">Julia Roberts</div>
                                                    <div class="mt-0.5 text-xs text-slate-500">
                                                        julia.roberts@left4code.com
                                                    </div>
                                                </div>
                                                <div class="relative ml-auto h-7 w-7">
                                                    <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-1" value="switch-account">
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                        <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                    </div>
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="<?= $this->Url->image('/users/user2-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3.5">
                                                    <div class="font-medium">Meryl Streep</div>
                                                    <div class="mt-0.5 text-xs text-slate-500">
                                                        meryl.streep@left4code.com
                                                    </div>
                                                </div>
                                                <div class="relative ml-auto h-7 w-7">
                                                    <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-2" value="switch-account">
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                        <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                    </div>
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="<?= $this->Url->image('/users/user6-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3.5">
                                                    <div class="font-medium">Jennifer Lawrence</div>
                                                    <div class="mt-0.5 text-xs text-slate-500">
                                                        jennifer.lawrence@left4code.com
                                                    </div>
                                                </div>
                                                <div class="relative ml-auto h-7 w-7">
                                                    <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-3" value="switch-account">
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                        <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                    </div>
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="<?= $this->Url->image('/users/user9-50x50.jpg')?>" alt="Tailwise - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3.5">
                                                    <div class="font-medium">Denzel Washington</div>
                                                    <div class="mt-0.5 text-xs text-slate-500">
                                                        denzel.washington@left4code.com
                                                    </div>
                                                </div>
                                                <div class="relative ml-auto h-7 w-7">
                                                    <input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0" id="switch-account-4" value="switch-account">
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                        <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                                    </div>
                                                    <div class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400 flex h-14 items-center justify-center text-center"><a class="-mt-1 block text-primary" href="">
                                            Login into an Existing Account
                                        </a></div>
                                </div>
                            </div>
                            <!-- END: Notification & User Menu -->
                        </div>
                    </div>
                </div>
                <div class="side-menu__content absolute inset-y-0 z-10 xl:top-[65px] xl:z-0">
                    <div class="box xl:ml-0 border-y-0 border-l-0 rounded-none w-[275px] duration-300 transition-[width,margin] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] relative overflow-hidden h-full flex flex-col after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:z-[-1] after:xl:hidden group-[.side-menu--mobile-menu-open]:ml-0 group-[.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
                        <div class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                            <a class="mt-5 ml-5" href="">
                                <i data-tw-merge="" data-lucide="x" class="stroke-[1] w-8 h-8 text-white"></i>
                            </a>
                        </div>
                        <div class="scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
                            <ul class="scrollable">
                                <!-- BEGIN: First Child -->
                                <li class="side-menu__divider">
                                    DASHBOARDS
                                </li>
                                <li>
                                    <a href="dagger-dashboard-overview-1.html" class="side-menu__link side-menu__link--active ">
                                        <i data-tw-merge="" data-lucide="gauge-circle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">E-Commerce</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-dashboard-overview-2.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="activity-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">CRM</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-dashboard-overview-3.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="album" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Hospital</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-dashboard-overview-4.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="book-marked" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Factory</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-dashboard-overview-5.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="hard-drive" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Banking</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-dashboard-overview-6.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="mouse-pointer-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Cafe</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-dashboard-overview-7.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="shield-half" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Crypto</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-dashboard-overview-8.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="building" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Hotel</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li class="side-menu__divider">
                                    APPS
                                </li>
                                <li>
                                    <a href="dagger-inbox.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="gantt-chart-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Inbox</div>
                                        <div class="side-menu__link__badge">
                                            4
                                        </div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-file-manager-list.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="panel-right-inactive" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">File Manager List</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-file-manager-grid.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="panel-top-close" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">File Manager Grid</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-point-of-sale.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="panel-top-inactive" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Point of Sale</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-chat.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="mail-open" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Chat</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-calendar.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="calendar-range" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Calendar</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li class="side-menu__divider">
                                    UI WIDGETS
                                </li>
                                <li>
                                    <a href="dagger-creative.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="album" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Creative</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-dynamic.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="activity-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Dynamic</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-interactive.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="keyboard" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Interactive</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li class="side-menu__divider">
                                    USER MANAGEMENT
                                </li>
                                <li>
                                    <a href="dagger-users.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="user-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Users</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-departments.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="cake-slice" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Departments</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-add-user.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="package-plus" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Add User</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li class="side-menu__divider">
                                    PERSONAL DASHBOARD
                                </li>
                                <li>
                                    <a href="dagger-profile-overview.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="presentation" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Profile Overview</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-profile-overview-events.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="calendar-range" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Events</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-profile-overview-achievements.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="medal" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Achievements</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-profile-overview-contacts.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="tablet-smartphone" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Contacts</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-profile-overview-default.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="snail" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Default</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li class="side-menu__divider">
                                    GENERAL SETTINGS
                                </li>
                                <li>
                                    <a href="dagger-settings.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="briefcase" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Profile Info</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-settings-email-settings.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="mail-check" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Email Settings</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-settings-security.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="fingerprint" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Security</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-settings-preferences.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="radar" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Preferences</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-settings-two-factor-authentication.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="door-open" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Two-factor Authentication</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-settings-device-history.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="keyboard" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Device History</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-settings-notification-settings.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="ticket" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Notification Settings</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-settings-connected-services.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="bus-front" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Connected Services</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-settings-social-media-links.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="podcast" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Social Media Links</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-settings-account-deactivation.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="package-x" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Account Deactivation</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li class="side-menu__divider">
                                    ACCOUNT
                                </li>
                                <li>
                                    <a href="dagger-billing.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="percent-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Billing</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-invoice.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="database-zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Invoice</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li class="side-menu__divider">
                                    E-COMMERCE
                                </li>
                                <li>
                                    <a href="dagger-categories.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="book-marked" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Categories</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-add-product.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="compass" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Add Product</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="table2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Products</div>
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <ul class="hidden">
                                        <li>
                                            <a href="dagger-product-list.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="layout-panel-top" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Product List
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                        <li>
                                            <a href="dagger-product-grid.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="layout-panel-left" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Product Grid
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                    </ul>
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="sigma-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Transactions</div>
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <ul class="hidden">
                                        <li>
                                            <a href="dagger-transaction-list.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="divide-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Transaction List
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                        <li>
                                            <a href="dagger-transaction-detail.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="plus-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Transaction Detail
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                    </ul>
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="file-archive" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Sellers</div>
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <ul class="hidden">
                                        <li>
                                            <a href="dagger-seller-list.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="file-image" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Seller List
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                        <li>
                                            <a href="dagger-seller-detail.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="file-box" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Seller Detail
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                    </ul>
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-reviews.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="goal" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Reviews</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li class="side-menu__divider">
                                    AUTHENTICATIONS
                                </li>
                                <li>
                                    <a href="dagger-login.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="book-key" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Login</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-register.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="book-lock" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Register</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li class="side-menu__divider">
                                    COMPONENTS
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="layout-panel-left" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Table</div>
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <ul class="hidden">
                                        <li>
                                            <a href="dagger-regular-table.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="flip-vertical" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Regular Table
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                        <li>
                                            <a href="dagger-tabulator.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="flip-horizontal" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Tabulator
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                    </ul>
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="memory-stick" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Overlay</div>
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <ul class="hidden">
                                        <li>
                                            <a href="dagger-modal.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="menu-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Modal
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                        <li>
                                            <a href="dagger-slideover.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="newspaper" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Slide Over
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                        <li>
                                            <a href="dagger-notification.html" class="side-menu__link ">
                                                <i data-tw-merge="" data-lucide="panel-bottom" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                <div class="side-menu__link__title">
                                                    Notification
                                                </div>
                                            </a>
                                            <!-- BEGIN: Third Child -->
                                            <!-- END: Third Child -->
                                        </li>
                                    </ul>
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-tab.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="package2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Tab</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-accordion.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="pocket" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Accordion</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-button.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="plus-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Button</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-alert.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="presentation" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Alert</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-progress-bar.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="shield-ellipsis" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Progress Bar</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-tooltip.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="clapperboard" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Tooltip</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-dropdown.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="flip-vertical" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Dropdown</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-typography.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="file-type2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Typography</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-icon.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="aperture" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Icon</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-loading-icon.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="droplets" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Loading Icon</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-regular-form.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="gallery-horizontal-end" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Regular Form</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-datepicker.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="microwave" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Datepicker</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-tom-select.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="disc3" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Tom Select</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-file-upload.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="sandwich" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">File Upload</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-wysiwyg-editor.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="hop-off" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Wysiwyg Editor</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-validation.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="clipboard-type" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Validation</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-chart.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="pie-chart" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Chart</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-slider.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="kanban-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Slider</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <li>
                                    <a href="dagger-image-zoom.html" class="side-menu__link ">
                                        <i data-tw-merge="" data-lucide="image" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">Image Zoom</div>
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    <!-- END: Second Child -->
                                </li>
                                <!-- END: First Child -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                <div class="container-fluid">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Html->script([
        'vendors/dom.js',
        'vendors/tailwind-merge.js',
        'vendors/lucide.js',
        'vendors/dayjs.js',
        'vendors/litepicker.js',
        'vendors/tiny-slider.js',
        'vendors/popper.js',
        'vendors/dropdown.js',
        'vendors/tippy.js',
        'vendors/simplebar.js',
        'vendors/transition.js',
        'vendors/chartjs.js',
        'vendors/modal.js',
        'components/base/theme-color.js',
        'components/base/lucide.js',
        'components/base/litepicker.js',
        'components/base/tiny-slider.js',
        'utils/colors.js',
        'utils/helper.js',
        'components/report-line-chart.js',
        'components/report-donut-chart-3.js',
        'components/base/tippy.js',
        'themes/dagger.js',
        'components/quick-search.js']) ?>
    <?= $this->fetch('script') ?>
</body>
</html>
