<div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
            <div class="text-base font-medium group-[.mode--light]:text-white">
                Settings
            </div>
            <!-- <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                <button data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i data-tw-merge="" data-lucide="external-link" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                    Go to My Profile</button>
            </div> -->
        </div>
        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
            <div class="relative col-span-12 xl:col-span-3">
                <div class="sticky top-[104px]">
                    <div class="box box--stacked flex flex-col px-5 pb-6 pt-5">
                        <a href="dagger-settings.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary active">
                            <i data-tw-merge="" data-lucide="app-window" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            내 정보
                        </a>
                        <a href="dagger-settings-email-settings.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                            <i data-tw-merge="" data-lucide="mail-check" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            Email Settings
                        </a>
                        <a href="dagger-settings-security.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                            <i data-tw-merge="" data-lucide="key-round" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            Security
                        </a>
                        <a href="dagger-settings-preferences.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                            <i data-tw-merge="" data-lucide="package-check" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            Preferences
                        </a>
                        <a href="dagger-settings-two-factor-authentication.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                            <i data-tw-merge="" data-lucide="shield-check" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            Two-factor Authentication
                        </a>
                        <a href="dagger-settings-device-history.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                            <i data-tw-merge="" data-lucide="smartphone" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            Device History
                        </a>
                        <a href="dagger-settings-notification-settings.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                            <i data-tw-merge="" data-lucide="bell-dot" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            Notification Settings
                        </a>
                        <a href="dagger-settings-connected-services.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                            <i data-tw-merge="" data-lucide="workflow" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            Connected Services
                        </a>
                        <a href="dagger-settings-social-media-links.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                            <i data-tw-merge="" data-lucide="podcast" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            Social Media Links
                        </a>
                        <a href="dagger-settings-account-deactivation.html" class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                            <i data-tw-merge="" data-lucide="trash2" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                            Account Deactivation
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 flex flex-col gap-y-7 xl:col-span-9">
                <div class="box box--stacked flex flex-col p-1.5">
                    <div class="relative h-60 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                        <div class="w-full h-full relative overflow-hidden before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem] after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]"></div>
                        <div class="absolute inset-x-0 top-0 mx-auto mt-36 h-32 w-32">
                            <div class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
                                <?php
                                    $identify = $this->request->getAttribute('identity');
                                    if($identify != null) {
                                        echo "<img src=\"".$this->Url->build(['controller' => 'profile', 'action' => 'view', $identify->id])."\"alt=\"Tailwise - Admin Dashboard Template\">";
                                    }
                                ?>
                            </div>
                            <div class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-3 rounded-[0.6rem] bg-slate-50 p-5 pt-12 sm:flex-row sm:items-end">
                        <div>
                            <label data-tw-merge="" class="mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex items-center text-slate-500">
                                Who can see your profile photo?
                                <span data-placement="top" title="Low" class="tooltip cursor-pointer ml-1.5"><i data-tw-merge="" data-lucide="info" class="h-3.5 w-3.5 stroke-[1.3] text-slate-500"></i></span>
                            </label>
                            <div class="relative mt-2.5">
                                <i data-tw-merge="" data-lucide="globe" class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                                <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mr-3 rounded-[0.5rem] pl-9 sm:w-44">
                                    <option value="custom-date">Anyone</option>
                                    <option value="daily">Only you</option>
                                </select>
                            </div>
                        </div>
                        <button data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 border-primary/50 sm:ml-auto"><i data-tw-merge="" data-lucide="image" class="mr-2.5 h-4 w-4 stroke-[1.3]"></i>
                            Upload Cover</button>
                    </div>
                </div>
                <div class="box box--stacked flex flex-col p-5">
                    <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                        Profile Info
                    </div>
                    <div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Full Name</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Enter your full legal name as it appears on your
                                        official identification.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <input data-tw-merge="" type="text" placeholder="Jennifer" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                    <input data-tw-merge="" type="text" placeholder="Lawrence" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Date of Birth</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        This information is required to verify your age and
                                        provide age-appropriate services.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <input data-tw-merge="" type="text" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Gender</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Select your gender from the options.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <div class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <div data-tw-merge="" class="flex items-center"><input data-tw-merge="" type="radio" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-1" value="">
                                            <label data-tw-merge="" for="checkbox-switch-1" class="cursor-pointer ml-2">Male</label>
                                        </div>
                                    </div>
                                    <div class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <div data-tw-merge="" class="flex items-center"><input data-tw-merge="" type="radio" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-2" value="">
                                            <label data-tw-merge="" for="checkbox-switch-2" class="cursor-pointer ml-2">Female</label>
                                        </div>
                                    </div>
                                    <div class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <div data-tw-merge="" class="flex items-center"><input data-tw-merge="" type="radio" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-3" value="">
                                            <label data-tw-merge="" for="checkbox-switch-3" class="cursor-pointer ml-2">Prefer Not to Say</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Email</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Please provide a valid email address that you have
                                        access to.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <input data-tw-merge="" type="text" placeholder="jennifer.lawrence@left4code.com" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Phone Number</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Please provide a valid phone number where we can reach
                                        you if needed.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <input data-tw-merge="" type="text" placeholder="+1 (678) 901-2345" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                    <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 md:w-36 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <option value="office">Office</option>
                                        <option value="home">Home</option>
                                    </select>
                                </div>
                                <a class="-mb-1 mt-3.5 flex items-center font-medium text-primary" href="">
                                    <i data-tw-merge="" data-lucide="plus" class="mr-1 h-4 w-4 stroke-[1.3]"></i>
                                    Add phone
                                </a>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Department</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Choose your department or division from the list of
                                        available options.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                                    <option value="CRM Team">
                                        CRM Team
                                    </option>
                                    <option value="Human Resources">
                                        Human Resources
                                    </option>
                                    <option value="Account Management">
                                        Account Management
                                    </option>
                                    <option value="Product Management">
                                        Product Management
                                    </option>
                                    <option value="Marketing Department">
                                        Marketing Department
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Account Type</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Your account type determines the features and
                                        privileges you will have on this platform.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <div class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <div data-tw-merge="" class="flex items-center"><input data-tw-merge="" type="radio" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-4" value="">
                                            <label data-tw-merge="" for="checkbox-switch-4" class="cursor-pointer ml-2">Individual</label>
                                        </div>
                                    </div>
                                    <div class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <div data-tw-merge="" class="flex items-center"><input data-tw-merge="" type="radio" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-5" value="">
                                            <label data-tw-merge="" for="checkbox-switch-5" class="cursor-pointer ml-2">Company</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Country</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Please specify the country you are currently residing
                                        in.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <select data-placeholder="Select your country" class="tom-select w-full">
                                    <option value="0">
                                        Saint Barthélemy
                                    </option>
                                    <option value="1">
                                        Tokelau
                                    </option>
                                    <option value="2">
                                        South Georgia
                                    </option>
                                    <option value="3">
                                        Philippines
                                    </option>
                                    <option value="4">
                                        Kosovo
                                    </option>
                                    <option value="5">
                                        Trinidad and Tobago
                                    </option>
                                    <option value="6">
                                        Kiribati
                                    </option>
                                    <option value="7">
                                        Ecuador
                                    </option>
                                    <option value="8">
                                        Brunei
                                    </option>
                                    <option value="9">
                                        Anguilla
                                    </option>
                                    <option value="10">
                                        Botswana
                                    </option>
                                    <option value="11">
                                        Suriname
                                    </option>
                                    <option value="12">
                                        Gambia
                                    </option>
                                    <option value="13">
                                        Guatemala
                                    </option>
                                    <option value="14">
                                        British Virgin Islands
                                    </option>
                                    <option value="15">
                                        Cayman Islands
                                    </option>
                                    <option value="16">
                                        Pakistan
                                    </option>
                                    <option value="17">
                                        South Korea
                                    </option>
                                    <option value="18">
                                        Nauru
                                    </option>
                                    <option value="19">
                                        Christmas Island
                                    </option>
                                    <option value="20">
                                        Rwanda
                                    </option>
                                    <option value="21">
                                        Cuba
                                    </option>
                                    <option value="22">
                                        Zambia
                                    </option>
                                    <option value="23">
                                        Caribbean Netherlands
                                    </option>
                                    <option value="24">
                                        Bhutan
                                    </option>
                                    <option value="25">
                                        Madagascar
                                    </option>
                                    <option value="26">
                                        Honduras
                                    </option>
                                    <option value="27">
                                        Libya
                                    </option>
                                    <option value="28">
                                        Canada
                                    </option>
                                    <option value="29">
                                        Uganda
                                    </option>
                                    <option value="30">
                                        Cape Verde
                                    </option>
                                    <option value="31">
                                        Mauritania
                                    </option>
                                    <option value="32">
                                        Palau
                                    </option>
                                    <option value="33">
                                        Malta
                                    </option>
                                    <option value="34">
                                        Curaçao
                                    </option>
                                    <option value="35">
                                        Qatar
                                    </option>
                                    <option value="36">
                                        Micronesia
                                    </option>
                                    <option value="37">
                                        Kazakhstan
                                    </option>
                                    <option value="38">
                                        Angola
                                    </option>
                                    <option value="39">
                                        Mongolia
                                    </option>
                                    <option value="40">
                                        Algeria
                                    </option>
                                    <option value="41">
                                        Norway
                                    </option>
                                    <option value="42">
                                        Cook Islands
                                    </option>
                                    <option value="43">
                                        Guernsey
                                    </option>
                                    <option value="44">
                                        Jamaica
                                    </option>
                                    <option value="45">
                                        French Southern and Antarctic Lands
                                    </option>
                                    <option value="46">
                                        Nepal
                                    </option>
                                    <option value="47">
                                        Portugal
                                    </option>
                                    <option value="48">
                                        Georgia
                                    </option>
                                    <option value="49">
                                        Sudan
                                    </option>
                                    <option value="50">
                                        Turkey
                                    </option>
                                    <option value="51">
                                        Bangladesh
                                    </option>
                                    <option value="52">
                                        Tonga
                                    </option>
                                    <option value="53">
                                        Armenia
                                    </option>
                                    <option value="54">
                                        Serbia
                                    </option>
                                    <option value="55">
                                        Western Sahara
                                    </option>
                                    <option value="56">
                                        South Africa
                                    </option>
                                    <option value="57">
                                        Colombia
                                    </option>
                                    <option value="58">
                                        French Polynesia
                                    </option>
                                    <option value="59">
                                        Belarus
                                    </option>
                                    <option value="60">
                                        Isle of Man
                                    </option>
                                    <option value="61">
                                        Bahamas
                                    </option>
                                    <option value="62">
                                        Chile
                                    </option>
                                    <option value="63">
                                        Vatican City
                                    </option>
                                    <option value="64">
                                        Latvia
                                    </option>
                                    <option value="65">
                                        Heard Island and McDonald Islands
                                    </option>
                                    <option value="66">
                                        New Zealand
                                    </option>
                                    <option value="67">
                                        Equatorial Guinea
                                    </option>
                                    <option value="68">
                                        Andorra
                                    </option>
                                    <option value="69">
                                        Netherlands
                                    </option>
                                    <option value="70">
                                        Saint Lucia
                                    </option>
                                    <option value="71">
                                        Slovakia
                                    </option>
                                    <option value="72">
                                        Tajikistan
                                    </option>
                                    <option value="73">
                                        Finland
                                    </option>
                                    <option value="74">
                                        Oman
                                    </option>
                                    <option value="75">
                                        Comoros
                                    </option>
                                    <option value="76">
                                        Nigeria
                                    </option>
                                    <option value="77">
                                        Belgium
                                    </option>
                                    <option value="78">
                                        Saint Helena, Ascension and Tristan da Cunha
                                    </option>
                                    <option value="79">
                                        Sri Lanka
                                    </option>
                                    <option value="80">
                                        Marshall Islands
                                    </option>
                                    <option value="81">
                                        Kenya
                                    </option>
                                    <option value="82">
                                        Niue
                                    </option>
                                    <option value="83">
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="84">
                                        Estonia
                                    </option>
                                    <option value="85">
                                        Lesotho
                                    </option>
                                    <option value="86">
                                        Montserrat
                                    </option>
                                    <option value="87">
                                        Bolivia
                                    </option>
                                    <option value="88">
                                        Guadeloupe
                                    </option>
                                    <option value="89">
                                        Saint Pierre and Miquelon
                                    </option>
                                    <option value="90">
                                        Papua New Guinea
                                    </option>
                                    <option value="91">
                                        Timor-Leste
                                    </option>
                                    <option value="92">
                                        Macau
                                    </option>
                                    <option value="93">
                                        Faroe Islands
                                    </option>
                                    <option value="94">
                                        Åland Islands
                                    </option>
                                    <option value="95">
                                        Peru
                                    </option>
                                    <option value="96">
                                        Antarctica
                                    </option>
                                    <option value="97">
                                        Saint Martin
                                    </option>
                                    <option value="98">
                                        Niger
                                    </option>
                                    <option value="99">
                                        Grenada
                                    </option>
                                    <option value="100">
                                        Fiji
                                    </option>
                                    <option value="101">
                                        Belize
                                    </option>
                                    <option value="102">
                                        Burkina Faso
                                    </option>
                                    <option value="103">
                                        Seychelles
                                    </option>
                                    <option value="104">
                                        Gibraltar
                                    </option>
                                    <option value="105">
                                        Switzerland
                                    </option>
                                    <option value="106">
                                        DR Congo
                                    </option>
                                    <option value="107">
                                        Thailand
                                    </option>
                                    <option value="108">
                                        Austria
                                    </option>
                                    <option value="109">
                                        Northern Mariana Islands
                                    </option>
                                    <option value="110">
                                        Lithuania
                                    </option>
                                    <option value="111">
                                        Czechia
                                    </option>
                                    <option value="112">
                                        Albania
                                    </option>
                                    <option value="113">
                                        Denmark
                                    </option>
                                    <option value="114">
                                        Barbados
                                    </option>
                                    <option value="115">
                                        Iceland
                                    </option>
                                    <option value="116">
                                        Tanzania
                                    </option>
                                    <option value="117">
                                        Liberia
                                    </option>
                                    <option value="118">
                                        Aruba
                                    </option>
                                    <option value="119">
                                        Azerbaijan
                                    </option>
                                    <option value="120">
                                        Antigua and Barbuda
                                    </option>
                                    <option value="121">
                                        Sweden
                                    </option>
                                    <option value="122">
                                        Svalbard and Jan Mayen
                                    </option>
                                    <option value="123">
                                        Ivory Coast
                                    </option>
                                    <option value="124">
                                        Ghana
                                    </option>
                                    <option value="125">
                                        Falkland Islands
                                    </option>
                                    <option value="126">
                                        Mexico
                                    </option>
                                    <option value="127">
                                        Malawi
                                    </option>
                                    <option value="128">
                                        Turkmenistan
                                    </option>
                                    <option value="129">
                                        Brazil
                                    </option>
                                    <option value="130">
                                        Jordan
                                    </option>
                                    <option value="131">
                                        Republic of the Congo
                                    </option>
                                    <option value="132">
                                        Kuwait
                                    </option>
                                    <option value="133">
                                        Mali
                                    </option>
                                    <option value="134">
                                        United States Virgin Islands
                                    </option>
                                    <option value="135">
                                        Iraq
                                    </option>
                                    <option value="136">
                                        Samoa
                                    </option>
                                    <option value="137">
                                        Namibia
                                    </option>
                                    <option value="138">
                                        São Tomé and Príncipe
                                    </option>
                                    <option value="139">
                                        Slovenia
                                    </option>
                                    <option value="140">
                                        Singapore
                                    </option>
                                    <option value="141">
                                        Cyprus
                                    </option>
                                    <option value="142">
                                        Taiwan
                                    </option>
                                    <option value="143">
                                        Israel
                                    </option>
                                    <option value="144">
                                        Myanmar
                                    </option>
                                    <option value="145">
                                        Bermuda
                                    </option>
                                    <option value="146">
                                        Greenland
                                    </option>
                                    <option value="147">
                                        Saint Vincent and the Grenadines
                                    </option>
                                    <option value="148">
                                        Norfolk Island
                                    </option>
                                    <option value="149">
                                        Uruguay
                                    </option>
                                    <option value="150">
                                        Indonesia
                                    </option>
                                    <option value="151">
                                        Eritrea
                                    </option>
                                    <option value="152">
                                        Luxembourg
                                    </option>
                                    <option value="153">
                                        Laos
                                    </option>
                                    <option value="154">
                                        American Samoa
                                    </option>
                                    <option value="155">
                                        Bouvet Island
                                    </option>
                                    <option value="156">
                                        Ukraine
                                    </option>
                                    <option value="157">
                                        Guinea
                                    </option>
                                    <option value="158">
                                        South Sudan
                                    </option>
                                    <option value="159">
                                        Puerto Rico
                                    </option>
                                    <option value="160">
                                        Japan
                                    </option>
                                    <option value="161">
                                        Morocco
                                    </option>
                                    <option value="162">
                                        Tunisia
                                    </option>
                                    <option value="163">
                                        China
                                    </option>
                                    <option value="164">
                                        Djibouti
                                    </option>
                                    <option value="165">
                                        Paraguay
                                    </option>
                                    <option value="166">
                                        Greece
                                    </option>
                                    <option value="167">
                                        North Macedonia
                                    </option>
                                    <option value="168">
                                        Italy
                                    </option>
                                    <option value="169">
                                        Yemen
                                    </option>
                                    <option value="170">
                                        Russia
                                    </option>
                                    <option value="171">
                                        Solomon Islands
                                    </option>
                                    <option value="172">
                                        Palestine
                                    </option>
                                    <option value="173">
                                        Ireland
                                    </option>
                                    <option value="174">
                                        Cameroon
                                    </option>
                                    <option value="175">
                                        Wallis and Futuna
                                    </option>
                                    <option value="176">
                                        Costa Rica
                                    </option>
                                    <option value="177">
                                        Bulgaria
                                    </option>
                                    <option value="178">
                                        Réunion
                                    </option>
                                    <option value="179">
                                        Mauritius
                                    </option>
                                    <option value="180">
                                        San Marino
                                    </option>
                                    <option value="181">
                                        Liechtenstein
                                    </option>
                                    <option value="182">
                                        Australia
                                    </option>
                                    <option value="183">
                                        Malaysia
                                    </option>
                                    <option value="184">
                                        Burundi
                                    </option>
                                    <option value="185">
                                        Gabon
                                    </option>
                                    <option value="186">
                                        Jersey
                                    </option>
                                    <option value="187">
                                        Poland
                                    </option>
                                    <option value="188">
                                        Egypt
                                    </option>
                                    <option value="189">
                                        Benin
                                    </option>
                                    <option value="190">
                                        Dominican Republic
                                    </option>
                                    <option value="191">
                                        Kyrgyzstan
                                    </option>
                                    <option value="192">
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="193">
                                        Eswatini
                                    </option>
                                    <option value="194">
                                        Hungary
                                    </option>
                                    <option value="195">
                                        Panama
                                    </option>
                                    <option value="196">
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="197">
                                        Lebanon
                                    </option>
                                    <option value="198">
                                        Mozambique
                                    </option>
                                    <option value="199">
                                        Afghanistan
                                    </option>
                                    <option value="200">
                                        Vietnam
                                    </option>
                                    <option value="201">
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="202">
                                        Saudi Arabia
                                    </option>
                                    <option value="203">
                                        Venezuela
                                    </option>
                                    <option value="204">
                                        Romania
                                    </option>
                                    <option value="205">
                                        United States
                                    </option>
                                    <option value="206">
                                        Monaco
                                    </option>
                                    <option value="207">
                                        Chad
                                    </option>
                                    <option value="208">
                                        Togo
                                    </option>
                                    <option value="209">
                                        Maldives
                                    </option>
                                    <option value="210">
                                        Croatia
                                    </option>
                                    <option value="211">
                                        Hong Kong
                                    </option>
                                    <option value="212">
                                        Bahrain
                                    </option>
                                    <option value="213">
                                        Guam
                                    </option>
                                    <option value="214">
                                        Martinique
                                    </option>
                                    <option value="215">
                                        India
                                    </option>
                                    <option value="216">
                                        Cambodia
                                    </option>
                                    <option value="217">
                                        Germany
                                    </option>
                                    <option value="218">
                                        Spain
                                    </option>
                                    <option value="219">
                                        El Salvador
                                    </option>
                                    <option value="220">
                                        Syria
                                    </option>
                                    <option value="221">
                                        Dominica
                                    </option>
                                    <option value="222">
                                        Bosnia and Herzegovina
                                    </option>
                                    <option value="223">
                                        Zimbabwe
                                    </option>
                                    <option value="224">
                                        Mayotte
                                    </option>
                                    <option value="225">
                                        Iran
                                    </option>
                                    <option value="226">
                                        Montenegro
                                    </option>
                                    <option value="227">
                                        Senegal
                                    </option>
                                    <option value="228">
                                        Nicaragua
                                    </option>
                                    <option value="229">
                                        New Caledonia
                                    </option>
                                    <option value="230">
                                        Somalia
                                    </option>
                                    <option value="231">
                                        Vanuatu
                                    </option>
                                    <option value="232">
                                        Argentina
                                    </option>
                                    <option value="233">
                                        United Kingdom
                                    </option>
                                    <option value="234">
                                        Sierra Leone
                                    </option>
                                    <option value="235">
                                        Central African Republic
                                    </option>
                                    <option value="236">
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="237">
                                        United Arab Emirates
                                    </option>
                                    <option value="238">
                                        Uzbekistan
                                    </option>
                                    <option value="239">
                                        France
                                    </option>
                                    <option value="240">
                                        North Korea
                                    </option>
                                    <option value="241">
                                        Guinea-Bissau
                                    </option>
                                    <option value="242">
                                        Moldova
                                    </option>
                                    <option value="243">
                                        Pitcairn Islands
                                    </option>
                                    <option value="244">
                                        French Guiana
                                    </option>
                                    <option value="245">
                                        Sint Maarten
                                    </option>
                                    <option value="246">
                                        Tuvalu
                                    </option>
                                    <option value="247">
                                        Haiti
                                    </option>
                                    <option value="248">
                                        Ethiopia
                                    </option>
                                    <option value="249">
                                        Guyana
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Address Line 1</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Enter the primary line of your physical address,
                                        typically including your house or building number and
                                        street name.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <input data-tw-merge="" type="text" placeholder="Miami, USA" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Address Line 2</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        This field is optional and can be used to provide any
                                        additional address details, such as apartment number,
                                        suite, floor, or any other relevant information.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <input data-tw-merge="" type="text" placeholder="Miami, USA" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">City</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Enter the name of the city or locality where your
                                        address is located.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <input data-tw-merge="" type="text" placeholder="Miami, USA" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">State / Province</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Please select your state or province from the provided
                                        list.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <input data-tw-merge="" type="text" placeholder="Miami, USA" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Zip / Postal Code</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Enter the postal code or ZIP code associated with your
                                        address.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <input data-tw-merge="" type="text" placeholder="7641" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Exclusivity</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Check this box if you want to enable exclusive access
                                        to certain features or content on our platform.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div data-tw-merge="" class="flex items-center"><input data-tw-merge="" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-21" value="">
                                    <label data-tw-merge="" for="checkbox-switch-21" class="cursor-pointer ml-3.5 leading-relaxed text-slate-500">Opting to maintain exclusivity for your portfolio of
                                        items on this platform can significantly boost your
                                        earnings.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                        <button data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-4 md:w-auto">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
