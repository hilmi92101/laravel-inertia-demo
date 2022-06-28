<template>
    
    <nav>
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-size-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">{{ breadcrumb.root }}</a>
            </li>
            <li class="text-size-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">{{ breadcrumb.currentPage }} </li>
        </ol>
        <h6 class="mb-0 font-bold capitalize">{{ breadcrumb.currentPage }} </h6>
    </nav>
</template>

<script setup>

    import { ref, computed } from 'vue';
    import { useStore } from 'vuex';

    /* ================================================
        VUEX
    ================================================ */
    const store = useStore();
    const breadcrumb = computed( () => { 
        return store.getters["Dashboard4/breadcrumb"]; 
    });

    const props = defineProps({ 
        title: { 
            type: String, 
            default: 'No title', 
        } 
    });

</script>

