<template> 
    <Head title="Dashboard 5"></Head>


    <DashboardLayout>
        <Breadcrumb title="Dashboard"></Breadcrumb>
        <!--
        <Widgets></Widgets>
        <Chatbox></Chatbox>
        -->
        <TableComponentList></TableComponentList>

        
    </DashboardLayout>
    
</template>  

<script setup>  

    import DashboardLayout from '@/app/Layouts/Dashboard/Dashboard5';
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref, computed, onMounted, onUnmounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    import Breadcrumb from '@/app/Components/Dashboard5/Breadcrumb';
    import Widgets from '@/app/Components/Dashboard5/Widgets';
    import Chatbox from '@/app/Components/Dashboard5/Chatbox';
    import TableComponentList from '@/app/Components/Dashboard5/TableComponentList';

    

    
      
</script>


