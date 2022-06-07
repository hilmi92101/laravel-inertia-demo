<template>
    <teleport to="body">
        <div class="modal">
            <h2 class="text-5xl py-5">
                <!--
                <slot name="title" />
                -->
                {{ title }}
                {{ props.title }}
            </h2>
            
            <slot />

            <!--
            <pre>{{ $slots.title() }}</pre>
            -->

            <button 
                @click="handleButtonClick"
                class="px-6 py-2 font-semibold text-white border-b-4 rounded bg-cyan-500 border-cyan-800 hover:border-cyan-600 mt-6">Hide modal</button>
        </div>
    </teleport>
    
</template>

<script setup>

    import { useSlots } from 'vue';

    // if want to access slot
    //const slots = useSlots();
    //console.log(slots.title());

    const props = defineProps({
        title: {
            type: String,
            default: 'No title',
        }
    });

    console.log(props.title);

    const emit = defineEmits(['hideModal']);

    const handleButtonClick = () => {
        emit('hideModal');
    }


</script>

<style scoped>
    .modal {
       background: beige;
       padding: 10px; 
       position: absolute;
       left: 0;
       top: 0;
       width: 100%;
       height:100%;
       z-index: 1;
    }



</style>

