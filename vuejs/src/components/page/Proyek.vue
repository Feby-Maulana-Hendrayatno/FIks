<template>
    <section class="gallery min-vh-100" id="produk">
    <!-- <div class="container" data-aos="zoom-out">   -->
        <h2 style="margin-left: 50px; margin-bottom: 20px; font-weight: 700;">
        <span id="proyek"  data-aos="zoom-out">Proyek </span>
        <span style="color:#FF2A2A;"  data-aos="zoom-out">Kami</span>   
        </h2>
    <!-- </div> -->
    <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3" >
            <div class="col" v-for="prd in produk" :key="prd.id" >
            <img :src="prd.foto_proyek" class="gallery-item" alt="gallery"  data-aos="zoom-out">
            <h4 class="text-danger responsive-font-example" style="font-weight: 650; font-size: 22px; ">
                {{prd.nm_proyek}}
            </h4>   
            <p  style="font-weight: 650; font-size: 17px; ">
                {{prd.device}}
                <!-- {{ url(\'' + prd.device + '\') }} -->
            </p>
            </div>
        </div>
    </div>
    </section>
</template>



<script>
import AOS from 'aos'
import axios from 'axios';

export default {

    created ( ) {
        AOS.init();
        this.getProduk();
    },

    name: 'ContactList',
    data(){
        return{
        produk:Array,
        }
    },

    methods: {
        getProduk(){
            let url = 'http://127.0.0.1:8000/api/proyek/';
            axios.get(url).then(response => {
            this.produk = response.data.produk;
            console.log(this.produk);
        }).catch(error => {
            console.log(error);
        });
        },
    },

};

</script>