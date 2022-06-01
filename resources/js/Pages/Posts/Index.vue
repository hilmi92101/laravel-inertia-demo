<template> 
    <Head>
        <title>Posts List</title>
    </Head>
    <AppLayout> 
        <table class="posts">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
            </tr>
            <tr v-for="post in posts">
                <td>{{ post.title }}</td>
                <td>{{ post.content }}</td>
                <td>{{ post.created_at }}</td>
            </tr>
           
        </table>
    </AppLayout>  
</template>  
<script>  

    import AppLayout from '../../Layouts/App';
    import { Head } from '@inertiajs/inertia-vue3';

    export default {  
        components: {
            AppLayout,
            Head,
        },
        props: {
            posts: Object
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