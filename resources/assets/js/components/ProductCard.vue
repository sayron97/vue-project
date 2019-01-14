<template>
    <div class="main-product-card">

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
                <b-col cols="4" align-self="top">

                    <b-img src="/img/bg.png" fluid-grow alt="Fluid image"/>

                    <slick ref="slick"
                           :options="slickOptions"
                    >
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

                    <b-img center src="/img/hr.png" class="grey-line-width" fluid-grow alt="Fluid image"/>

                    <b-container class="bv-example-row bv-example-row-flex-cols">
                        <b-row align-v="center" class="price-row">
                            <span class="block-title">QUICK OVERVIEW:</span>
                            <p class="block-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </b-row>
                    </b-container>

                    <b-img center src="/img/hr.png" class="grey-line-width" fluid-grow alt="Fluid image"/>

                    <b-container class="bv-example-row bv-example-row-flex-cols">
                        <b-row align-v="center" class="price-row">
                            <span class="block-title">SIZE:</span>
                        </b-row>
                        <b-row align-v="center" class="price-row">
                            <b-button outline="primary" class="size-buttons">25</b-button>
                            <b-button outline="primary" class="size-buttons">26</b-button>
                            <b-button outline="primary" class="size-buttons">27</b-button>
                            <b-button outline="primary" class="size-buttons">28</b-button>
                            <b-button outline="primary" class="size-buttons">29</b-button>
                            <b-button outline="primary" class="size-buttons">30</b-button>
                            <b-button outline="primary" class="size-buttons">31</b-button>
                            <b-button outline="primary" class="size-buttons">32</b-button>
                            <b-button outline="primary" class="size-buttons">33</b-button>
                        </b-row>
                    </b-container>

                    <b-img center src="/img/hr.png" class="grey-line-width" fluid-grow alt="Fluid image"/>

                    <b-container class="bv-example-row bv-example-row-flex-cols">
                        <b-row align-v="center" class="price-row">
                            <span class="block-title">LENGTH:</span>
                        </b-row>
                        <b-row align-v="center" class="price-row">
                            <b-button outline="primary" class="size-buttons">32</b-button>
                            <b-button outline="primary" class="size-buttons">34</b-button>
                        </b-row>
                    </b-container>

                    <b-img center src="/img/hr.png" class="grey-line-width" fluid-grow alt="Fluid image"/>

                    <b-container class="bv-example-row bv-example-row-flex-cols">
                        <b-row align-v="center" class="price-row">
                            <b-col class="quantity-row">
                                <span class="block-title">Quantity:</span>
                                <div class="row">
                                <b-form-input value="1" min="1" type="number" class="quantity-field" disabled></b-form-input>
                                <div class="pluse">+</div>
                                </div>
                            </b-col>

                            <b-col >
                                <b-button variant="success" class="add-to-cart">ADD TO CART</b-button>
                            </b-col>

                            <b-col align-self="end" class="option-block">
                                <div class="row">
                                    <div class="options">+ Add to Wishlist</div>
                                </div>
                                <div class="row">
                                    <div class="options">+ Add to Compare</div>
                                </div>
                                <div class="row">
                                    <div class="options">+ Add to a Friend</div>
                                </div>
                            </b-col>
                        </b-row>
                    </b-container>

                </b-col>
            </b-row>
        </b-container>
        <b-card no-body>
            <b-tabs card>
                <b-tab title="PRODUCT DESCRIPTION" active>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words<br>
                    which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the<br>
                    middle of text.<br><br>

                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words<br>
                    which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the<br>
                    middle of text.<br>
                    - 6.1 oz. 100% preshrunk heavyweight cotton<br>
                    - Shoulder-to-shoulder taping<br>
                    - Double-needle sleeves and bottom hem<br><br>

                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                </b-tab>
                <b-tab title="ADITTIONAL INFORMATION">
                    Tab Contents 3
                </b-tab>
                <b-tab title="REVIEWS">
                    Tab Contents 4
                </b-tab>
                <b-tab title="PRODUCT TAGS">
                    Tab Contents 5
                </b-tab>
            </b-tabs>
        </b-card>

        <slider-component></slider-component>

        <slider-component></slider-component>

    </div>
