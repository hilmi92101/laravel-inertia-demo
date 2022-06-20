const state = { 
    currentLang: 'en', 
    breadcrumb: {
        root: 'Pages',
        currentPage: 'Dashboard'
    }, 
}; 
const getters = { 
    currentLang: state => { 
        return state.currentLang; 
    }, 
    breadcrumb: state => { 
        return state.breadcrumb; 
    },
}; 
const actions = { 

    changeLanguage: (context, payload) => { 
        context.commit('changeLanguage', payload); 
    },
    changeBreadcrumbPageTitle: (context, payload) => { 
        context.commit('changeBreadcrumbPageTitle', payload); 
    },

    
}; 
const mutations = { 
    changeLanguage: (state, payload) => { 
        state.currentLang = payload; 
    },
    changeBreadcrumbPageTitle: (state, payload) => { 
        state.breadcrumb.currentPage = payload; 
    },
}; 
export default { 
    namespaced: true, 
    state, 
    getters, 
    actions, 
    mutations, 
}