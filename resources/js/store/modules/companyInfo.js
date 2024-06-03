import axios from "axios";



export default {
    state: {
        companyInfo: {},
    },
    getters: {
        companyInfo(state) {
            return state.companyInfo
        },
    },
    mutations: {
        CompanyInfo: (state, data) => {
            state.companyInfo = data;
            
        }
    },
    actions: {

        getCompanyInfo: (context, data) => {
            axios.get('/admin/adminpanelsetting/getCompanyInfo')
                .then((response) => {
                    console.log(response.data);
                    context.commit('CompanyInfo', response.data);

                });
        }
    

    },
}