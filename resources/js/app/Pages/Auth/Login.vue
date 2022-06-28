<template> 
    <Head title="Login" />
    <LoginLayout> 
        
        <div class="xl:w-12/12 mb-12 md:mb-0">
            <form @submit.prevent="loginForm.post(route('login.post'))" class="mt-16">
                

                <!-- Email input -->
                <div class="mb-6">
                    <input v-model="loginForm.email" type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email address" />
                    <div v-if="errors.email" class="text-red-600">
                        {{ errors.email }}
                    </div>

                </div>

                <!-- Password input -->
                <div class="mb-6">
                    <input v-model="loginForm.password" type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Password" />
                </div>

                <div class="flex justify-between items-center mb-6">
                    <div class="form-group form-check">
                        <input v-model="loginForm.remember" type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="exampleCheck2" />
                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">Remember me</label>
                    </div>
                </div>

                <div class="text-center lg:text-left">
                    <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        Login
                    </button>
                    
                </div>
            </form>
</div>

    </LoginLayout>
</template>  
<script>  

    import LoginLayout from '../../Layouts/Login';
    import { Head, useForm } from '@inertiajs/inertia-vue3';

    export default {  
        components: {
            LoginLayout,
            Head,
            useForm,
        },
        props: {
            errors: Object
        },
        setup() {
            const loginForm = useForm({
                email: '',
                password: '',
                remember: false,
            })

            return { loginForm }
        }
    }
        
</script>

