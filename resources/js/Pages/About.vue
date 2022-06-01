<template> 
    <!--
    <Head>
        <title>About</title>
    </Head>
    -->
    <Head title="About" />
    <AppLayout> 
        about<br>
    </AppLayout>
</template>  
<script>  

    import AppLayout from '../Layouts/App';
    import { Head } from '@inertiajs/inertia-vue3';

    export default {  
        components: {
            AppLayout,
            Head,
        },
    }
        
</script>

