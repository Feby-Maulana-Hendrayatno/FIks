export default (await import('vue')).default.extend({
name: "Home",
components: { Carousel, Slide },
setup() {
const carouselSlides = ["qjual_1", "qjual_2", "qjual_3"];

return { carouselSlides };
},
});
