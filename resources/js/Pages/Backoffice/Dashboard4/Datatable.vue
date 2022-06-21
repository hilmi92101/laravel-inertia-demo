<template> 
    <Head title="Dashboard 4"></Head>


    <DashboardLayout>
        <h3>Datatable</h3>
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

    
    
      
</script>


