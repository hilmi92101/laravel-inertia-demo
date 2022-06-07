<template> 
    
    <div class="container mx-auto px-4">
        <h2 ref="appTitleRef" class="text-2xl">{{ appTitle }}</h2>
        <ul>
            <li 
                v-for="post in posts"
                :key="post.id"
            >{{ post.title }}</li>
        </ul>
    </div>

</template>  

<script setup>  


    import { ref, reactive, computed, watch,
        onBeforeMount, onMounted, onBeforeUnmount, onUnmounted,
        onActivated, onDeactivated,
        onBeforeUpdate, onUpdated, 
    } from 'vue';

    const appTitle = 'My Amazing List';
    const appTitleRef = ref(null);

    const posts = ref([
        {
            id: 1,
            title: 'Post 1',
        },
        {
            id: 2,
            title: 'Post 2',
        },
        {
            id: 3,
            title: 'Post 3',
        },
    ]);

    onMounted(() => {

        console.log(appTitleRef.value);
        console.log(appTitleRef.value.innerText);
        console.log(appTitleRef.value.offsetWidth);

    });
    
    
</script>

