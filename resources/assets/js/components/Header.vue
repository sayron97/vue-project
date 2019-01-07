<template>
    <div class="main">
        <div class="row">
            <b-container>
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                <b-row>
                    <b-col cols="9" align-self="center">
                        <b-img src="/img/logo.png" fluid alt="Responsive image" />

                    </b-col>
                    <b-col cols="3" align-self="center">

                        <div class="main">
                            <b-img src="/img/facebook-white-icon.png" fluid alt="Responsive image" />
                            <b-img src="/img/twitter-white-icon.png" fluid alt="Responsive image" />
                            <b-img src="/img/youtube-white-icon.png" fluid alt="Responsive image" />
                            <b-img src="/img/pinterest-white-icon.png" fluid alt="Responsive image" />
                            <b-img src="/img/insta-white-icon.png" fluid alt="Responsive image" />
                        </div>

                    </b-col>
                </b-row>
            </b-container>
        </div>
        <div class="row">
            <b-container>
            <b-row>
                <b-col cols="3" align-self="center">
                    <b-img src="/img/welcome.png" fluid alt="Responsive image" class="welcome-img"/>

                </b-col>
                <b-col cols="9" align-self="center">

                    <div class="main">
                        <b-carousel class="carousel-img"
                                    id="carousel1"
                                    style="text-shadow: 1px 1px 2px #333;"
                                    controls
                                    indicators
                                    background="#ababab"
                                    :interval="4000"
                                    img-width="1024"
                                    img-height="480"
                                    v-model="slide"
                                    @sliding-start="onSlideStart"
                                    @sliding-end="onSlideEnd"
                        >

                            <!-- Text slides with image -->
                            <b-carousel-slide caption="First slide"
                                              text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                    eros felis, tincidunt a tincidunt eget, convallis vel est. Ut pellentesque
                                    ut lacus vel interdum.."
                                              img-src="https://picsum.photos/1024/480/?image=52"
                            ></b-carousel-slide>

                            <!-- Slides with custom text -->
                            <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=54">
                                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                    eros felis, tincidunt a tincidunt eget, convallis vel est. Ut pellentesque
                                    ut lacus vel interdum.</h1>
                            </b-carousel-slide>

                            <!-- Slides with image only -->
                            <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=58"
                            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                    eros felis, tincidunt a tincidunt eget, convallis vel est. Ut pellentesque
                                    ut lacus vel interdum.">
                            </b-carousel-slide>

                        </b-carousel>
                    </div>

                </b-col>
            </b-row>
            </b-container>
        </div>
    </div>
</template>
<style lang="scss" scoped>

    .row{
        background-color: #abeafa;
        padding-top: 7px;
    }
    .welcome-img{
        margin-left: -30px;
    }
    .carousel-img{
        margin-right: -30px;
        margin-bottom: 40px
    }

</style>
<script>
    import axios from 'axios';


    export default {
        data () {
            return {
                slide: 0,
                sliding: null
            }
        },
        methods: {
            onSlideStart (slide) {
                this.sliding = true
            },
            onSlideEnd (slide) {
                this.sliding = false
            }
        }
    }
</script>