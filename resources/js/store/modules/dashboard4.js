const state = { 
    currentLang: 'en', 
}; 
const getters = { 
    currentLang: state => { 
        return state.currentLang; 
    }, 
}; 
const actions = { 

    changeLanguaeg: (context, payload) => { 
        context.commit('changeLanguaeg', payload); 
    },
}; 
const mutations = { 
    changeLanguaeg: (state, payload) => { 
        state.currentLang = payload; 
    },
}; 
export default { 
    namespaced: true, 
    state, 
    getters, 
    actions, 
    mutations, 
}