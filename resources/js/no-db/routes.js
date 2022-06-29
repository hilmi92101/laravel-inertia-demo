import { createRouter, createWebHistory } from 'vue-router'; 

import Resume from './pages/Resume';  

const router = createRouter({  
    history: createWebHistory(),  
    routes: [  
        {  
            name: 'resume',  
            path: '/no-db/resume',  
            component: Resume,  
        },  
    ],  
});  
export default router;