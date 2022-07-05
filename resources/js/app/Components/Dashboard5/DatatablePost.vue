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
            <!-- component -->
<section class="container mx-auto p-6 font-mono">
	<div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
		<div class="w-full overflow-x-auto">
			<table class="w-full">
				<thead>
					<tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
						<th class="px-4 py-3">Name</th>
						<th class="px-4 py-3">Age</th>
						<th class="px-4 py-3">Status</th>
						<th class="px-4 py-3">Date</th>
					</tr>
				</thead>
				<tbody class="bg-white">
					<tr class="text-gray-700">
						<td class="px-4 py-3 border">
							<div class="flex items-center text-sm">
								<div class="relative w-8 h-8 mr-3 rounded-full md:block"> <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold text-black">Sufyan</p>
									<p class="text-xs text-gray-600">Developer</p>
								</div>
							</div>
						</td>
						<td class="px-4 py-3 text-ms font-semibold border">22</td>
						<td class="px-4 py-3 text-xs border"> <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span> </td>
						<td class="px-4 py-3 text-sm border">6/4/2000</td>
					</tr>
					<tr class="text-gray-700">
						<td class="px-4 py-3 border">
							<div class="flex items-center text-sm">
								<div class="relative w-8 h-8 mr-3 rounded-full"> <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold text-black">Stevens</p>
									<p class="text-xs text-gray-600">Programmer</p>
								</div>
							</div>
						</td>
						<td class="px-4 py-3 text-md font-semibold border">27</td>
						<td class="px-4 py-3 text-xs border"> <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm"> Pending </span> </td>
						<td class="px-4 py-3 text-sm border">6/10/2020</td>
					</tr>
					<tr class="text-gray-700">
						<td class="px-4 py-3 border">
							<div class="flex items-center text-sm">
								<div class="relative w-8 h-8 mr-3 rounded-full"> <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold">Nora</p>
									<p class="text-xs text-gray-600">Designer</p>
								</div>
							</div>
						</td>
						<td class="px-4 py-3 text-md font-semibold border">17</td>
						<td class="px-4 py-3 text-xs border"> <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm"> Nnacceptable </span> </td>
						<td class="px-4 py-3 text-sm border">6/10/2020</td>
					</tr>
					<tr class="text-gray-700">
						<td class="px-4 py-3 border">
							<div class="flex items-center text-sm">
								<div class="relative w-8 h-8 mr-3 rounded-full"> <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold">Ali</p>
									<p class="text-xs text-gray-600">Programmer</p>
								</div>
							</div>
						</td>
						<td class="px-4 py-3 border text-md font-semibold">23</td>
						<td class="px-4 py-3 border text-xs"> <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span> </td>
						<td class="px-4 py-3 border text-sm">6/10/2020</td>
					</tr>
					<tr class="text-gray-700">
						<td class="px-4 py-3 border">
							<div class="flex items-center text-sm">
								<div class="relative w-8 h-8 mr-3 rounded-full"> <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold">Khalid</p>
									<p class="text-xs text-gray-600">Designer</p>
								</div>
							</div>
						</td>
						<td class="px-4 py-3 border text-md font-semibold">20</td>
						<td class="px-4 py-3 border text-xs"> <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-sm"> Pending </span> </td>
						<td class="px-4 py-3 border text-sm">6/10/2020</td>
					</tr>
					<tr class="text-gray-700">
						<td class="px-4 py-3 border">
							<div class="flex items-center text-sm">
								<div class="relative w-8 h-8 mr-3 rounded-full"> <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold">Nasser</p>
									<p class="text-xs text-gray-600">Pen Tester</p>
								</div>
							</div>
						</td>
						<td class="px-4 py-3 border text-md font-semibold">29</td>
						<td class="px-4 py-3 border text-xs"> <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span> </td>
						<td class="px-4 py-3 border text-sm">6/10/2020</td>
					</tr>
					<tr class="text-gray-700">
						<td class="px-4 py-3 border">
							<div class="flex items-center text-sm">
								<div class="relative w-8 h-8 mr-3 rounded-full"> <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold">Mohammed</p>
									<p class="text-xs text-gray-600">Web Designer</p>
								</div>
							</div>
						</td>
						<td class="px-4 py-3 border text-md font-semibold">38</td>
						<td class="px-4 py-3 border text-xs"> <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span> </td>
						<td class="px-4 py-3 border text-sm">6/10/2020</td>
					</tr>
					<tr class="text-gray-700">
						<td class="px-4 py-3 border">
							<div class="flex items-center text-sm">
								<div class="relative w-8 h-8 mr-3 rounded-full"> <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold">Saad</p>
									<p class="text-xs text-gray-600">Data</p>
								</div>
							</div>
						</td>
						<td class="px-4 py-3 border text-md font-semibold">19</td>
						<td class="px-4 py-3 border text-xs"> <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span> </td>
						<td class="px-4 py-3 border text-sm">6/10/2020</td>
					</tr>
					<tr class="text-gray-700">
						<td class="px-4 py-3 border">
							<div class="flex items-center text-sm">
								<div class="relative w-8 h-8 mr-3 rounded-full"> <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
									<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
								</div>
								<div>
									<p class="font-semibold">Sami</p>
									<p class="text-xs text-gray-600">Developer</p>
								</div>
							</div>
						</td>
						<td class="px-4 py-3 border text-md font-semibold">21</td>
						<td class="px-4 py-3 border text-xs"> <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span> </td>
						<td class="px-4 py-3 border text-sm">6/10/2020</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>



            
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


