<template> 
     

    <Layout>
        <h1>Landing page</h1> 
        <button @click.prevent="redirect('about')" class="btn btn-primary">To about page</button>
    </Layout>
    
</template> 
<script setup> 

    import { useRouter } from 'vue-router';

    import Layout from '@/no-db/Layouts/General';

    const router = useRouter();
    const redirect = (route) => { 
        router.push({name: route});
    }
    
</script>