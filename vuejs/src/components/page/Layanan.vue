<template >
    <section style="pading-top:20px; background-color: #F5F5F5;">
        <div class="container">
            <div class="row " id="layanan" >
                <div class="col-md-4 themed-grid-col" v-for="lyn in layanan" :key="lyn.id">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-shrink-1 bd-highlight rounded mx-auto d-block">
                            <img :src="lyn.icon_lyn" alt="..." width="110" height="75"  data-aos="flip-right">
                        </div>
                        <div class="p-2 w-100 bd-highlight">
                            <h5 class="text-danger" style=" font-weight: 10; font-size: 23px;">
                                {{lyn.nama_lyn}}
                            </h5>
                            <p style=" font-weight: 10; font-size: 17px;">
                                {{lyn.deskripsi_lyn}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</template>

<style>


</style>

<script>
import AOS from 'aos' 
import axios from 'axios';

export default {
    created ( ) {
        AOS.init();
        this.getLayanan();
    },

    name: 'Contact List',
    data(){
        return{
        layanan:Array,
        }
    },

    methods: {
        async getLayanan(){
            let url = 'http://127.0.0.1:8000/api/layanan/';
            await axios.get(url).then(response => {
            this.layanan = response.data.layanan;
            console.log(this.layanan);
            }).catch(error => {
            console.log(error);
            });
        },
    },
};

</script>