<template>  
    <div> 
        <div v-for="post in posts">
            <p>{{ post.title }}</p>
            <p>{{ post.content }}</p>
            <p>{{ post.created_at }}</p>
            <hr>
        </div>
    </div>  
</template>  
<script>  
    export default {  
        props: {
            posts: Object
        }
          
    }  
</script>