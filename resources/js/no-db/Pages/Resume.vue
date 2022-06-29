<template> 
     
    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        
    </header>

    <main class="l-main bd-container">
        <!-- All elements within this div, is generated in PDF -->
        <div class="resume" id="area-cv">
            <div class="resume__left">
                <!--========== HOME ==========-->
                <section class="home" id="home">
                    
                    <!-- Theme change button -->
                    

                    <!-- Button to generate and download the pdf. Available for desktop. -->

                </section>          
                
                <!--========== SOCIAL ==========-->
                <section class="social section">
                    
                </section>

                <!--========== PROFILE ==========-->
                <section class="profile section" id="profile">
                    
                </section>
                
                <!--========== EDUCATION ==========-->
                <section class="education section" id="education">
                    
                </section>


                <!--========== SKILLS  ==========-->
                <section class="skills section" id="skills">
                    
                </section>

            </div>

            <div class="resume__right">
                <!--========== EXPERIENCE ==========-->
                <section class="experience section" id="experience">
                    
                </section>

                <!--========== CERTIFICATES ==========-->
                <section class="certificate section" id="certificates">
                    
                </section>

                <!--========== REFERENCES ==========-->
                <section class="references section" id="references">
                    
                </section>

                <!--========== LANGUAGES ==========-->
                <section class="languages section">
                    
                </section>
                
                <!--========== INTERESTS ==========-->
                <section class="interests section">
                    
                </section>
            </div>
        </div>        
    </main>
    
</template> 
<script setup> 

    import { useRouter } from 'vue-router';

    const router = useRouter();
    const redirect = (route) => { 
        router.push({name: route});
    }
    
</script>