<template>
    <div class="py-4 text-center container" id="perencanaan_strategi">
    <!-- <div class="row py-lg-5"> -->
        <div class="container" data-aos="fade-up" data-aos-duration="800" v-for="cp in ttgKami" :key="cp.id">
            <h4  class="text-center">
                <!-- <span id="Perencanaan">Perencanaan </span>
                <span style="color:#FF2A2A;">Strategi</span>        -->
                <h2 style="color:#000000; font-weight: bold;">Tentang Kami</h2>
            </h4>
            <p class="lead Perusahaan-IT">
                {{cp.judul_cp}}
            </p>
        </div>
    <!-- </div> -->
    </div>
</template>


<script>
import AOS from 'aos' 
import axios from 'axios';

export default {
    created ( ) {
        AOS.init();
        this.getContacts();
    },

    name: 'Tentang Kami',
    data(){
        return{
            ttgKami:Array,
        }
    },

    methods: {
        async getContacts(){
            let url = 'http://127.0.0.1:8000/api/tentang_kami';
            await axios.get(url).then(response => {
            this.ttgKami = response.data.ttgKami;
            console.log(this.ttgKami);
        }).catch(error => {
            console.log(error);
        });
        },
    },

};


</script>