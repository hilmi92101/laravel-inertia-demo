<template> 
    <Head title="Dashboard 4"></Head>


    <DashboardLayout>
        <h3>{{ currentLang }}</h3>
    </DashboardLayout>
    
</template>  

<script setup>  

    import DashboardLayout from '../../../Layouts/Dashboard/Dashboard4';
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref, computed, onMounted, onUnmounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    import { useStore } from 'vuex'

    /* ================================================
        VUEX
    ================================================ */
    const store = useStore();
    const currentLang = computed( () => { 
        return store.getters["Dashboard4/currentLang"]; 
    });

    onMounted(() => { 
        store.dispatch('Dashboard4/changeBreadcrumbPageTitle', 'Test page');
    });
    
      
</script>


