<template> 

    <h1 class="title">{{ props.title }}</h1>
    <ul class="breadcrumbs">
        <li><a href="#">Home</a></li>
        <li class="divider">/</li>
        <li><a href="#" class="active">{{ props.title }}</a></li>
    </ul>
</template>  

<script setup>  
    const props = defineProps({ 
        title: { 
            type: String, 
            default: 'No title', 
        } 
    }); 
      
</script>


