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
      <Slide v-for="(slide, index) in carouselSlides" :key="index">
        <div v-show="currentSlide === index + 1" class="slide-info">
          <img :src="require(`./assets/${slide}.jpg`)" alt="" />
        </div>
      </Slide>
    </Carousel>
  </div>



<div class="background">
  
  <div class="container" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <h4>
      <span id="spesialisasi">Spesialisasi </span>
      <span style="color:#FF2A2A;">Kami</span>       
    </h4>
    <br>
    <div class="row mb-3">
      <div class="col-md-8 themed-grid-col">
          <div class="d-flex text-align-left" style="text-align:justify;">
            Jaring adalah perusahaan IT yang bergerak di bidang jasa penyedia sistem aplikasi, Pengembangan software house, E-Ticketing, Pencatatan Transaksi Digital, Penyedia Mesin TAP EDC/Bus Validator yang sudah bekerja sama dengan Bank-Bank Besar. Dengan mengedepankan integritas, kami akan selalu memberikan jasa terbaik di setiap pekerjaan yang kami lakukan. Jaring selalu bersemangat dalam menciptakan berdasarkan kebutuhan klien dengan komitmen yang tinggi dan kami juga bisa menjadi solusi bagi perusahaan penerbit uang/uang digital yang ingin mengembangkan dan menambahkan transaksi dari seluruh jaringan retail yang bekerjasama dengan kami.      
          </div>
        </div>
      <div class="col-md-4 themed-grid-col">
        <img class="rounded mx-auto d-block" src="./assets/meeting.png"  width="100%" height="100%" >
      </div>
    </div>
  </div>
<br>









  <div class="container">
    <div class="row mb-4">
      <div class="col-md-4 themed-grid-col">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-shrink-1 bd-highlight rounded mx-auto d-block">
              <img src="./assets/sosmed-payment.png" alt="..." width="110" height="75"  data-aos="flip-right">
            </div>
            <div class="p-2 w-100 bd-highlight">
              <h5 class="text-danger">
                Pembayaran Digital
              </h5>
              <p >
                Transaksi menggunakan berbagai macam metode pembayaran
              </p>
            </div>
          </div>
      </div>
      <div class="col-md-4 themed-grid-col">
        <div class="d-flex bd-highlight">
          <div class="p-2 flex-shrink-1 bd-highlight">
            <img src="./assets/ipaymu_service_edcpos.png" alt="..." width="110" height="75"  data-aos="flip-right">
          </div>
          <div class="p-2 w-100 bd-highlight">
            <h5 class="text-danger">
              EDC-POS
            </h5>
            <p>
              Transaksi lebih mudah dengan menggunakan terminal EDC POS
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 themed-grid-col">
        <div class="d-flex bd-highlight">
          <div class="p-2 flex-shrink-1 bd-highlight rounded mx-auto d-block">
            <img src="./assets/ipaymu_service_store.png" alt="..." width="110" height="75" data-aos="flip-right" >
          </div>
          <div class="p-2 w-100 bd-highlight">
            <h5 class="text-danger">
              Convenience Stores
            </h5>
            <p>
              Sediakan pembayaran melalui Indomaret dan Alfamart pada bisnis Anda  
            </p>
          </div>
        </div>
      </div>
    </div>

    <br>
    <div class="row mb-4">
      <div class="col-md-4 themed-grid-col">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-shrink-1 bd-highlight rounded mx-auto d-block">
              <img src="./assets/qrish.png" alt="..." width="110" height="75" data-aos="flip-right">
            </div>
            <div class="p-2 w-100 bd-highlight">
              <h5 class="text-danger">
                QRIS
              </h5>
              <p>
                1 QRCode Untuk Semua e-wallet
              </p>
            </div>
          </div>
      </div>
      <div class="col-md-4 themed-grid-col">
        <div class="d-flex bd-highlight">
          <div class="p-2 flex-shrink-1 bd-highlight">
            <img src="./assets/ipaymu_service_va.png" alt="..." width="110" height="75"  data-aos="flip-right">
          </div>
          <div class="p-2 w-100 bd-highlight">
            <h5 class="text-danger">
              Instant VA
            </h5>
            <p>
              Pembayaran VA dan transfer bank lebih mudah untuk 140 Bank
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 themed-grid-col">
        <div class="d-flex bd-highlight">
          <div class="p-2 flex-shrink-1 bd-highlight rounded mx-auto d-block">
            <img src="./assets/ipaymu_service_credit_card.png" alt="..." width="110" height="75" data-aos="flip-right">
          </div>
          <div class="p-2 w-100 bd-highlight">
            <h5 class="text-danger">
              Kartu Kredit
            </h5>
            <p>
              Opsi pembayaran yang komprehensif kepada customer Anda. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>















  <div class="py-4 text-center container">
    <!-- <div class="row py-lg-5"> -->
      <div class="container" data-aos="fade-up"
     data-aos-duration="800">
        <h4  class="text-center">
          <span id="Perencanaan">Perencanaan </span>
          <span style="color:#FF2A2A;">Strategi</span>       
        </h4>
        <p class="lead Perusahaan-IT">
          Perusahaan IT yang bergerak di bidang jasa Penyedia sistem aplikasi & Pengembangan software house yang sudah bekerja sama dengan Bank-Bank Besar.  
        </p>
      </div>
    <!-- </div> -->
  </div>
