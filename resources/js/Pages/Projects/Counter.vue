<template> 
    
    <div class="container mx-auto px-4">
        <h2 class="text-5xl">{{ appTitle }}</h2>
        <div class="w-3/3 mx-auto">
            <h4 class="text-3xl my-5">{{ counterData.title }}</h4>
            <button @click="descreaseCounter(1)" class="px-6 py-2 font-semibold text-white border-b-4 rounded bg-cyan-500 border-cyan-800 hover:border-cyan-600 mt-6">-</button>
            <span class="counter mx-5">{{ counterData.counter }}</span>
            <button @click="increaseCounter(1, $event)" class="px-6 py-2 font-semibold text-white border-b-4 rounded bg-cyan-500 border-cyan-800 hover:border-cyan-600 mt-6">+</button>

        </div>

        <div class="w-1/3 my-5">
            <h4 class="text-3xl my-5">This counter is: {{ oddOrEven }}</h4>
            
        </div>

        <div class="w-1/3 my-5">
            <h4 class="text-3xl my-5">Edit counter title</h4>
            <input
                v-model="counterData.title"
                type="text"
                class="w-full px-2 py-1 text-sm border border-gray-300 rounded outline-none"
            />
        </div>
    </div>

</template>  

<script setup>  

    import { ref, reactive, computed, watch,
        onBeforeMount, onMounted, onBeforeUnmount, onUnmounted,
        onActivated, onDeactivated,
        onBeforeUpdate, onUpdated, 
    } from 'vue';

    const appTitle = 'My Amazing Counter App'; // non reactive data


    const counterData = reactive({
        counter: 0,
        title: 'My Counter',
    });

    // for reactive data, ref different a bit
    watch(() => counterData.counter, (newCount, oldCount) => {
        console.log('newCount', newCount);
        console.log('oldCount', oldCount);
        if(newCount == 10){
            alert('YOLO');
        }
    });

    // computed
    const oddOrEven = computed( () => {
        if(counterData.counter % 2 === 0){
            return 'even';
        }
        return 'odd';
    });

    const increaseCounter = (amount, e) => {
        //counter.value++;
        //console.log(e);
        counterData.counter += amount;
    }

    const descreaseCounter = (amount) => {
        //counter.value--;
        counterData.counter -= amount;
    }

    // hooks
    onBeforeMount(() => {
        console.log('onBeforeMount');
    });

    onMounted(() => {
        console.log('onMounted');
    });

    onBeforeUnmount(() => {
        console.log('onBeforeUnmount');
    });

    onUnmounted(() => {
        console.log('onUnmounted');
    });

    onActivated(() => {
        console.log('onActivated');
    });

    onDeactivated(() => {
        console.log('onDeactivated');
    });

    onBeforeUpdate(() => {
        console.log('onBeforeUpdate');
        console.log(appTitle);
    });

    onUpdated(() => {
        console.log('onUpdated');
        console.log(appTitle + '2');
    });
        
    
</script>

