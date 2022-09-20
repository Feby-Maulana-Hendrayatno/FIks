<template>
    <section>
    <div class="container" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" >
    <h1 id="tentang_kami" style=" font-weight: 10; font-size: 40px; line-height: 65px;">
        <span id="spesialisasi">Spesialisasi </span>
        <span style="color:#FF2A2A;">Kami</span>       
    </h1>
    <br>
    <div class="row mb-3" v-for="ttg in tentangKami" :key="ttg.id">
        <div class="col-md-8 themed-grid-col">
            <div class="d-flex text-align-left">
            {{ttg.deskripsi}}
            </div>
        </div>
        <div class="col-md-4 themed-grid-col">
        <img :src="ttg.foto" class="rounded mx-auto d-block">
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
        this.getTentangKami();
    },

    name: 'SpesialisasiKami',
    data(){
        return{
        tentangKami:Array,
        }
    },

    methods: {

    getTentangKami(){
        let url = 'http://127.0.0.1:8000/api/spesialisasi/';
        axios.get(url).then(response => {
        this.tentangKami = response.data.tentangKami;
        console.log(this.tentangKami);
        }).catch(error => {
        console.log(error);
        });
    },

    },

};

</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Merienda&display=swap');
*{
    padding: 0;
    font-family: 'Montserrat', sans-serif;

}
.row{
    /* font-size: 200px; */
    font-family: Montserrat;
    text-align:justify; font-size:21px;  font-style: normal;
                font-weight: 0;
}










@media (min-width: 1200px) {
.row {
    font-size: 20px;
}
}
@media (max-width: 1080px) {

.row {
    font-size: 18px;
}
}


/* @media (max-width: 960px) {

.row {
    font-size: 18px;
}
}
@media (max-width: 840px) {

.row {
    font-size: 18px;
}
}
@media (max-width: 720px) {

.row {
    font-size: 18px;
}
}
@media (max-width: 600px) {

.row {
    font-size: 18px;
}
}
@media (max-width: 480px) {

.row {
    font-size: 18px;
}
}
@media (max-width: 360px) {

.row {
    font-size: 18px;
}
}
@media (max-width: 240px) {

.row {
    font-size: 18px;
}
}
@media (max-width: 120px) {

.row {
    font-size: 18px;
}
} */




/* 


@media (min-width: 1200px) {

h1 {
    font-size: 40px;
}
}
@media (max-width: 1080px) {

h1 {
    font-size: 36px;
}
}
@media (max-width: 960px) {

h1 {
    font-size: 32px;
}
}
@media (max-width: 840px) {

h1 {
    font-size: 28px;
}
}
@media (max-width: 720px) {

h1 {
    font-size: 24px;
}
}
@media (max-width: 600px) {

h1 {
    font-size: 20px;
}
}
@media (max-width: 480px) {

h1 {
        font-size: 16px;
}
}
@media (max-width: 360px) {

h1 {
    font-size: 12px;
}
}
@media (max-width: 240px) {

h1 {
    font-size: 8px;
}
}
@media (max-width: 120px) {

h1 {
    font-size: 4px;
}
} */











</style>