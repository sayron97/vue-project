<template>
    <div class="slider-panel">

        <div class="title">YOU MIGHT ALSO LIKE</div>


        <slick ref="slick"
               :options="slickOptions"
        >
            <a href="http://placehold.it/2000x1000"><img src="/img/livello1.png" alt=""></a>
            <a href="http://placehold.it/2000x1000"><img src="/img/livello2.png" alt=""></a>
            <a href="http://placehold.it/2000x1000"><img src="/img/livello3.png" alt=""></a>
            <a href="http://placehold.it/2000x1000"><img src="/img/livello4.png" alt=""></a>
            <a href="http://placehold.it/2000x1000"><img src="/img/livello5.png" alt=""></a>
        </slick>

    </div>
</template>

<style lang="scss" scoped>
    .slider-panel{

margin-top: 60px;
        margin-bottom: 20px;

    }
</style>
<script>
    import Slick from 'vue-slick'
    import axios from 'axios';


    export default {
        components: {
            Slick: Slick
        },
        data() {
            return {
                slickOptions: {
                    slidesToShow: 3,
                    dots: false,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    speed: 300,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '<div class="slider-arrow slider-prev"></div>',
                    nextArrow: '<div class="slider-arrow slider-next"></div>',
                }
            };
        },

        // All slick methods can be used too, example here
        methods: {
            next() {
                this.$refs.slick.next();
            },

            prev() {
                this.$refs.slick.prev();
            },

            reInit() {
                // Helpful if you have to deal with v-for to update dynamic lists
                this.$nextTick(() => {
                    this.$refs.slick.reSlick();
                });
            },
        }
    }
</script>