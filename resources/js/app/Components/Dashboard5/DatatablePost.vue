<template> 

    <div class="data">
            
        <div class="content-data">
            <div class="head">
                <h3>Post List</h3>
                <div ref="card1ElRef" class="menu">
                    <i @click="toggleCard1Dropdown" class='bx bx-dots-horizontal-rounded icon'></i>
                    <ul :class="{'show' : card1Dropdown }" class="menu-link">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Save</a></li>
                        <li><a href="#">Remove</a></li>
                    </ul>
                </div>
            </div>

            <!-- CONTENT START HERE -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10 mb-24">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th 
                                v-for="(header, index) in headers" 
                                :key="index" scope="col" class="px-6 py-3"
                            > 
                            {{ header.title }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr 
                            v-for="(component, index) in components" 
                            :key="index"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                        >
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"> {{ component.title }} </th>
                            <td class="px-6 py-4"> {{ component.createdAt }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- CONTENT END HERE -->
            


        </div>
    </div>
</template>  

<script setup>  

    import { ref, onMounted, onUnmounted } from 'vue';

    /* ================================================
        TABLE
    ================================================ */
    const headers = ref([
        {
            title: 'Name',
        },
        {
            title: 'Created At',
        },
    ]);

    const components = ref([
        {
            title: 'Datatable',
            createdAt: '8:58 pm Sunday, 3 July 2022 (MYT)',
        },
        {
            title: 'File Upload',
            createdAt: '8:58 pm Sunday, 3 July 2022 (MYT)',
        },
    ]);

    /* ================================================
        CARD DROPDOWN
    ================================================ */
	const card1Dropdown = ref(false);
	const toggleCard1Dropdown = () => { 
		card1Dropdown.value = !card1Dropdown.value;
    }

    /* ================================================
        WINDOW EVENTS
    ================================================ */
	const card1ElRef = ref(null);
	const closeEveryElements = (e) => { 
		if(!card1ElRef.value.contains(e.target)){
			card1Dropdown.value = false;
		}
    }

	onMounted(() => { 
        window.addEventListener('click', closeEveryElements);
    }); 

    onUnmounted(() => { 
        window.removeEventListener('click', closeEveryElements);
    });
      
</script>