</template>

<style lang="scss">
    .main-product-card{
        input[type='number'] {
            -moz-appearance:textfield;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
        p{
            margin-bottom: 0;
        }
        .tabs{
            display: block;
            white-space: normal;
            font-size: 12px;
        }
        .card-header{
            background-color: #f8f8f8;
            box-shadow: none;
        }
        .card{
            border: none;
            box-shadow: none;
            background-color: #f8f8f8;
        }
        .nav-item{
            background-color: #f8f8f8;
            color: #333333;
            font-size: 12px;
            font-family: 'Poppins', sans-serif;
        }
        .nav-link.active{
            background-color: #26d2fc;
            color: #333333;
            border:none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .quantity-row{
            margin-top: -7px;
        }
        .option-block{
            margin-left: 120px;
        }
        .options{
                font-size: 11px;
                font-family: 'Poppins', sans-serif;
                color: rgb(53, 53, 53);
                line-height: 1.818;
            text-align: right;
        }
        .add-to-cart{
            background-color: #fb4d01;
            color: #ffffff;
            border-radius: 0;
            border-color: #fb4d01;
            padding: 13px 15px 13px 15px;
            font-size: 16px;
            margin-right: -80px;
        }
        .pluse{
            font-size: 20px;
            color: #333333;
            margin-left: 5px;
            margin-top: 2px;
        }
        .quantity-field{
            border-radius: 0;
            background-color: white;
            border-color: #e3e3e3;
            padding: 6px 4px 6px 4px;
            width: 35px;
            margin-left: 30px;
        }
        .size-buttons{
            background-color: white;
            border-color: white;
            color: #333333;
            padding: 6px 4px 6px 4px;
            margin-right: 13px;
            border-radius: 0;

            &:hover {
                color: #ff6262;
            }
        }
        .block-title{
                font-size: 14px;
                font-family: 'Poppins', sans-serif;
                color: rgb(53, 53, 53);
                text-transform: uppercase;
                line-height: 1.667;
        }
        .block-text{
                font-size: 12px;
                font-family: 'Poppins', sans-serif;
                color: rgb(112, 112, 112);
                line-height: 1.333;
        }
        .grey-line-width{
            width: 370px !important;
            margin-top: 15px;
        }
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
            margin-top: -5px;
            font-family: 'Poppins', sans-serif;
            text-align: left;
            -moz-transform: matrix(1.05645903466476, 0, 0, 1.05037294868166, 0, 0);
            -webkit-transform: matrix(1.05645903466476, 0, 0, 1.05037294868166, 0, 0);
            -ms-transform: matrix(1.05645903466476, 0, 0, 1.05037294868166, 0, 0);
        }

        .product-code {
            margin-right: -150px;
            font-size: 12px;
            font-family: 'Poppins', sans-serif;
            line-height: 2;
        }

        .grey {
            color: rgb(102, 102, 105);
        }

        .price-row {
            margin-top: 15px;
            .col{
                padding: 0;
            }
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
        }

        .slick-next {
            right: 100px;
            background: red;
        }

        mark {
            padding: 5px;
            background-color: #faef03;
        }

        .container-padding {
            margin-left: 13px;
        }
        .slider-arrow{
            width: 12px;
            height: 40px;
        }
        .slider-prev{
            background: url('/img/arrow-l.png') no-repeat;
            position: absolute;
            z-index: 1000;
            top: 30%;
            left: 0;
        }
        .slider-next{
            background: url('/img/arrow-r.png') no-repeat;
            position: absolute;
            z-index: 1000;
            top: 30%;
            right: 0;
        }
        .slick-list{
            margin-left: 50px;
            margin-top: 30px;
            margin-right: 30px;
        }
    }


</style>
<script>
    import Slick from 'vue-slick'
    import SliderComponent from '../components/SliderComponent.vue'
    import axios from 'axios';


    export default {
        components: {
            Slick: Slick,
            SliderComponent: SliderComponent
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