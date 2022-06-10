<template>  
    <div class="dashboard-2">

        <nav :class="{ close: sidebarClose }" >
            <div class="logo-name">
                <div class="logo-image">
                    <img :src="logo" alt="">
                </div>

                <span class="logo_name">CodingLab</span>
            </div>

            <div class="menu-items">
                <ul class="nav-links">
                    <li v-for="link in sidebarLinks" :key="sidebarLinks.id">
                        <Link :href="route(link.route)" :class="{ 'active': link.isActive }">
                            <i :class="iconClasses(link)"></i>
                            <span :class="{ 'active': link.isActive }" class="link-name">{{ link.title }}</span>
                        </Link>
                    </li>
                </ul>

                <ul class="logout-mode">
                    
                    <li>
                        <a href="#">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                        </a>
                    </li>
                    <!--
                    <li class="mode">
                        <a href="#">
                            <i class="uil uil-moon"></i>
                            <span class="link-name">Dark Mode</span>
                        </a>

                        <div class="mode-toggle">
                            <span class="switch"></span>
                        </div>
                    </li>
                    --> 
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

    import { ref, computed, onMounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    

    const logo = `/asset/dashboard2/images/logo.png?v=3`; 
    const sidebarClose = ref(false); 

    const sidebarLinks = ref([ 
        { 
            id: 1, 
            title: 'Dashboard',
            icon: 'bx bx-grid-alt',
            route: 'backoffice.dashboard2',
            isActive: false,
        }, 
        { 
            id: 2, 
            title: 'Form',
            icon: 'bx bxs-spreadsheet',
            route: 'backoffice.form',
            isActive: false,
        },
        { 
            id: 3, 
            title: 'Toast',
            icon: 'bx bxs-notification',
            route: 'backoffice.toast',
            isActive: false,
        },
        
    ]);

    onMounted(() => { 

        var currentRoute = route().current();

        sidebarLinks.value.forEach(function (item) {
            if(item.route === currentRoute) {
                item.isActive = true;
            }
        });
        
    }); 

    const toggleSidebar = () => { 
        sidebarClose.value = !sidebarClose.value;
    }

    const iconClasses = (link) => { 
        var classes = ``;
        classes += link.icon;

        if(link.isActive){
            classes += ` active`;
        }
        return classes;
    } 

      
</script>

