<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>بيانات الضبط العام </h5>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="example2" class="table table-bordered table-hover">

                        <body>
                            <tr>
                                <td class="widtd30"> كود الشركة</td>
                                <td>{{ companyInfo.com_code }}</td>
                            </tr>
                            <tr>
                                <td class="widtd30"> اسم الشركة</td>
                                <td>{{ companyInfo.system_name }} </td>

                            </tr>
                            <tr>
                                <td class="widtd30"> حالة الشركة</td>

                                <td v-if="companyInfo.active == 1">
                                    مفعل
                                </td>
                                <td v-else>
                                    مفعل
                                </td>


                            </tr>

                            <tr>
                                <td class="widtd30"> عنوان الشركة</td>
                                <td>{{ companyInfo.address }}</td>
                            </tr>
                            <tr>
                                <td class="widtd30"> هاتف الشركة</td>
                                <td>{{ companyInfo.phone }}</td>
                            </tr>
                            <tr>
                                <td class="widtd30"> رسالة تنبيه اعلى الشركة</td>
                                <td>{{ companyInfo.general_alert }}</td>
                            </tr>
                            <tr>
                                <td class="widtd30"> لوجو الشركة</td>
                                <td>
                                    <div class="image">
                                        <img class="custom_image" :src="`/admin/uploads/${companyInfo.photo}`"
                                            alt="لوحو الشركة ">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="widtd30"> تاريخ اخر التحديث</td>
                                <td>

                                </td>
                            </tr>
                        </body>

                    </table>




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


export default {
    data() {
        return {}
    },
    metdods: {
    
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