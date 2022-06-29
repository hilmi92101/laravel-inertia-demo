<template> 
     
    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">

            <a href="#" class="nav__logo">Smith</a>
            <div :class="{'show-menu' : menuIsShown }" class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li @click="closeMenu" v-for="link in links" :key="link.id" class="nav__item">
                        <a :class="{'active-link' : link.isActive }" :href="link.anchor" class="nav__link">
                            <i :class="link.icon" class="nav__icon"></i>{{ link.title }}
                        </a>
                    </li>
                </ul>
            </div>
            <div @click="toggleMenu" class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>

        </nav>
        
    </header>

    <main class="l-main bd-container">
        <!-- All elements within this div, is generated in PDF -->
        <div class="resume" id="area-cv">
            <div class="resume__left">
                <!--========== HOME ==========-->
                <section class="home" id="home">
                    
                    <div class="home__container section bd-grid">
                        <div class="home__data bd-grid">
                            <img class="home__img" :src="profileImg">
                            <h1 class="home__title">SMITH <b>MATTHEW</b></h1>
                            <h3 class="home__profession">Web Developer</h3>
                            <div>
                                <a download="" :href="demoResume" class="home__button-movil">
                                    Download
                                </a>
                            </div>
                        </div>

                        <div class="home__address bd-grid">
                            <span class="home__information">
                                <i class="bx bx-map home__icon"></i>
                                Av. Bolivar #123 Lima - Peru
                            </span>
                            <span class="home__information">
                                <i class="bx bx-envelope home__icon"></i>
                                user@gamil.com
                            </span>
                            <span class="home__information">
                                <i class="bx bx-phone home__icon"></i>
                                999-888-777
                            </span>
                        </div>
                    </div>

                </section>          
                
                <!--========== SOCIAL ==========-->
                <section class="social section">
                    <h2 class="section-title">SOCIAL</h2>
                    <div class="social__container bd-grid">
                        <a 
                            v-for="social in socials" :key="social.id" :href="social.url" class="social__link"
                            target="_blank"
                        >
                            <i :class="social.icon" class="social__icon"></i>
                            {{ social.title }}
                        </a>
                    </div>
                </section>

                <!--========== PROFILE ==========-->
                <section class="profile section" id="profile">
                    <h2 class="section-title">Profile</h2>
                    <p class="profile__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita non quibusdam voluptate magnam dignissimos minus distinctio ducimus dolores, ipsam accusantium excepturi quidem repellendus necessitatibus eaque, obcaecati rerum consectetur tempore cum.</p>
                    
                </section>
                
                <!--========== EDUCATION ==========-->
                <section class="education section" id="education">
                    <h2 class="section-title">Education</h2>
                    <div class="education__container bd-grid">
                        <div 
                            v-for="(education, index) in educations" :key="education.id" class="education__content"
                        >
                            <div class="education__time">
                                <span class="education__rounder"></span>
                                <span v-if="processEducationLine(index, educations.length)" class="education__line"></span>
                            </div>
                            <div class="education__data bd-grid">
                                <h3 class="education__title">{{ education.title }}</h3>
                                <span class="education__studies">{{ education.studies }}</span>
                                <span class="education__year">{{ education.year }}</span>
                            </div>
                        </div>
                    </div>
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

    import { ref, onMounted, onUnmounted } from 'vue'; 
    import { useRouter } from 'vue-router';

    const router = useRouter();
    const redirect = (route) => { 
        router.push({name: route});
    }
    
    /* ======================================
        ADD MAIN CLASS TO BODY
    ====================================== */
    onMounted(() => {  
        document.body.classList.add('project-resume');
    }); 
    onUnmounted(() => {  
        document.body.classList.remove('project-resume');
    });

    /* ======================================
        DECLARE
    ====================================== */
    const profileImg = ref('/asset/resume/img/perfil.jpg');
    const demoResume = ref('/asset/resume/pdf/ResumeCv.pdf');

    /* ======================================
        MENU FUNCTIONALITIES
    ====================================== */
    const menuIsShown = ref(false);
    const toggleMenu = () => { 
        menuIsShown.value = !menuIsShown.value;
    }

    const closeMenu = () => { 
        menuIsShown.value = false;
    }

    

    /* ======================================
        LINKS
    ====================================== */
    const links = ref([ 
        { 
            id: 1, 
            icon: 'bx bx-home', 
            title: 'Home',
            anchor: '#home', 
            isActive: true, 
        }, 
        { 
            id: 2, 
            icon: 'bx bx-user', 
            title: 'Profile',
            anchor: '#profile',
            isActive: false, 
        }, 
        { 
            id: 3, 
            icon: 'bx bx-book', 
            title: 'Education', 
            anchor: '#education', 
            isActive: false,
        }, 
        { 
            id: 4, 
            icon: 'bx bx-receipt', 
            title: 'Skills',
            anchor: '#skills',  
            isActive: false,
        },
        { 
            id: 5, 
            icon: 'bx bx-briefcase-alt', 
            title: 'Experience', 
            anchor: '#experience', 
            isActive: false,
        },
        { 
            id: 6, 
            icon: 'bx bx-award', 
            title: 'Certificates',
            anchor: '#certificates',  
            isActive: false,
        },
        { 
            id: 7, 
            icon: 'bx bx-link-external', 
            title: 'References',
            anchor: '#references',  
            isActive: false,
        },
    ]);

    const socials = ref([ 
        { 
            id: 1, 
            icon: 'bx bxl-linkedin-square', 
            title: '@smithmat',
            url: 'htttps://linkedin.com/', 
        }, 
        { 
            id: 2, 
            icon: 'bx bxl-facebook', 
            title: '@smithmat',
            url: 'https://www.facebook.com/', 
        },
        { 
            id: 3, 
            icon: 'bx bxl-instagram', 
            title: '@smithmat',
            url: 'https://www.instagram.com/', 
        },
    ]);

    const educations = ref([ 
        { 
            id: 1, 
            title: 'FOUNDATION OF DESIGN',
            studies: 'College of Studies', 
            year: '2008 - 2009', 
        },
        { 
            id: 2, 
            title: 'DEGREE OF DESIGN',
            studies: 'University of Design', 
            year: '2010 - 2015', 
        },
        
        { 
            id: 3, 
            title: 'MASTER OF DESIGN',
            studies: 'University of Studies', 
            year: '2016 - 2020', 
        },
        
    ]);

    const processEducationLine = (index, total) => { 
        var no = index + 1;
        if(no == total){
            return false;
        }
        return true;

        
    }
    
</script>