<template> 
    <Head>
        <title>Posts List</title>
    </Head>
    <AuthenticatedLayout> 

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <div v-if="$page.props.flash.message" class="text-blue-600 mb-4">
                            {{ $page.props.flash.message }}
                        </div>
                        
                        <!-- Go to Create Page -->
                        <div class="flex space-x-2">
                            <Link :href="route('posts.create')" type="button" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">New Post</Link>
                        </div>
                        <!-- Table -->
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <table class="table-fixed w-full">
                                            <thead class="bg-white border-b">
                                                <tr>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Title
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Content
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Created At
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="post in posts" class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ post.title }}
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ post.content }}
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ post.created_at }}
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <div @click="destroy(post.id)" class="flex space-x-2 justify-center">
                                                            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        
    </AuthenticatedLayout>  
</template>  
<script>  

    import AuthenticatedLayout from '../../Layouts/Authenticated';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import { Inertia } from '@inertiajs/inertia';

    export default {  
        components: {
            AuthenticatedLayout,
            Head,
            Link,
        },
        props: {
            posts: Object
        },
        setup() {

            const destroy = (id) => {
                if(confirm('Are you sure?')){
                    Inertia.delete(route('posts.destroy', id));
                }
            }

            return { destroy }
        }
          
    }  
</script>

<style scoped>

.posts {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.posts td, .posts th {
  border: 1px solid #ddd;
  padding: 8px;
}

.posts tr:nth-child(even){background-color: #f2f2f2;}

.posts tr:hover {background-color: #ddd;}

.posts th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>