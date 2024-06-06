<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card_title_center">تعديل بيانات الضبط العام </h5>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="form-group">
                        <label for="system_name">اسم الشركة </label>
                        <input class="form-control" id="system_name" v-model="companyInfo.system_name"
                            placeholder="ادخل اسم الشركة ">
                    </div>
                    <div class="form-group">
                        <label for="address">عنزان الشركة </label>
                        <input class="form-control" id="address" v-model="companyInfo.address"
                            placeholder="ادخل عنوان  الشركة ">
                    </div>
                    <div class="form-group">
                        <label for="address">هاتف الشركة </label>
                        <input class="form-control" id="phone" v-model="companyInfo.phone"
                            placeholder="ادخل رقم هاتف الشركة ">
                    </div>
                    <div class="form-group">
                        <label for="general_alert">رسالة تنبيه على الشاشة </label>
                        <input class="form-control" v-model="companyInfo.general_alert"
                            placeholder="ادخل  رسالة تنبيه على الشاشة  ">
                    </div>
                    <div class="form-group">
                        <label for="general_alert"> شعار الشركة </label>
                        <div class="image" id="old_image">
                            <img class="custom_image" :src="`/admin/uploads/${companyInfo.photo}`" alt="لوحو الشركة ">

                            <a class="btn btn-danger btn-sm" id="update_image" href="#">تغيير </a> <br>
                            <input type="file" name="photo" id="photo" style="display: none;">
                            <button class=" btn btn-danger btn-sm" id="cancel_update_image" style="display: none;">
                                الغاء </button>
                        </div>
                    </div>

                    <button id="updated" type="button" @click=" updateCompanyInfo(companyInfo)" class="btn btn-primary">
                        تحديث
                    </button>




                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
</template>

<script>


import Form from 'vform'

export default {
    
    data() {
        return {
            
            companyInfo: new Form({
                system_name:'',
                address: '',
                phone: '',
                general_alert: '',
                photo: '',


            }),
        }
    },
    methods: {
    
        
        updateCompanyInfo() {
            let name = $("#system_name").val();
            if (name == '') {
                alert('ادخل اسم الشركة ')
                return false;
            }
            let address = $("#address").val();
            if (address == '') {
                alert('ادخل عنوان الشركة ')
                return false;
            }
            let phone = $("#phone").val();
            if (phone == '') {
                alert('ادخل هاتف  الشركة ')
                return false;
            }
        
                
                this.$store.dispatch('updateCompanyInfo',this.companyInfo);

            
            
        },
    },

    created() {
        this.$store.dispatch('getCompanyInfo');
        

    },

    computed: {
        companyInfo() {
            console.log(this.$store.getters.companyInfo);
            return this.$store.getters.companyInfo
        },
    
    }
}

</script>