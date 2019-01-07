<template>
    <div class="main">
        <div class="row">
            <b-container class="bv-example-row">
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                <b-row>
                    <b-col cols="2">
                            <p class="title white-font">Category</p>
                            <b-list-group>
                                <b-list-group-item class="list-item white-font">Home</b-list-group-item>
                                <b-list-group-item class="list-item white-font">about us</b-list-group-item>
                                <b-list-group-item class="list-item white-font">eshop</b-list-group-item>
                                <b-list-group-item class="list-item white-font">Features</b-list-group-item>
                                <b-list-group-item class="list-item white-font">new collections</b-list-group-item>
                                <b-list-group-item class="list-item white-font">blog</b-list-group-item>
                                <b-list-group-item class="list-item white-font">contact</b-list-group-item>
                            </b-list-group>

                    </b-col>
                    <b-col cols="2">

                        <p class="title white-font">Our Account</p>
                        <b-list-group>
                            <b-list-group-item class="list-item white-font">Your Account</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Personal Information</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Addresses</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Discount</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Orders history</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Addresses</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Search Terms</b-list-group-item>
                        </b-list-group>

                    </b-col>
                    <b-col cols="2">

                        <p class="title white-font">Our Support</p>
                        <b-list-group>
                            <b-list-group-item class="list-item white-font">Sitemap</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Search Terms</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Advanced Search</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Mobile</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Contact us</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Mobile</b-list-group-item>
                            <b-list-group-item class="list-item white-font">Addresses</b-list-group-item>
                        </b-list-group>

                    </b-col>
                    <b-col cols="3">

                        <p class="title white-font">Newsletter</p>
                        <b-col cols="11">
                        <p class="footer-text white-font">Join thousands of other people sub-scribe to our news </p>
                        </b-col>
                        <b-input-group>
                            <b-form-input placeholder="INSERT EMAIL"></b-form-input>
                            <b-input-group-append>
                                <b-btn variant="info">SUBMIT</b-btn>
                            </b-input-group-append>
                        </b-input-group>

                        <b-container fluid>
                            <b-row>
                                <b-col>
                                    <b-img  src="/img/card1.png" alt="Thumbnail" />
                                </b-col>
                                <b-col>
                                    <b-img  src="/img/card2.png" alt="Thumbnail" />
                                </b-col>
                                <b-col>
                                    <b-img  src="/img/card3.png" alt="Thumbnail" />
                                </b-col>
                                <b-col>
                                    <b-img  src="/img/card4.png" alt="Thumbnail" />
                                </b-col>
                                <b-col>
                                    <b-img  src="/img/card5.png" alt="Thumbnail" />
                                </b-col>
                                <b-col>
                                    <b-img  src="/img/card6.png" alt="Thumbnail" />
                                </b-col>
                            </b-row>
                        </b-container>

                    </b-col>
                    <b-col cols="3">
                        <p class="title white-font">About Us</p>
                        <b-col cols="11">
                            <p class="footer-text white-font">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller eine Hand voll Wörter nahm und diese.</p>
                            <div class="white-font">
                                <p>Phone:     1-999-345-2325</p>
                                <p>e-mail:     <span><a href="#">info@gmail.com</a></span></p>
                            </div>
                        </b-col>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>
</template>
<style lang="scss" scoped>
    .list-item{
        border: none;
        padding:0;
    }
    .list-group-item{
        background-color: #373737;
    }
    .white-font{
        color: #ffffff !important;
    }
    .title{
        font-size: 18px;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        line-height: 1.2;
        text-align: left;
    }
    .footer-text{
        margin-top: -17px;
        margin-bottom: 20px;
        line-height: 0.9em;
        font-size: 14px;
    }
    .btn-info{
        background-color: #000000;
        color: #ffffff;
        border: none;
        border-radius: 0;
        padding-left: 14px;
        padding-right: 14px;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 12px;
    }
    .form-control{
        background-color: #fff51f;
        border:none;
        border-radius: 0;
        padding-top: 1px;
        padding-bottom: 1px;
        padding-left: 21px;
        font-size: 12px;
    }
    .col-11{
        padding-left: 0;
    }
    .col{
        padding-right: 0;
        padding-left: 0;
    }
    .row{
        margin-top: 45px;
    }
    a {
        color: #e0d60a;
    }

</style>
<script>
    import axios from 'axios';


    export default {

    }
</script>