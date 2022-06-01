<template> 
    <Head>
        <title>Posts List</title>
    </Head>
    <AuthenticatedLayout> 

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Post
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        
                        <form @submit.prevent="form.post(route('posts.store'))" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    Title
                                </label>
                                <input v-model="form.title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-600 focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Title">
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    Content
                                </label>
                                <textarea
                                    v-model="form.content"
                                    class="
                                        form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                    "
                                rows="3"
                                placeholder="Your message"
                                ></textarea>
                            </div>
                            <div class="flex items-center justify-between">
                                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    Create
                                </button>
                                <Link :href="route('posts.index')" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                    Back
                                </Link>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
        
    </AuthenticatedLayout>  
</template>  
<script>  

    import AuthenticatedLayout from '../../Layouts/Authenticated';
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

    export default {  
        components: {
            AuthenticatedLayout,
            Head,
            Link,
            useForm,
        },
        setup() {
            const form = useForm({
                title: '',
                content: '',
            })

            return { form }
        }
          
    }  
</script>
