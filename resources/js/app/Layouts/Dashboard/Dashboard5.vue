<template>  

    <!-- SIDEBAR -->
	<section id="sidebar" :class="{'hide' : sidebarHidden }">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i> AdminSite</a>
		<ul class="side-menu">
			<li>
				<Link 
					:href="route('backoffice.dashboard5')" 
					:class="{ 'active': $page.component === 'Backoffice/Dashboard5/Index' }"
				>
					<i class='bx bxs-dashboard icon'></i> Dashboard
				</Link></li>

			<li class="divider" data-text="components">{{ sidebarHidden ? '-' : 'Components' }}</li>
			<li>
				<Link 
					:href="route('backoffice.dashboard5.datatable')"
					:class="{ 'active': $page.component === 'Backoffice/Dashboard5/Datatable' }"
				>
					<i class='bx bx-table icon'></i> Datatable
				</Link>
			</li>
			<li>
				<Link 
					:href="route('backoffice.dashboard5')"
				>
					<i class='bx bx-upload icon'></i> File Upload
				</Link>
			</li>

			<!--

			<li class="divider" data-text="main">{{ sidebarHidden ? '-' : 'Main' }}</li>
			<li>
				<a @click="toggleDropdown1" :class="{'active' : dropdown1Shown }" href="#">
					<i class='bx bxs-inbox icon' ></i> 
					Elements 
					<i class='bx bx-chevron-right icon-right' ></i>
				</a>
				<ul class="side-dropdown" :class="{'show' : dropdown1Shown }">
					<li><a href="#">Alert</a></li>
					<li><a href="#">Badges</a></li>
					<li><a href="#">Breadcrumbs</a></li>
					<li><a href="#">Button</a></li>
				</ul>
			</li>
			<li><a href="#"><i class='bx bxs-chart icon' ></i> Charts</a></li>
			<li><a href="#"><i class='bx bxs-widget icon' ></i> Widgets</a></li>


			<li class="divider" data-text="table and forms">{{ sidebarHidden ? '-' : 'Table and forms' }}</li>
			<li><a href="#"><i class='bx bx-table icon' ></i> Tables</a></li>
			<li>
				<a href="#" @click="toggleDropdown2" :class="{'active' : dropdown2Shown }" >
					<i class='bx bxs-notepad icon' ></i> 
					Forms 
					<i class='bx bx-chevron-right icon-right' ></i>
				</a>
				<ul class="side-dropdown" :class="{'show' : dropdown2Shown }">
					<li><a href="#">Basic</a></li>
					<li><a href="#">Select</a></li>
					<li><a href="#">Checkbox</a></li>
					<li><a href="#">Radio</a></li>
				</ul>
			</li>

			-->
		</ul>
		<!--
		<div class="ads">
			<div class="wrapper">
				<a href="#" class="btn-upgrade">Upgrade</a>
				<p>Become a <span>PRO</span> member and enjoy <span>All Features</span></p>
			</div>
		</div>
		-->
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i @click="toggleSidebar" class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Search...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			<a href="#" class="nav-link">
				<i class='bx bxs-message-square-dots icon' ></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>
			<div ref="profileElRef" class="profile">
				<img @click="toggleProfileDropdown" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul :class="{'show' : profileDropdownShown }" class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="#"><i class='bx bxs-cog' ></i> Settings</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<slot />
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
</template>  
<script setup>  

    import { ref, computed, onMounted, onUnmounted } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    import Breadcrumb from '@/app/Components/Dashboard4/Breadcrumb';

	/* ================================================
        ADD CLASS TO BODY
    ================================================ */
    onMounted(() => { 
        document.body.classList.add('dashboard-5');
    });

    onUnmounted(() => { 
        document.body.classList.remove('dashboard-5');
    });

	/* ================================================
        DROPDOWN
    ================================================ */
	const dropdown1Shown = ref(false);
	const dropdown2Shown = ref(false);

	const toggleDropdown1 = () => { 
		dropdown1Shown.value = !dropdown1Shown.value;
		if (dropdown2Shown.value) dropdown2Shown.value = false;
    }

	const toggleDropdown2 = () => { 
		dropdown2Shown.value = !dropdown2Shown.value;
		if (dropdown1Shown.value) dropdown1Shown.value = false;

    }


	/* ================================================
        SIDEBAR
    ================================================ */
	const sidebarHidden = ref(false);
	const toggleSidebar = () => { 
		dropdown1Shown.value = false;
		dropdown2Shown.value = false;
		sidebarHidden.value = !sidebarHidden.value;
    }


	/* ================================================
        PROFILE DROPDOWN
    ================================================ */
	const profileDropdownShown = ref(false);
	const toggleProfileDropdown = () => { 
		profileDropdownShown.value = !profileDropdownShown.value;
    }

	

	/* ================================================
        PROGRESS BAR
    ================================================ */
	const renderProgressBar = (percentage) => { 
		return ``;
    }

	/* ================================================
        WINDOW EVENTS
    ================================================ */
	const profileElRef = ref(null);
	const closeEveryElements = (e) => { 
		if(!profileElRef.value.contains(e.target)){
			profileDropdownShown.value = false;
		}
		
    }

	onMounted(() => { 
        window.addEventListener('click', closeEveryElements);
    }); 

    onUnmounted(() => { 
        window.removeEventListener('click', closeEveryElements);
    });
	
      
</script>

<style scoped>

</style>

