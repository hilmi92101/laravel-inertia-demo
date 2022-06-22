<template> 
    <Head title="Dashboard 4"></Head>


    <DashboardLayout>
        <div class="flex flex-wrap my-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-2/2 md:flex-none lg:w-3/3 lg:flex-none">
                <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                <h6>Posts</h6>
                            </div>
                            <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                                <div class="relative pr-6 lg:float-right">
                                    <a @click="toggleDropdownProject" ref="dropdownTriggerProjectRef" dropdown-trigger class="cursor-pointer" :aria-expanded="dropdownDisplayedProject ? true : false">
                                        <i class="fa fa-ellipsis-v text-slate-400"></i>
                                    </a>
                                    <p class="hidden transform-dropdown-show"></p>

                                    <ul dropdown-menu ref="dropdownmenuProjectRef" class="z-100 text-size-sm shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']" :class="{'before:-top-5 transform-dropdown-show' : dropdownDisplayedProject, 'opacity-0 pointer-events-none transform-dropdown' : !dropdownDisplayedProject }">
                                        <li class="relative">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Action</a>
                                        </li>
                                        <li class="relative">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Another action</a>
                                        </li>
                                        <li class="relative">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto px-0">
                        <div class="overflow-x-auto px-8 pt-4 pb-16">
                            table here

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
    
</template>  

<script setup>  

    import DashboardLayout from '../../../Layouts/Dashboard/Dashboard4';
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref, computed, onMounted, onUnmounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    import { useStore } from 'vuex';

    /* ================================================
        VUEX
    ================================================ */
    const store = useStore();
    onMounted(() => { 
        store.dispatch('Dashboard4/changeBreadcrumbPageTitle', 'Datatable');
    });

    /* ================================================
        DATATABLE 
    ================================================ */
    
    

    /* ================================================
        DROPDOWN
    ================================================ */
    const dropdownDisplayedProject = ref(false); 
    const dropdownTriggerProjectRef = ref(null);
    const dropdownmenuProjectRef = ref(null);
    const toggleDropdownProject = () => { 
        dropdownDisplayedProject.value = !dropdownDisplayedProject.value;
    }

    const closeDropdown = (e) => { 
        if(!dropdownmenuProjectRef.value.contains(e.target) && !dropdownTriggerProjectRef.value.contains(e.target)){
            if(dropdownDisplayedProject.value){
                dropdownDisplayedProject.value = !dropdownDisplayedProject.value;
            }
        }
    }

    
    
      
</script>


