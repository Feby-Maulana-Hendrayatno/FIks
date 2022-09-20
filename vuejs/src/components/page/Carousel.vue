<template>
    <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel"  >
        <div class="carousel-indicators">
        <!-- <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li> -->
        <!-- <li data-target="#my-carousel" data-slide-to="{{ $slide['id'] }}" class="active"></li> -->
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height:620px" margin="10px">
        <div v-for="(cr, index) in carousel" :key="index" :class="index === 0 ? 'carousel-item active' : 'carousel-item' ">
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
            <img :src="cr.foto" style="height:620px;" >
            <div class="container">
            <div class="carousel-caption text-end" >
                <img :src="cr.icon" style="height:80px; " class="text-start">
                <div class="container">
                <div class="row">
                    <div class="col-8"> &nbsp</div>
                    <div class="col-4"><p>{{cr.deskripsi}}</p></div>
                </div>
                </div>
                <p><a :href="cr.link" class="btn btn-lg btn-primary" :style="{'background-color': cr.warna }"> {{cr.nm_link}}</a></p>
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
</template>



<script>
    import AOS from 'aos' 
    import axios from 'axios';
    
    export default {
    created ( ) {
        AOS.init();
        this.getCarousel();
    },

    name: 'Carousel List',
    data(){
        return{
        carousel:Array,
        }
    },
    
        methods: {
        async getCarousel(){
            let url = 'http://127.0.0.1:8000/api/carousel/';
            await axios.get(url).then(response => {
            this.carousel = response.data.carousel;
            console.log(this.carousel);
        }).catch(error => {
            console.log(error);
        });
        }
    },
    
    
    };
</script>