</div>
<br>










<!-- End Background -->





  <div class="container">
    <div class="row" data-aos="fade-down"
     data-aos-duration="800">
      <div class="col">
        <!-- <div class="card"> -->
          <img class="rounded mx-auto d-block" src="./assets/Icon.png" alt="">
          <div class="card-body text-center">
            <p class="card-text">
              Technology Constantly improve, to provide the best solution
            </p>
          </div>
        <!-- </div> -->
      </div>
      <div class="col">
        <!-- <div class="card"> -->
          <img class="rounded mx-auto d-block" src="./assets/Icon.png"  width="70" height="70 " >
          <div class="card-body">
            <p class="card-text text-center">
                We don’t sell you a product. We sell you a solution
            </p>
          </div>
        <!-- </div> -->
      </div>
      <div class="col">
        <!-- <div class="card"> -->
          <img class="rounded mx-auto d-block" src="./assets/Icon.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Speed and quality is our motto</p>
          </div>
        <!-- </div> -->
      </div>
    </div>
  </div>

<br>
<br>














  <section class="gallery min-vh-100" >
    <!-- <div class="container" data-aos="zoom-out">   -->
      <h4 style="margin-left: 50px; margin-bottom: 20px;">
        <span id="proyek"  data-aos="zoom-out">Proyek </span>
        <span style="color:#FF2A2A;"  data-aos="zoom-out">Kami</span>   
      </h4>
    <!-- </div> -->
    <div class="container-lg">
      <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
          <div class="col">
            <img src="./assets/wildlife_animal.png" class="gallery-item" alt="gallery"  data-aos="zoom-out">
            <h4 class="text-danger responsive-font-example">
              WILDLIFE ANIMAL
            </h4>
            <p>
              Website
            </p>
          </div>
          <div class="col">
            <img src="./assets/fi_mobile.png" class="gallery-item" alt="gallery"  data-aos="zoom-out">
            <h4 class="text-danger responsive-font-example">
              FI MOBILE
            </h4>
            <p>
              Mobile
            </p>
          </div>
          <div class="col">
            <img src="./assets/always_taylor.png" class="gallery-item" alt="gallery"  data-aos="zoom-out">
            <h4 class="text-danger responsive-font-example">
              ALWAYS TAILOR
            </h4>
            <p style="font-size: 100">
              Website
            </p>
          </div>
      </div>
    </div>
  </section>


























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






















<div class="container">
  <table class="table table-hover">
    <thead>
        <tr>
          <th class="col" > # </th>
          <th class="col" > Foto </th>
          <th class="col" > deskripsi_cp </th>
          <th class="col" > judul_cp </th>
          <th class="col" > judul_cp </th>
          <th class="col" > judul_cp </th>

        </tr>
    </thead>
    <tbody v-for="contact in contacts" :key="contact.id">
      <tr class="table-secondary">
        
        <th scope="row"> {{contact.id}} </th>        
        <!-- <th>
          <img :src="getFotoContact()" width="200">
        </th> -->
        <th>
          <img :src="contact.foto" width="200">
        </th>
        <!-- http://127.0.0.1:8000/storage/ -->
        
        
        <th scope="row"> {{contact.foto}} </th>
        <th scope="row"> {{contact.nama_perumahan}} </th>
        <th scope="row"> {{contact.alamat}} </th>
        <th scope="row"> {{contact.uraian}} </th>
        
      </tr>
    </tbody>
  </table>
</div>







<br>
<br>
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
import AOS from 'aos'
import axios from 'axios';

export default {
  name: "Home",
  components: { Carousel, Slide },
  setup() {
    const carouselSlides = ["qjual_1", "qjual_2", "qjual_3"];

    return { carouselSlides };
  },

  created ( ) {
  AOS.init();
  this.getContacts();
  },

  name: 'ContactList',
  data(){
    return{
      contacts: []
    }
  },

  methods: {
     getContacts(){
        // let url = 'http://127.0.0.1:8000/api/contacts';
                let url = 'http://192.168.60.32:8000/api/perumahan';
        axios.get(url).then(response => {
        this.contacts = response.data;
        console.log(this.contacts);
      }).catch(error => {
        console.log(error);
      });
    },

     getFotoContact(){
      return 'http://127.0.0.1:8000/api/perumahan/';
    }
  },

  mounted() {
    console.log('Contact List Component mounted')
  },


};


  


</script>
