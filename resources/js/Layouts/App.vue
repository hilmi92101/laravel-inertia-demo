<template>  
    <div class="main-layout">
        <div>
            <Link :href="route('posts.index')" :class="{ 'active': $page.component === 'Posts/Index' }">Posts</Link><br>
            <Link :href="route('about')" :class="{ 'active': $page.component === 'About' }">About</Link><br>
            <br>
        </div>
        
        <slot />
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
<style scoped>

.active {
    font-weight: bold;
}

</style>

