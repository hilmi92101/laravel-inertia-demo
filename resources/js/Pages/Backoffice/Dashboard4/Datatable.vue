<template> 
    <Head title="Dashboard 4"></Head>


    <DashboardLayout>

        <div class="w-full px-6 py-6 mx-auto">


            <!-- table 1 -->
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6>Authors table</h6> </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th @click="toggleSorting('author')" class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 cursor-pointer">Author
                                            <dtArrow :status="arrows.author"></dtArrow>

                                            </th>
                                            <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 cursor-pointer">Function</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 cursor-pointer">Status</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 cursor-pointer">Employed</th>
                                            <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70 cursor-pointer"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2 py-1">
                                                    <div class="flex flex-col justify-center">
                                                        <h6 class="mb-0 leading-normal text-size-sm">John Michael</h6>
                                                        <p class="mb-0 leading-tight text-size-xs text-slate-400">john@creative-tim.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <p class="mb-0 font-semibold leading-tight text-size-xs">Manager</p>
                                                <p class="mb-0 leading-tight text-size-xs text-slate-400">Organization</p>
                                            </td>
                                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-size-sm whitespace-nowrap shadow-transparent"> <span class="bg-gradient-lime px-3.6-em text-size-xs-em rounded-1.8 py-2.2-em inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span> </td>
                                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"> <span class="font-semibold leading-tight text-size-xs text-slate-400">23/04/18</span> </td>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"> <a href="javascript:;" class="font-semibold leading-tight text-size-xs text-slate-400"> Edit </a> </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        
    </DashboardLayout>
    
</template>  

<script setup>  

    import DashboardLayout from '@/Layouts/Dashboard/Dashboard4';
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref, computed, onMounted, onUnmounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    import { useStore } from 'vuex';

    import dtArrow from '@/Components/Dashboard4/ArrowUpDown';

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
    const arrows = ref({
        author: 'desc',
    });

    const toggleSorting = (header) => { 
        
    } 
    

    

    
    
      
</script>
<style scoped>

</style>


