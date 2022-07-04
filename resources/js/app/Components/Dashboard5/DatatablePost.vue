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
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10 mb-10">
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
                            v-for="(post, index) in posts.data" 
                            :key="index"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                        >
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"> {{ post.id }} </th>
                            <td class="px-6 py-4"> {{ post.user_id }} </td>
                            <td class="px-6 py-4"> {{ post.user_name }} </td>
                            <td class="px-6 py-4"> {{ post.title }} </td>
                            <td class="px-6 py-4"> {{ post.content }} </td>
                            <td class="px-6 py-4"> {{ post.created_at }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <nav class="pagination__container">
                <ul class="inline-flex -space-x-px">
                    <li 
                        v-for="(link, index) in posts.links" 
                        :key="index"
                    >
                        <Link 
                            v-if="processPagination(link)" 
                            :href="link.url" 
                            :class="paginationBtnClases(link.active)" 
                            v-html="link.label">
                        </Link>
                    </li>
                </ul>
            </nav>

            <!-- CONTENT END HERE -->
            


        </div>
    </div>
</template>  

<script setup>  

    import { ref, onMounted, onUnmounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    /* ================================================
        TABLE
    ================================================ */
    const headers = ref([
        {
            title: 'ID',
        },
        {
            title: 'User ID',
        },
        {
            title: 'User Name',
        },
        {
            title: 'Title',
        },
        {
            title: 'Description',
        },
        {
            title: 'Created At',
        },
    ]);


    /* ================================================
        PROPS
    ================================================ */
    const props = defineProps({ 
        posts: { 
            type: Object, 
        } 
    });

    console.log(props.posts);

    /* ================================================
        PAGINATION
    ================================================ */
    const firstPage = ref(1);
    const lastPage = ref(props.posts.last_page);
    const currentPage = ref(props.posts.current_page);
    const processPagination = (link) => {

        if(link.label == '&laquo; Previous'){
            if(firstPage.value == currentPage.value){
                return false;
            }
        }

        if(link.label == 'Next &raquo;'){
            if(lastPage.value == currentPage.value){
                return false;
            }
        }
        return true;
    }

    const paginationBtnClases = (isActive) => { 
		
        if(isActive){
            return `py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white`;
        } else {
            return `py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white`;
        }
    }

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

<style>
    .pagination-container {
        display: flex;
        column-gap: 10px;
    }
    .paginate-buttons {
        height: 40px;
        width: 40px;
        border-radius: 0px;
        cursor: pointer;
        background-color: rgb(242, 242, 242);
        border: 1px solid rgb(217, 217, 217);
        color: black;
    }
    .paginate-buttons:hover {
        background-color: #d8d8d8;
    }
    .active-page {
        background-color: #3498db;
        border: 1px solid #3498db;
        color: white;
    }
    .active-page:hover {
        background-color: #2988c8;
    }
</style>


