<template>
<Navbar />
<Carousel />
<div class="background">
  
  <SpesialisasiKami />
  <br>
  <br><br>
  <Layanan  />
  <PerencanaanStrategi />
</div>
<br>
<!-- End Background -->
<Footers />
<br>
<br>
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
// import Carousel from "./components/Carousel.vue";
// import Slide from "./components/Slide.vue";
import Carousel from "./components/page/Carousel.vue";
import Produk from "@/components/page/Proyek.vue";
import SpesialisasiKami from "@/components/page/SpesialisasiKami.vue";
import Navbar from "@/components/page/Navbar.vue";
import Footers from "@/components/page/Footer.vue";
import PerencanaanStrategi from "@/components/page/PerencanaanStrategi.vue";
import Layanan from "@/components/page/Layanan.vue";
import AOS from 'aos' 
import axios from 'axios';

export default {
  name: "Home",
  components: {
    Navbar,
    Carousel, 
    // Slide,
    Produk,
    SpesialisasiKami,
    Footers,
    PerencanaanStrategi,
    Layanan,
  },
};


</script>