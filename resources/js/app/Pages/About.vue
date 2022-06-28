<template> 
    <Head title="About" />
    <AuthenticatedLayout> 
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                About
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae temporibus nam cumque error molestiae? Et odit consequatur illum provident incidunt exercitationem, facere dolorum non iusto, qui eveniet ipsum, aliquam culpa.</p>




                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>  
<script>  

    import AuthenticatedLayout from '../Layouts/Authenticated';
    import { Head } from '@inertiajs/inertia-vue3';

    export default {  
        components: {
            AuthenticatedLayout,
            Head,
        },
    }
        
</script>

