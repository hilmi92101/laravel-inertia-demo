<template>  
    <Layout>
        <h1>About page</h1>  
        <button @click.prevent="redirect('landing')" class="btn btn-primary">To landing page</button>
    </Layout>
</template>  
<script setup> 

    import { useRouter } from 'vue-router';
    
    import Layout from '@/no-db/Layouts/Test';

    const router = useRouter(); 
    const redirect = (route) => {  
        router.push({name: route}); 
    } 


     
</script>