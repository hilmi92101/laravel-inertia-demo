<template> 
    <Head title="Dashboard 3"></Head>


    <DashboardLayout>

        <h1>My Dashboard</h1>
        <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur animi voluptatibus cum maxime distinctio
            iste quod deleniti eius, autem voluptates cumque suscipit iure quasi eligendi ullam. Sapiente eligendi porro
            reprehenderit corrupti error facilis quo, fugiat fugit? Maiores aliquam ad, molestiae iste nihil, commodi
            doloremque tempore excepturi aut id ducimus unde?
        </p>
        <p class="copyright">
            &copy; 2021 - <span>Aqumex</span> All Rights Reserved.
        </p>

        
    </DashboardLayout>
    
</template>  

<script setup>  

    import DashboardLayout from '../../Layouts/Dashboard/Dashboard3';
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref, computed } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    
    /*
    
    const button = document.querySelector("button"),
      toast = document.querySelector(".toast")
      closeIcon = document.querySelector(".close"),
      progress = document.querySelector(".progress");

      let timer1, timer2;

      button.addEventListener("click", () => {
        toast.classList.add("active");
        progress.classList.add("active");

        timer1 = setTimeout(() => {
            toast.classList.remove("active");
        }, 5000); //1s = 1000 milliseconds

        timer2 = setTimeout(() => {
          progress.classList.remove("active");
        }, 5300);
      });
      
      closeIcon.addEventListener("click", () => {
        toast.classList.remove("active");
        
        setTimeout(() => {
          progress.classList.remove("active");
        }, 300);

        clearTimeout(timer1);
        clearTimeout(timer2);
      });
    
    */

      
</script>


