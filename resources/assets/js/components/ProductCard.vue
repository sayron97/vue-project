<template>
    <div class="main">

        <div class="bread">
            <b-container>
                <b-row>
                    <b-col cols="9" align-self="center">

                        <span>Home ≫ Apparel ≫ Women ≫ <mark>Peeky Cropped</mark></span>

                    </b-col>
                    <b-col cols="3" align-self="center">

                        <span>≪ Back to previous page</span>

                    </b-col>
                </b-row>
            </b-container>
        </div>

        <b-container>
            <b-row>
                <b-col cols="4" align-self="center">

                    <b-img src="/img/bg.png" fluid-grow alt="Fluid image"/>

                    <slick ref="slick"
                           :options="slickOptions">
                        <a href="http://placehold.it/2000x1000"><img src="/img/small-bg.png" alt=""></a>
                        <a href="http://placehold.it/2000x1000"><img src="/img/small-bg.png" alt=""></a>
                        <a href="http://placehold.it/2000x1000"><img src="/img/small-bg.png" alt=""></a>
                        <a href="http://placehold.it/2000x1000"><img src="/img/small-bg.png" alt=""></a>
                        <a href="http://placehold.it/2000x1000"><img src="/img/small-bg.png" alt=""></a>
                    </slick>
                </b-col>
                <b-col cols="5" class="container-padding">
                    <div class="title-text">PEEKY CROPPED</div>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="review">1 Review(s) | Add Your Review</span>
                    <b-container class="bv-example-row bv-example-row-flex-cols">
                        <b-row align-v="center" class="price-row">
                            <b-col align-v="center" class="price">€. 578.50</b-col>
                            <b-col align-self="end" class="product-code">
                                <span class="grey">Product code:</span> 257
                                <p><span class="grey">Availability:</span> In stock</p>
                            </b-col>
                        </b-row>
                    </b-container>
                </b-col>
            </b-row>
        </b-container>

    </div>
</template>
<style lang="scss" scoped>
    .title-text {
        font-size: 24px;
        font-family: 'Poppins', sans-serif;
        color: rgb(53, 53, 53);
        font-weight: bold;
        text-transform: uppercase;
    }

    .price {
        font-size: 21px;
        color: rgb(17, 17, 17);
        font-style: italic;
        line-height: 1.2;
        margin-top: -15px;
        font-family: 'Poppins', sans-serif;
        text-align: left;
        -moz-transform: matrix(1.05645903466476, 0, 0, 1.05037294868166, 0, 0);
        -webkit-transform: matrix(1.05645903466476, 0, 0, 1.05037294868166, 0, 0);
        -ms-transform: matrix(1.05645903466476, 0, 0, 1.05037294868166, 0, 0);
    }

    .product-code {
        margin-right: -50px;
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        line-height: 2;
    }

    .grey {
        color: rgb(102, 102, 105);
    }

    .price-row {
        margin-top: 20px;
    }

    .review {
        margin-left: 6px;
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        color: rgb(53, 53, 53);
        line-height: 1.667;
    }

    .checked {
        color: #afada7;
    }

    .fa-star {
        margin-right: -4px;
        font-size: 13px;
    }

    .bread {
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        color: rgb(152, 152, 152);
        line-height: 1.2;
        margin-top: 37px;
        margin-left: 12px;
        margin-bottom: 55px;
    }

    .col-4 {
        -ms-flex: 0 0 44.444444%;
        flex: 0 0 44.444444%;
        max-width: 44.444444%;
    }

    .col-5 {
        -ms-flex: 0 0 55.555555%;
        flex: 0 0 55.555555%;
        max-width: 53.999999%;
    }

    .col-9 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
    }

    .slick-prev {
        left: 100px;
        background: red;
    }

    .slick-next {
        right: 100px;
        background: red;
    }

    button {
        background-color: red;
        color: red;
    }

    mark {
        padding: 5px;
        background-color: #faef03;
    }

    .container-padding {
        margin-left: 13px;
    }

</style>
<script>
    import Slick from 'vue-slick'

    import axios from 'axios';


    export default {
        components: {
            Slick: Slick,
        },
        data() {
            return {
                slickOptions: {
                    slidesToShow: 3,
                    arrows: true,
                    draggable: true,
                    swipe: true
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