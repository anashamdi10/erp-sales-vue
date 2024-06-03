import { createStore } from 'vuex';
import companyInfo from './modules/companyInfo';


export const store = createStore({
    strict: true,
    modules: {
        companyInfo , 
    },
    state: {
        test: 0,
    },
    getters: {
        // test(state) {
        //     return state.test
        // }
    },
    mutations: {
        // testMutation: (state) => {
        //     state.test++
        //     console.log(state.test)
        // }
    },
    actions: {
        // testAction: (context) => {
        //     context.commit('testMutation')
        // }
    }
});