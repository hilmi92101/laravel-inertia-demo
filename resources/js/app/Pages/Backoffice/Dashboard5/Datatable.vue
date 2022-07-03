<template> 
    <Head title="Dashboard 5: Datatable"></Head>


    <DashboardLayout>
        <Breadcrumb title="Datatable"></Breadcrumb>
        <DatatablePost></DatatablePost>

        
    </DashboardLayout>
    
</template>  

<script setup>  

    import DashboardLayout from '@/app/Layouts/Dashboard/Dashboard5';
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref, computed, onMounted, onUnmounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    import Breadcrumb from '@/app/Components/Dashboard5/Breadcrumb';
    import DatatablePost from '@/app/Components/Dashboard5/DatatablePost';

    

    
      
</script>


