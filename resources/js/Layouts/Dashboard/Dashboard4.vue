<template>  
    <!-- sidenav  -->
    <aside 
        class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased transition-transform duration-200 xl:left-0 xl:translate-x-0"
        :class="{ 
            'translate-x-0 shadow-soft-xl': sidebarIsDisplayed,
            'shadow-none xl:bg-transparent': isTransparent,
            'xl:bg-white shadow-soft-xl': !isTransparent,
        }"

    >
        <div class="h-19.5">
            <i
                :class="{ 'hidden': !sidebarIsDisplayed }"
                @click="toggleSidenav"
                class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" 
                sidenav-close
            >
            </i>
            <a class="block px-8 py-6 m-0 text-size-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
                <img src="/asset/dashboard4/assets/img/logo-ct.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Soft UI Dashboard</span>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-horizontal-dark" />

        <div ref="sidenavRef" class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li v-for="link in mainLinks" :key="link.id" class="mt-0.5 w-full">
                    <Link 
                        class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" 
                        :class="{
                            'rounded-lg bg-white font-semibold text-slate-700' : link.isActive, 
                            '' : !link.isActive, 
                            'shadow-soft-xl' : link.isActive && isTransparent, 
                            'shadow-none' : link.isActive && !isTransparent, 
                        }"
                        :href="route(link.route)"
                    >
                        <div 
                            class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            :class="{
                                'bg-gradient-fuchsia text-white' : link.isActive, '' : !link.isActive,
                                'bg-white' : isTransparent, 
                                'bg-gray-200' : !isTransparent, 
                            }"

                        >
                            <i :class="link.icon"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">{{ link.title }}</span>
                    </Link>
                </li>

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-size-xs opacity-60">Account pages</h6>
                </li>

                <li v-for="link in accountLinks" :key="link.id" class="mt-0.5 w-full">
                    <a 
                        class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" 
                        :class="{
                            'rounded-lg bg-white font-semibold text-slate-700' : link.isActive, 
                            '' : !link.isActive,
                            'shadow-soft-xl' : link.isActive && isTransparent, 
                            'shadow-none' : link.isActive && !isTransparent,
                        }"
                        href="./pages/tables.html"
                    >
                        <div 
                            class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
                            :class="{
                                'bg-gradient-fuchsia text-white' : link.isActive, '' : !link.isActive, 
                                'bg-white' : isTransparent, 
                                'bg-gray-200' : !isTransparent, 
                            }"
                        >
                            <i :class="link.icon"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">{{ link.title }}</span>
                    </a>
                </li>
                
            </ul>
        </div>

        <div class="mx-4">
            <!-- load phantom colors for card after: -->
            <!--
            <p class="invisible hidden text-gray-800 text-red-500 text-red-600 after:bg-gradient-dark-gray after:bg-gradient-cyan after:bg-gradient-orange after:bg-gradient-lime after:bg-gradient-red after:bg-gradient-slate text-lime-500 text-cyan-500 text-slate-400 text-fuchsia-500"></p>
            <div class="after:opacity-65 after:bg-gradient-slate relative flex min-w-0 flex-col items-center break-words rounded-2xl border-0 border-solid border-blue-900 bg-white bg-clip-border shadow-none after:absolute after:top-0 after:bottom-0 after:left-0 after:z-10 after:block after:h-full after:w-full after:rounded-2xl after:content-['']" sidenav-card>
                <div class="mb-7.5 absolute h-full w-full rounded-2xl bg-cover bg-center" style="background-image: url('/asset/dashboard4/assets/img/curved-images/white-curved.jpeg')"></div>
                <div class="relative z-20 flex-auto w-full p-4 text-left text-white">
                    <div class="flex items-center justify-center w-8 h-8 mb-4 text-center bg-white bg-center rounded-lg icon shadow-soft-2xl">
                        <i class="top-0 z-10 text-transparent ni ni-diamond text-size-lg bg-gradient-slate bg-clip-text opacity-80" sidenav-card-icon></i>
                    </div>
                    <div class="transition-all duration-200 ease-nav-brand">
                        <h6 class="mb-0 text-white">Need help?</h6>
                        <p class="mt-0 mb-4 font-semibold leading-tight text-size-xs">Please check our docs</p>
                        <a href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/" target="_blank" class="inline-block w-full px-8 py-2 mb-0 font-bold text-center text-black uppercase transition-all ease-in bg-white border-0 border-white rounded-lg shadow-soft-md bg-150 leading-pro text-size-xs hover:shadow-soft-2xl hover:scale-102">Documentation</a>
                    </div>
                </div>
            </div>
            -->
            <!-- pro btn  -->
            <!--
            <a class="inline-block w-full px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-size-xs bg-gradient-fuchsia hover:shadow-soft-2xl hover:scale-102">Logout</a>
            -->
        </div>
    </aside>

    <!-- end sidenav -->

    <main ref="mainRef" class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                

                <Breadcrumb></Breadcrumb>

                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                            <span class="text-size-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" class="pl-8.75 text-size-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                        </div>
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="flex items-center">
                            <a href="./pages/sign-in.html" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-size-sm text-slate-500">
                                <i class="fa fa-user sm:mr-1"></i>
                                <span class="hidden sm:inline">Sign In</span>
                            </a>
                        </li>
                        <li class="flex items-center pl-4 xl:hidden">
                            <a 
                                @click="toggleSidenav" 
                                href="javascript:;" 
                                class="block p-0 transition-all ease-nav-brand text-size-sm text-slate-500" 
                                sidenav-trigger
                            >
                                <div class="w-4.5 overflow-hidden">
                                    <i :class="{ 'translate-x-[5px]' : sidebarIsDisplayed }" class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                    <i :class="{ 'translate-x-[5px]' : sidebarIsDisplayed }" class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                                </div>
                            </a>
                        </li>
                        <li class="flex items-center px-4">
                            <a @click="toggleFixedPluginCard" href="javascript:;" class="p-0 transition-all text-size-sm ease-nav-brand text-slate-500">
                                <i fixed-plugin-button-nav ref="fixedPluginButtonNavRef" class="cursor-pointer fa fa-cog"></i>
                                <!-- fixed-plugin-button-nav  -->
                            </a>
                        </li>

                        <!-- notifications -->

                        <li class="relative flex items-center pr-2">
                            <p class="hidden transform-dropdown-show"></p>
                            <a @click="toggleDropdownNotification" ref="dropdownTriggerNotificationRef" href="javascript:;" class="block p-0 transition-all text-size-sm ease-nav-brand text-slate-500" dropdown-trigger :aria-expanded="dropdownDisplayedNotification ? true : false">
                                <i class="cursor-pointer fa fa-bell"></i>
                            </a>

                            <ul dropdown-menu ref="dropdownmenuNotificationRef" class="text-size-sm before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer" :class="{'before:-top-5 transform-dropdown-show' : dropdownDisplayedNotification, 'opacity-0 pointer-events-none transform-dropdown' : !dropdownDisplayedNotification }">
                                <!-- add show class on dropdown open js -->
                                <li class="relative mb-2">
                                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="/asset/dashboard4/assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white text-size-sm h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal text-size-sm"><span class="font-semibold">New message</span> from Laur</h6>
                                                <p class="mb-0 leading-tight text-size-xs text-slate-400">
                                                    <i class="mr-1 fa fa-clock"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative mb-2">
                                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="/asset/dashboard4/assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-white text-size-sm bg-gradient-dark-gray h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal text-size-sm"><span class="font-semibold">New album</span> by Travis Scott</h6>
                                                <p class="mb-0 leading-tight text-size-xs text-slate-400">
                                                    <i class="mr-1 fa fa-clock"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative">
                                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-nav-brand text-size-sm bg-gradient-slate h-9 w-9 rounded-xl">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal text-size-sm">Payment successfully completed</h6>
                                                <p class="mb-0 leading-tight text-size-xs text-slate-400">
                                                    <i class="mr-1 fa fa-clock"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- end Navbar -->

        <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">

            <slot />
            <Footer></Footer>
        </div>
        <!-- end cards -->
    </main>
    <div fixed-plugin ref="fixedPluginRef">
        <a @click="toggleFixedPluginCard" ref="fixedPluginButtonRef" fixed-plugin-button class="bottom-7.5 right-7.5 text-size-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
            <i class="py-2 pointer-events-none fa fa-cog"> </i>
        </a>
        <!-- -right-90 in loc de 0-->
        <div ref="fixedPluginContentRef" fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200 overflow-hidden" :class="{'right-0' : showFixedPluginCard, '-right-90 ' : !showFixedPluginCard }" >
            <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                <div class="float-left">
                    <h5 class="mt-4 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-right mt-6">
                    <button @click="toggleFixedPluginCard" fixed-plugin-close-button class="inline-block p-0 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-horizontal-dark" />
            <div class="flex-auto p-6 pt-0 sm:pt-4">
                <!-- Sidebar Backgrounds -->
                <!--
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)">
                    <div class="my-2 text-left" sidenav-colors>
                        <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-fuchsia relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" active-color data-color="fuchsia" onclick="sidebarColor(this)"></span>
                        <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-dark-gray relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="dark-gray" onclick="sidebarColor(this)"></span>
                        <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-cyan relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="cyan" onclick="sidebarColor(this)"></span>
                        <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-lime relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="lime" onclick="sidebarColor(this)"></span>
                        <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-orange relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="orange" onclick="sidebarColor(this)"></span>
                        <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-red relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="red" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                -->
                 
                <!-- Sidenav Type -->
                <div class="mt-0">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="leading-normal text-size-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="flex">
                    <button @click="changeSidenavColor('transparent')" transparent-style-btn class="inline-block w-full px-4 py-3 mb-2 font-bold text-center uppercase align-middle transition-all border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-fuchsia xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:border-fuchsia-500" data-class="bg-transparent" :class="{'bg-gradient-fuchsia bg-fuchsia-500 text-white border-transparent' : isTransparent, 'bg-none bg-transparent text-fuchsia-500 border-fuchsia-500' : !isTransparent }" active-style>Transparent</button>
                    <button @click="changeSidenavColor('white')" white-style-btn class="inline-block w-full px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-fuchsia xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:border-fuchsia-500" data-class="bg-white" :class="{'bg-none bg-transparent text-fuchsia-500 border-fuchsia-500' : isTransparent, 'bg-gradient-fuchsia bg-fuchsia-500 text-white border-transparent' : !isTransparent }">White</button>
                </div>
                <p class="block mt-2 leading-normal text-size-sm xl:hidden">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-4">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="min-h-6 mb-0.5 block pl-0">
                    <input navbarFixed class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5-em relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" />
                </div>
                <hr class="h-px bg-transparent bg-gradient-horizontal-dark sm:my-6" />
                <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer leading-pro text-size-xs ease-soft-in hover:shadow-soft-xs hover:scale-102 active:opacity-85 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray" href="https://www.creative-tim.com/product/soft-ui-dashboard-tailwind" target="_blank">Free Download</a>
                <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none" href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/" target="_blank">View documentation</a>
                <div class="w-full text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                    <h6 class="mt-4">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-twitter"></i> Tweet </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-facebook-square"></i> Share </a>
                </div>
            </div>
        </div>
    </div>
