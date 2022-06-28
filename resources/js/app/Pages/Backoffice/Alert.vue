<template> 
    <Head title="Dashboard 2"></Head>


    <DashboardLayout>

        <div class="w-full mt-4">
            <div class="p-8 bg-white rounded-2xl shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-8">Alert</h2>
                
                <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
                    <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
                </div>
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
                </div>
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
                </div>
                <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
                    <span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
                </div>
                <div class="p-4 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300" role="alert">
                    <span class="font-medium">Dark alert!</span> Change a few things up and try submitting again.
                </div>

            </div>
        </div>

        
    </DashboardLayout>
    
</template>  

<script setup>  

    import DashboardLayout from '../../Layouts/Dashboard/Dashboard2';
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref, computed } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';


      
</script>


