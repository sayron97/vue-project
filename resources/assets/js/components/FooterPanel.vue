<template>
    <div class="main">
        <div class="row">
            <b-container>
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                <b-row>
                    <b-col cols="9" align-self="center">
                       <span class="white-font footer-text">© 2014  SURFHOUSE. All rights reserved - Designed by theuncreativelab.com</span>

                    </b-col>
                    <b-col cols="3" align-self="center">

                        <div class="main">
                            <b-img src="/img/networks.png" fluid alt="Responsive image" />
                            <b-img src="/img/networks.png" fluid alt="Responsive image" />
                            <b-img src="/img/networks.png" fluid alt="Responsive image" />
                            <b-img src="/img/networks.png" fluid alt="Responsive image" />
                            <b-img src="/img/networks.png" fluid alt="Responsive image" />
                        </div>

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
    a {
        color: #e0d60a;
    }
    .img-fluid {
        max-width: 100%;
        height: 16px;
        width: 16px;
        margin-left: 15px;
    }
    .row{
        background-color: #333333;
        height: 45px;
    }

</style>
<script>
    import axios from 'axios';


    export default {

    }
</script>