</template>  
<script setup>  

    import { ref, onMounted, onUnmounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';


    import Breadcrumb from '../../Components/Dashboard4/Breadcrumb';
    import Footer from '../../Components/Dashboard4/Footer';

    /* ================================================
        ADD CLASS TO BODY
    ================================================ */
    onMounted(() => { 
        document.body.classList.add('dashboard-4');
    });

    onUnmounted(() => { 
        document.body.classList.remove('dashboard-4')
    });

    /* ================================================
        FIXED PLUGIN CARD
    ================================================ */
    const showFixedPluginCard = ref(false); 
    const fixedPluginRef = ref(null);
    const fixedPluginButtonRef = ref(null);
    const fixedPluginButtonNavRef = ref(null);
    const toggleFixedPluginCard = () => { 
        showFixedPluginCard.value = !showFixedPluginCard.value;
    }

    const closeFixedPluginCard = (e) => { 
        if (!fixedPluginRef.value.contains(e.target) && !fixedPluginButtonRef.value.contains(e.target) && !fixedPluginButtonNavRef.value.contains(e.target)) {
            if(showFixedPluginCard.value){
                showFixedPluginCard.value = !showFixedPluginCard.value;
            }
        }
    }

    onMounted(() => { 
        window.addEventListener('click', closeFixedPluginCard);
    }); 

    onUnmounted(() => { 
        window.removeEventListener('click', closeFixedPluginCard);
    });

    /* ================================================
        PERFECTS SCROLLBAR
    ================================================ */
    const mainRef = ref(null);
    const sidenavRef = ref(null);
    const fixedPluginContentRef = ref(null);
    
    onMounted(() => { 
        var isWindows = navigator.platform.indexOf("Win") > -1 ? true : false;
        if(isWindows) {
            var ps = new PerfectScrollbar(mainRef.value);
            var ps2 = new PerfectScrollbar(sidenavRef.value);
            var ps3 = new PerfectScrollbar(fixedPluginContentRef.value);
        }
    });

    /* ================================================
        DROPDOWN
    ================================================ */
    const dropdownDisplayedNotification = ref(false); 
    const dropdownTriggerNotificationRef = ref(null);
    const dropdownmenuNotificationRef = ref(null);
    const toggleDropdownNotification = () => { 
        dropdownDisplayedNotification.value = !dropdownDisplayedNotification.value;
    }

    const closeDropdown = (e) => { 
        if(!dropdownTriggerNotificationRef.value.contains(e.target) && !dropdownTriggerNotificationRef.value.contains(e.target)){
            if(dropdownDisplayedNotification.value){
                dropdownDisplayedNotification.value = !dropdownDisplayedNotification.value;
            }
        }
    }

    onMounted(() => { 
        window.addEventListener('click', closeDropdown);
    }); 

    onUnmounted(() => { 
        window.removeEventListener('click', closeDropdown);
    });
    
    /* ================================================
        SIDENAV BG COLOR
    ================================================ */
    const isTransparent = ref(true);
    const changeSidenavColor = (color) => { 
        if(color === 'white'){
            isTransparent.value = false;
        } else {
            isTransparent.value = true;
        }
    }

    /* ================================================
        SIDEBAR
    ================================================ */
    const sidebarIsDisplayed = ref(false); 
    const toggleSidenav = () => { 
        sidebarIsDisplayed.value = !sidebarIsDisplayed.value;
    }

    /* ================================================
        SIDEBAR LINKS
    ================================================ */
    const mainLinks = ref([

        {
            id: 1,
            isActive: true,
            title: 'Dashboard',
            icon: `fa-solid fa-chart-simple`,
            route: 'backoffice.dashboard4',
        },
        {
            id: 2,
            isActive: false,
            title: 'Tables',
            icon: `fa-solid fa-table`,
            route: 'backoffice.dashboard4.test',
        },
        {
            id: 3,
            isActive: false,
            title: 'Billing',
            icon: `fa-solid fa-file-invoice`,
            route: 'backoffice.dashboard4.test',
        },
        {
            id: 4,
            isActive: false,
            title: 'Virtual Reality',
            icon: `fa-solid fa-vr-cardboard`,
            route: 'backoffice.dashboard4.test',
        },
        {
            id: 5,
            isActive: false,
            title: 'RTL',
            icon: `fa-solid fa-align-right`,
            route: 'backoffice.dashboard4.test',
        },
    ]);

    const accountLinks = ref([
        {
            id: 1,
            isActive: false,
            title: 'Profile',
            icon: `fa-solid fa-address-card`,
        },
        {
            id: 2,
            isActive: false,
            title: 'Sign In',
            icon: `fa-solid fa-right-to-bracket`,
        },
        {
            id: 3,
            isActive: false,
            title: 'Register',
            icon: `fa-brands fa-wpforms`,
        },
        
    ]);

      
</script>

<style scoped>
.text-white {
    color: #fff;
}
</style>

