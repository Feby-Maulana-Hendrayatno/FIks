<template>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info static-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./assets/logo.png" alt="..." height="36">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="active">
              <a href="#" class="nav-link">
                Beranda
              </a>
            </li>
            <li>
              <a href="tentang_kami" class="nav-link">Tentang Kami</a>
            </li>
            <li>
              <a href="#" class="nav-link">Layanan</a>
            </li>
            <li>
              <a href="#" class="nav-link">Produk</a>
            </li>
            <li>
              <a href="#" class="nav-link">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  













  <div class="home">
    <Carousel
      :navigation="true"
      :pagination="true"
      :startAutoPlay="false"
      :timeout="5000"
      class="carousel"
      v-slot="{ currentSlide }"
    > 
      
              <Slide v-for="(slide, index) in layanan" :key="index">
        <div v-show="currentSlide === index + 1" class="slide-info">
          <img :src="slide.icon" alt="" />
        </div>
      </Slide>
    </Carousel>
  </div>


































  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>















































<div class="background">
  <br>
  <br>
  <br>
  <Ok />
  <br>
  <TentangKami />
  <br>
  











  <br>
  <Layanan />
  <PerencanaanStrategi />
</div>
<br>
<!-- End Background -->
<Footers />
<div class="container">
        <div class="row" >
            <div class="col" v-for="foot1 in carousel" :key="foot1.id" data-aos="fade-down" data-aos-duration="800">
            <img :src="foot1.foto"  class="rounded mx-auto d-block"  width="70" height="70 " >
                <div class="card-body">
                    <p class="card-text text-center">
                    {{foot1.foto}}
                    </p>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
<div class="container">
        <div class="row" >
            <div class="col" v-for="foot in footer" :key="foot.id" data-aos="fade-down" data-aos-duration="800">
            <img :src="foot.icon" class="rounded mx-auto d-block"  width="70" height="70 " >
                <div class="card-body">
                    <p class="card-text text-center">
                    {{foot.deskripsi_footer}}
                    </p>
                </div>
            </div>
        </div>
    </div>
<Produk />


<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./assets/wildlife_animal.png" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
</div> 

<br>

</template>




<style lang="scss" scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


#app {
  /* font-family: Avenir, Helvetica, Arial, sans-serif; */
  /* font-family: Montserrat; */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  /* color: #FFFFFF; */
}





p.lead.Perusahaan-IT{
  color: #4D4D4F;
  font-weight: 380;
  /*
font-size: 20px;
line-height: 30px;

display: flex;
align-items: center;
text-align: center;
letter-spacing: 0.1em; */
}

nav.navbar.navbar-expand-lg.navbar-dark.static-top{
  background-color: #67C6EF;
}


.carousel {
  position: relative;
  max-height: 95vh;
  height: 100vh;

  .slide-info {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    max-height: 100%;
    height: 100%;

    img {
      min-width: 100%;
      height: 100%;
        // height: 600px;
      object-fit: cover;
    }
  }
}



.background {
  background-color: #FEFEFE;
    // background-color: #F6F6F6;
}





@media screen and (max-width: 600px) {
  .container {
    font-size: 15px;
  }

  .container.row.col.h
  {
    font-size: 10px;
  }
}


//font
// @media (min-width: 1200px) {
//   .responsive-font-example {
//     font-size: 20px;
//     font-weight: bold;
//   }
// }

// @media (max-width: 1199.98px) {
//   .responsive-font-example {
//     font-size: 20px;
//   }
// }
// end font



</style>

<style scoped>
  @import "css/carousel.css";
  @import "css/carousel.rtl.css";
  @import "css/project.css";
</style>

<script>
import Carousel from "./components/Carousel.vue";
import Slide from "./components/Slide.vue";
import Produk from "@/components/page/Produk.vue";
import TentangKami from "@/components/page/TentangKami.vue";
import Footers from "@/components/page/Footer.vue";
import Ok from "@/components/page/Ok.vue";
import PerencanaanStrategi from "@/components/page/PerencanaanStrategi.vue";
import Layanan from "@/components/page/Layanan.vue";

import AOS from 'aos' 
import axios from 'axios';

export default {
    data(){
        return{
        // footer:Array,
        carousel:Array,
        layanan:{}

        }
    },
    
  name: "Home",
  components: {
    Carousel, 
    Slide,
    Produk,
    TentangKami,
    Footers,
    PerencanaanStrategi,
    Layanan,
    // Carousel2,
  },


  setup() {
    const carouselSlides = ["qjual_1", "qjual_2", "qjual_3"];

    return { carouselSlides };
  },

  created ( ) {
    AOS.init();
    // this.getFooter();
    // this.getCarousel();
    this.getLayanan();
  },

    methods: {
    async getContacts(){
        let url = 'http://127.0.0.1:8000/api/contacts';
        await axios.get(url).then(response => {
        this.contacts = response.data.contacts;
        console.log(this.contacts);
      }).catch(error => {
        console.log(error);
      });
    },

    async getTentangKami(){
        let url = 'http://127.0.0.1:8000/api/tentang/';
        await axios.get(url).then(response => {
        this.tentangKami = response.data.tentangKami;
        console.log(this.tentangKami);
      }).catch(error => {
        console.log(error);
      });
    },

    async getLayanan(){
        let url = 'http://127.0.0.1:8000/api/layanan/';
        await axios.get(url).then(response => {
        this.layanan = response.data.layanan;
        console.log(this.layanan);
      }).catch(error => {
        console.log(error);
      });
    },


    getProduk(){
        let url = 'http://127.0.0.1:8000/api/produk/';
        axios.get(url).then(response => {
        this.produk = response.data.produk;
        console.log(this.produk);
      }).catch(error => {
        console.log(error);
      });
    },


    async getFooter(){
        let url = 'http://127.0.0.1:8000/api/footer/';
        await axios.get(url).then(response => {
        this.footer = response.data.footer;
        console.log(this.footer);
      }).catch(error => {
        console.log(error);
      });
    },

    async getCarousel(){
        let url = 'http://127.0.0.1:8000/api/carousel/';
        await axios.get(url).then(response => {
        this.footer = response.data.footer;
        console.log(this.footer);
      }).catch(error => {
        console.log(error);
      });
    }
  
  },



  

  // mounted() {
  //   console.log('Contact List Component mounted')
  // },


};


</script>