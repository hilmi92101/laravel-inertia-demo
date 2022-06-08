<template>  
    <div class="dashboard-1">



        <div :class="{ open: sidebarOpen }" class="sidebar">
            <div class="logo">
                <img @click.prevent="toggleSidebar"  :src="logo" alt="logo" id="logo_img">
                <div class="logo_text">THEKIET</div>
                <i @click.prevent="toggleSidebar" class='bx bx-menu-alt-right' id="btn"></i>
            </div>

            <div class="nav_list">
                <ul>
                    <li>
                        <a href="#">
                            <i class='bx bx-grid-alt'></i>
                            <span class="links_name">Dashboard</span>
                        </a>
                        <span class="tooltip">Dashboard</span>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bx-bar-chart'></i>
                            <span class="links_name">Analytics</span>
                        </a>
                        <span class="tooltip">Analytics</span>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bx-chat'></i>
                            <span class="links_name Messages">Messages</span>
                        </a>
                        <span class="tooltip">Messages</span>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bx-folder'></i>
                            <span class="links_name">File Manager</span>
                        </a>
                        <span class="tooltip">Files</span>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bx-user'></i>
                            <span class="links_name">User</span>
                        </a>
                        <span class="tooltip">User</span>
                    </li>
                </ul>
                
                <!--
                <div class="info">
                    <a href="#">
                        <img :src="avatar" alt="avatar" class="avatar">
                        <div class="table">
                            <div class="table_text">
                                <span class="name">The Kiet Vuong</span>
                                <span class="country">SaiGon, VN</span>
                                <p> <span>Upgrade to Pro</span> <br> One year support, <br>
                                    monthly updates for up to 5 team members</p>
                            </div>
                        </div>
                    </a>
                    <div class="tooltip">
                        <span class="name">The Kiet Vuong</span>
                        <span class="country">SaiGon, VN</span>
                    </div>
                </div>
                -->

                <div class="logout">
                    <a href="#">
                        <i class='bx bx-log-out'></i>
                        <span class="links_name">Log out</span>
                    </a>
                    <span class="tooltip">Log out</span>
                </div>
            </div>
        </div>

        <section class="Home_section">
            <div class="text">Sidebar</div>
            
            <div class="main-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec tincidunt arcu. Morbi ex risus, congue sed est et, faucibus eleifend ligula. Etiam urna odio, mattis vitae mi ac, consectetur ullamcorper nibh. Mauris elementum egestas erat, nec ullamcorper ante aliquam ut. Praesent consequat imperdiet dignissim. Duis sodales pretium sapien sed elementum. Vestibulum semper ac velit ac mollis. Nam ultricies eros at orci euismod, sit amet sodales est aliquet.</p>

                <br>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec tincidunt arcu. Morbi ex risus, congue sed est et, faucibus eleifend ligula. Etiam urna odio, mattis vitae mi ac, consectetur ullamcorper nibh. Mauris elementum egestas erat, nec ullamcorper ante aliquam ut. Praesent consequat imperdiet dignissim. Duis sodales pretium sapien sed elementum. Vestibulum semper ac velit ac mollis. Nam ultricies eros at orci euismod, sit amet sodales est aliquet. Donec lobortis lobortis erat, ultrices semper leo aliquam ultricies. Morbi facilisis dui vitae lacus euismod cursus. Vestibulum orci erat, tempor id tellus rutrum, aliquam vulputate orci. Morbi a turpis sit amet orci commodo sollicitudin. Sed dapibus fermentum vulputate. Mauris nec odio massa. Nam sit amet magna vestibulum ligula vulputate aliquam. Maecenas placerat diam varius, auctor sem ut, pellentesque ex. Curabitur tincidunt tellus vel iaculis volutpat. In quis mauris hendrerit, ultricies tortor vel, sodales massa. Nulla in vulputate tortor, a faucibus dolor. Vestibulum in congue purus. Mauris quis interdum nunc. Duis iaculis magna eu tellus consectetur semper. Sed varius ac purus non volutpat. Nullam eleifend feugiat convallis. Praesent ante magna, auctor non metus eu, viverra suscipit leo. In lacinia dignissim ligula, id faucibus dui cursus et. Vestibulum ullamcorper rhoncus sollicitudin. Praesent non posuere mi. Cras sed vestibulum eros, et facilisis elit. Donec hendrerit vulputate ligula at commodo. Integer nec justo dui. Quisque tempor, ipsum venenatis varius pretium, tellus est lacinia turpis, nec ultrices lacus tellus non ligula. Phasellus eget orci efficitur arcu fermentum ornare. Donec non magna dignissim, blandit eros eget, aliquet felis. Suspendisse potenti. Ut ultrices sem ut eleifend hendrerit. Etiam sit amet ex at velit fringilla malesuada.</p>

                 -->
                
            </div>
        </section>



    </div>
</template>  
<script setup>  

    import { ref } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    const logo = `/asset/dashboard1/images/logo.png`;
    const avatar = `/asset/dashboard1/images/avatar.png`;

    const sidebarOpen = ref(true); 
    var x = window.matchMedia("(max-width: 700px)");
    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

    console.log(width);

    // toggle sidebar
    const toggleSidebar = () => { 
        // if (!x.matches) {
        //     console.log(sidebarOpen.value)
        //     sidebarOpen.value = !sidebarOpen.value;
        // }

        sidebarOpen.value = !sidebarOpen.value;
    } 

      
</script>

