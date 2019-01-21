<template>
    <div class="main">

        <div class="networks">
            <b-card-group>
                <b-card img-src="/img/bg-facebook.png"
                        img-alt="Img"
                        img-top>
                </b-card>
                <b-card img-src="/img/bg-tw.png"
                        img-alt="Img"
                        img-top>
                </b-card>
                <b-card img-src="/img/bg-pint.png"
                        img-alt="Img"
                        img-top>
                </b-card>
            </b-card-group>
        </div>

    </div>
</template>
<style lang="scss" scoped>

    .insta {
        font-family: 'Roboto', sans-serif;
        margin-top: 50px;
        margin-bottom: 26px;
    }
    .col{
        padding-left: 0;
        padding-right: 0;
    }
    .img-thumbnail{
        padding: 7px;
        border:none;
    }
    .card{
        border: none;
        padding: 0;
        flex-direction: row;
    }
    .card-img-top{
        width: auto;
        height: auto;
    }
    .networks{
        margin-top: 60px;
    }


</style>
<script>
    import axios from 'axios';


    export default {}
</script>