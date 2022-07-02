<template> 
    <Head title="Dashboard 5"></Head>


    <DashboardLayout>
        <Breadcrumb title="Dashboard"></Breadcrumb>
        <div class="info-data">
            <div class="card">
                <div class="head">
                    <div>
                        <h2>1500</h2>
                        <p>Traffic</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                </div>
                <span :style="{ '--value': 40 + '%' }" class="progress" data-value="40%"></span>
                <span class="label">40%</span>
            </div>
            <div class="card">
                <div class="head">
                    <div>
                        <h2>234</h2>
                        <p>Sales</p>
                    </div>
                    <i class='bx bx-trending-down icon down' ></i>
                </div>
                <span :style="{ '--value': 60 + '%' }" class="progress" data-value="60%"></span>
                <span class="label">60%</span>
            </div>
            <div class="card">
                <div class="head">
                    <div>
                        <h2>465</h2>
                        <p>Pageviews</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                </div>
                <span :style="{ '--value': 30 + '%' }" class="progress" data-value="30%"></span>
                <span class="label">30%</span>
            </div>
            <div class="card">
                <div class="head">
                    <div>
                        <h2>235</h2>
                        <p>Visitors</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                </div>
                <span :style="{ '--value': 80 + '%' }" class="progress" data-value="80%"></span>
                <span class="label">80%</span>
            </div>
        </div>
        <div class="data">
            
            <div class="content-data">
                <div class="head">
                    <h3>Chatbox</h3>
                    <div ref="card1ElRef" class="menu">
                        <i @click="toggleCard1Dropdown" class='bx bx-dots-horizontal-rounded icon'></i>
                        <ul :class="{'show' : card1Dropdown }" class="menu-link">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Save</a></li>
                            <li><a href="#">Remove</a></li>
                        </ul>
                    </div>
                </div>
                <div class="chat-box">
                    <p class="day"><span>Today</span></p>
                    <div class="msg">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <div class="chat">
                            <div class="profile">
                                <span class="username">Alan</span>
                                <span class="time">18:30</span>
                            </div>
                            <p>Hello</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:30</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptatum eos quam dolores eligendi exercitationem animi nobis reprehenderit laborum! Nulla.</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:30</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, architecto!</p>
                        </div>
                    </div>
                    <div class="msg me">
                        <div class="chat">
                            <div class="profile">
                                <span class="time">18:30</span>
                            </div>
                            <p>Lorem ipsum, dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <form action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Type...">
                        <button type="submit" class="btn-send"><i class='bx bxs-send' ></i></button>
                    </div>
                </form>
            </div>
        </div>
        
    </DashboardLayout>
    
</template>  

<script setup>  

    import DashboardLayout from '@/app/Layouts/Dashboard/Dashboard5';
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref, computed, onMounted, onUnmounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    import Breadcrumb from '@/app/Components/Dashboard5/Breadcrumb';

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


