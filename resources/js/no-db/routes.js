import { createRouter, createWebHistory } from 'vue-router'; 

import Landing from './pages/Landing';  
import About from './pages/About'; 

const router = createRouter({  
    history: createWebHistory(),  
    routes: [  
        {  
            name: 'landing',  
            path: '/no-db',  
            component: Landing,  
        },  
        {  
            name: 'about',  
            path: '/no-db/about',  
            component: About,  
        },  
    ],  
});  
export default router;