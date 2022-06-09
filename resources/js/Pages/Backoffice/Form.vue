<template> 
    <Head title="Dashboard 2"></Head>


    <DashboardLayout>

        <div class="w-full mt-4">
            <div class="p-8 bg-white rounded-2xl shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Form</h2>


                <div :class="{ 'active': isSignup }" class="forms-wrapper mx-auto justify-center">
                    <div class="forms">
                        <div class="form login">
                            <span class="title">Login</span>

                            <form action="#">
                                <div class="input-field">
                                    <input type="text" placeholder="Enter your email" required>
                                    <i class="uil uil-envelope icon"></i>
                                </div>
                                <div class="input-field">
                                    <input ref="passwordRef" type="password" class="password" placeholder="Enter your password" required>
                                    <i class="uil uil-lock icon"></i>
                                    <i @click="toggleEye" :class="inputPasswordClass" class="uil showHidePw"></i>
                                </div>

                                <div class="checkbox-text">
                                    <div class="checkbox-content">
                                        <input type="checkbox" id="logCheck">
                                        <label for="logCheck" class="text">Remember me</label>
                                    </div>

                                    <a href="#" class="text">Forgot password?</a>
                                </div>

                                <div class="input-field button">
                                    <input type="button" value="Login Now">
                                </div>
                            </form>

                            <div class="login-signup">
                                <span class="text">Not a member?
                                    <a @click="openSignup" href="#" class="text signup-link">Signup now</a>
                                </span>
                            </div>
                        </div>

                        <!-- Registration Form -->
                        <div class="form signup">
                            <span class="title">Registration</span>

                            <form action="#">
                                <div class="input-field">
                                    <input type="text" placeholder="Enter your name" required>
                                    <i class="uil uil-user"></i>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Enter your email" required>
                                    <i class="uil uil-envelope icon"></i>
                                </div>
                                <div class="input-field">
                                    <input type="password" class="password" placeholder="Create a password" required>
                                    <i class="uil uil-lock icon"></i>
                                </div>
                                <div class="input-field">
                                    <input ref="confirmPasswordRef" type="password" class="password" placeholder="Confirm a password" required>
                                    <i class="uil uil-lock icon"></i>
                                    <i @click="toggleEye2" :class="inputPasswordClass2" class="uil showHidePw"></i>
                                </div>

                                <div class="checkbox-text">
                                    <div class="checkbox-content">
                                        <input type="checkbox" id="sigCheck">
                                        <label for="sigCheck" class="text">Remember me</label>
                                    </div>

                                    <a href="#" class="text">Forgot password?</a>
                                </div>

                                <div class="input-field button">
                                    <input type="button" value="Login Now">
                                </div>
                            </form>

                            <div class="login-signup">
                                <span class="text">Already a member?
                                    <a @click="openLogin" href="#" class="text login-link">Signup now</a>
                                </span>
                            </div>
                        </div>
                    </div>
                
                </div>
                



            </div>
        </div>

        
    </DashboardLayout>
    
</template>  

<script setup>  

    import DashboardLayout from '../../Layouts/Dashboard/Dashboard2';
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref, computed } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    const iconEye = ref(false);
    const iconEye2 = ref(false);

    const isSignup = ref(false);
    const openSignup = () => { 
        isSignup.value = true;
        iconEye.value = false;
        iconEye2.value = false;
    } 
    const openLogin = () => { 
        isSignup.value = false;
        iconEye.value = false;
        iconEye2.value = false;
    }
    const inputPasswordClass = computed( () => { 
        if(iconEye.value){ 
            return 'uil-eye'; 
        } 
        return 'uil-eye-slash '; 
    });
    const inputPasswordClass2 = computed( () => { 
        if(iconEye2.value){ 
            return 'uil-eye'; 
        } 
        return 'uil-eye-slash '; 
    });
    
    const passwordRef = ref(null);
    const toggleEye = () => { 
        iconEye.value = !iconEye.value;
        if(passwordRef.value.type ==="password"){
            passwordRef.value.type = "text";
        }else{
            passwordRef.value.type = "password";
        }

    } 

    const confirmPasswordRef = ref(null);
    const toggleEye2 = () => { 
        iconEye2.value = !iconEye2.value;
        if(confirmPasswordRef.value.type ==="password"){
            confirmPasswordRef.value.type = "text";
        }else{
            confirmPasswordRef.value.type = "password";
        }
    }

    

    

    

      
</script>


