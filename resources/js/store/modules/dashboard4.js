const state = { 
    currentLang: 'en', 
    breadcrumb: {
        root: 'Pages',
        currentPage: 'Dashboard'
    }, 
    mainLinks: [
        {
            id: 1,
            isActive: false,
            title: 'Dashboard',
            icon: `fa-solid fa-chart-simple`,
            route: 'backoffice.dashboard4',
        },
        {
            id: 2,
            isActive: false,
            title: 'Tables',
            icon: `fa-solid fa-table`,
            route: 'backoffice.dashboard4.test',
        },
        // {
        //     id: 3,
        //     isActive: false,
        //     title: 'Billing',
        //     icon: `fa-solid fa-file-invoice`,
        //     route: 'backoffice.dashboard4.test',
        // },
        // {
        //     id: 4,
        //     isActive: false,
        //     title: 'Virtual Reality',
        //     icon: `fa-solid fa-vr-cardboard`,
        //     route: 'backoffice.dashboard4.test',
        // },
        // {
        //     id: 5,
        //     isActive: false,
        //     title: 'RTL',
        //     icon: `fa-solid fa-align-right`,
        //     route: 'backoffice.dashboard4.test',
        // },
    ],

}; 
const getters = { 
    currentLang: state => { 
        return state.currentLang; 
    }, 
    breadcrumb: state => { 
        return state.breadcrumb; 
    },
    mainLinks: state => { 
        return state.mainLinks; 
    },
}; 
const actions = { 

    changeLanguage: (context, payload) => { 
        context.commit('changeLanguage', payload); 
    },
    changeBreadcrumbPageTitle: (context, payload) => { 
        context.commit('changeBreadcrumbPageTitle', payload); 
    },
    showIsActiveLink: (context, payload) => { 
        var mainLinks = context.state.mainLinks;
        var currentLink = payload;
        mainLinks.forEach(function (link) { 
            if(link.route === currentLink) { 
                link.isActive = true; 
            } else {
                link.isActive = false;
            } 
        });

        context.commit('showIsActiveLink', mainLinks);
    },

    
}; 
const mutations = { 
    changeLanguage: (state, payload) => { 
        state.currentLang = payload; 
    },
    changeBreadcrumbPageTitle: (state, payload) => { 
        state.breadcrumb.currentPage = payload; 
    },
    showIsActiveLink: (state, payload) => { 
        state.mainLinks = payload; 
    },
}; 
export default { 
    namespaced: true, 
    state, 
    getters, 
    actions, 
    mutations, 
}