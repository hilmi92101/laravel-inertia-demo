<template>  
    <div class="dashboard-2">

        <nav :class="{ close: sidebarClose }" >
            <div class="logo-name">
                <div class="logo-image">
                    <!--<img src="images/logo.png" alt="">-->
                </div>

                <span class="logo_name">CodingLab</span>
            </div>

            <div class="menu-items">
                <ul class="nav-links">
                    <li v-for="link in sidebarLinks" :key="sidebarLinks.id">
                        <Link :href="route(link.route)">
                            <i :class="link.icon"></i>
                            <span class="link-name">{{ link.title }}</span>
                        </Link>
                    </li>
                </ul>

                <ul class="logout-mode">
                    <li><a href="#">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                        </a></li>

                    <li class="mode">
                        <a href="#">
                            <i class="uil uil-moon"></i>
                            <span class="link-name">Dark Mode</span>
                        </a>

                        <div class="mode-toggle">
                            <span class="switch"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <section class="dashboard">
            <div class="top">
                <i @click.prevent="toggleSidebar" class="uil uil-bars sidebar-toggle"></i>

                <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Search here...">
                </div>

                <!--<img src="images/profile.jpg" alt="">-->
            </div>

            <div class="dash-content">
                <slot/>
            </div>
        </section>

    </div>
</template>  
<script setup>  

    import { ref } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    const sidebarClose = ref(false); 

    const sidebarLinks = ref([ 
        { 
            id: 1, 
            title: 'Dashboard',
            icon: 'bx bx-grid-alt',
            route: 'backoffice.dashboard2',
        }, 
        { 
            id: 1, 
            title: 'Form',
            icon: 'bx bxs-spreadsheet',
            route: 'backoffice.form',
        },
        
    ]);

    const toggleSidebar = () => { 
        sidebarClose.value = !sidebarClose.value;
    } 

      
</script>

