<template>
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

                <!--
                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-size-xs opacity-60">Account pages</h6>
                </li>
                -->
                
                <!--
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
                -->
                
            </ul>
        </div>

        
    </aside>
</template>

<script setup>
    

</script>

