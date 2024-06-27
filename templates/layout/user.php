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
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        'vendors/litepicker.css',
        'vendors/simplebar.css',
        'themes/dagger.css',
        'vendors/dropzone.css',
        'vendors/highlight.css',
        'app.css'])?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
</body>
    <div class="container grid grid-cols-12 px-5 py-10 sm:px-10 sm:py-14 md:px-36 lg:h-screen lg:max-w-[1550px] lg:py-0 lg:pl-14 lg:pr-12 xl:px-24 2xl:max-w-[1750px]">
        <div class="relative z-50 h-full col-span-12 p-7 sm:p-14 bg-white rounded-2xl lg:bg-transparent lg:pr-10 lg:col-span-5 xl:pr-24 2xl:col-span-4 lg:p-0 before:content-[''] before:absolute before:inset-0 before:-mb-3.5 before:bg-white/40 before:rounded-2xl before:mx-5">
            <div class="relative z-10 flex flex-col justify-center w-full h-full py-2 lg:py-32">
                <div class="flex h-[55px] w-[55px] items-center justify-center rounded-[0.8rem] border border-primary/30">
                    <div class="relative flex h-[50px] w-[50px] items-center justify-center rounded-[0.6rem] bg-white bg-gradient-to-b from-theme-1/90 to-theme-2/90">
                        <div class="relative h-[26px] w-[26px] -rotate-45 [&_div]:bg-white">
                            <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[20%] rounded-full opacity-50"></div>
                            <div class="absolute inset-0 m-auto h-[120%] w-[20%] rounded-full"></div>
                            <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[20%] rounded-full opacity-50"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container fixed inset-0 grid h-screen w-screen grid-cols-12 pl-14 pr-12 lg:max-w-[1550px] xl:px-24 2xl:max-w-[1750px]">
        <div class="relative h-screen col-span-12 lg:col-span-5 2xl:col-span-4 z-20 after:bg-white after:hidden after:lg:block after:content-[''] after:absolute after:right-0 after:inset-y-0 after:bg-gradient-to-b after:from-white after:to-slate-100/80 after:w-[800%] after:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0] before:content-[''] before:hidden before:lg:block before:absolute before:right-0 before:inset-y-0 before:my-6 before:bg-gradient-to-b before:from-white/10 before:to-slate-50/10 before:bg-white/50 before:w-[800%] before:-mr-4 before:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0]"></div>
        <div class="h-full col-span-7 2xl:col-span-8 lg:relative before:content-[''] before:absolute before:lg:-ml-10 before:left-0 before:inset-y-0 before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:w-screen before:lg:w-[800%] after:content-[''] after:absolute after:inset-y-0 after:left-0 after:w-screen after:lg:w-[800%] after:bg-texture-white after:bg-fixed after:bg-center after:lg:bg-[25rem_-25rem] after:bg-no-repeat">
            <div class="sticky top-0 z-10 flex-col justify-center hidden h-screen ml-16 lg:flex xl:ml-28 2xl:ml-36">
                <div class="text-[2.6rem] font-medium leading-[1.4] text-white xl:text-5xl xl:leading-[1.2]">
                    <p>프로젝트 관리 사이트</p>
                    <p>in Best Development</p>
                </div>
                <div class="mt-5 text-base leading-relaxed text-white/70 xl:text-lg">
                    <p>구하라 그러면 너희에게 주실 것이요 찾으라 그러면 찾을 것이요 문을 두드리라 그러면 너희에게 열릴 것이니 구하는 이마다 얻을 것이요 찾는 이가 찾을 것이요 두드리는 이에게 열릴 것이니라</p>
                    <p>마태복음 7:7-8</p>
                </div>
                <!-- <div class="flex flex-col gap-3 mt-10 xl:flex-row xl:items-center">
                    <div class="flex items-center">
                        <div class="image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                            <img data-placement="top" title="Johnny Depp" src="dist/images/users/user7-50x50.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                        </div>
                        <div class="-ml-3 image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                            <img data-placement="top" title="Tom Hanks" src="dist/images/users/user1-50x50.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                        </div>
                        <div class="-ml-3 image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                            <img data-placement="top" title="Julia Roberts" src="dist/images/users/user10-50x50.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                        </div>
                        <div class="-ml-3 image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                            <img data-placement="top" title="Brad Pitt" src="dist/images/users/user5-50x50.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                        </div>
                    </div>
                    <div class="text-base text-white/70 xl:ml-2 2xl:ml-3">
                        Over 7k+ strong and growing! Your journey begins here.
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <?= $this->Html->script([
        'vendors/dom.js',
        'vendors/tailwind-merge.js',
        'vendors/tippy.js',
        'vendors/lucide.js',
        'vendors/modal.js',
        'vendors/dropzone.js',
        'components/base/theme-color.js',
        'components/base/tippy.js',
        'components/base/dropzone.js',
        'components/base/lucide.js']) ?>
    <?= $this->fetch('script') ?>
</body>
</html>
