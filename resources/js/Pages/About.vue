<template>  
    <div> 
        <div>
            <Link :href="route('posts.index')">Posts</Link><br>
            <Link :href="route('about')">About</Link><br>
            <br>
        </div>
        about<br>

    
        
    </div>  
</template>  
<script>  
    import { Link } from '@inertiajs/inertia-vue3';

    export default {  
        components: {
            Link,
        },
          
    }    
</script>

