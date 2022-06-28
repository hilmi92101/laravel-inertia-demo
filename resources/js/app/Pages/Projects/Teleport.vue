<template>  
     
    <div class="container mx-auto px-4"> 
        <h2 class="text-5xl">{{ appTitle }}</h2> 

        <button @click="showModal = true" class="px-6 py-2 font-semibold text-white border-b-4 rounded bg-cyan-500 border-cyan-800 hover:border-cyan-600 mt-6">Show modal</button>
        
        <Modal 
            v-model="showModal"
            title="My modal title (via prop)"
            @hideModal="showModal = false"
        >
            <!-- Name props -->
            <!--
            <template v-slot:title>My new title</template>
            
            <template #title>My new title 2</template>
            -->
            
            <!-- Will go to slot -->
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, ea nemo eum facilis hic nostrum quidem, maiores quasi dicta debitis ut nobis quae. Recusandae ratione voluptate iure sunt repellendus porro.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, ea nemo eum facilis hic nostrum quidem, maiores quasi dicta debitis ut nobis quae. Recusandae ratione voluptate iure sunt repellendus porro.</p>
            
        </Modal>

        
    </div> 
</template>  

<script setup>   

    import { ref, reactive, computed, watch } from 'vue'; 
    import Modal from '../../Components/Projects/Modal'; 

    const appTitle = 'My Teleport App'; // non reactive data 

    const showModal = ref(false);

         
</script>

