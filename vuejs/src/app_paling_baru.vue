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
      
      <!-- <Slide v-for="(slide, index) in carouselSlides" :key="index"> -->
              <Slide v-for="(slide, index) in carouselSlides" :key="index">
        <div v-show="currentSlide === index + 1" class="slide-info">
          <img :src="require(`./assets/${slide}.jpg`)" alt="" />
        </div>
      </Slide>
    </Carousel>
  </div>















































<div class="background">
  
  <TentangKami />
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
  @import "css/project.css";
</style>

<script>
import Carousel from "./components/Carousel.vue";
import Slide from "./components/Slide.vue";
import Produk from "@/components/page/Produk.vue";
import TentangKami from "@/components/page/TentangKami.vue";
import Footers from "@/components/page/Footer.vue";
import PerencanaanStrategi from "@/components/page/PerencanaanStrategi.vue";
import Layanan from "@/components/page/Layanan.vue";
import AOS from 'aos' 
import axios from 'axios';

export default {
    data(){
        return{
        // footer:Array,
        carousel:Array
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
  },


  setup() {
    const carouselSlides = ["qjual_1", "qjual_2", "qjual_3"];

    return { carouselSlides };
  },

  created ( ) {
    AOS.init();
    // this.getFooter();
    // this.getCarousel();
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