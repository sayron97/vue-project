<template>
    <div class="main">
        <div class="white-block">
            <p class="text-widgets">Articles</p>
            <b-list-group>
                <b-list-group-item class="list-item">Cras justo odio</b-list-group-item>
                <b-list-group-item class="list-item">Dapibus ac facilisis in</b-list-group-item>
            </b-list-group>
            <p class="tags-text">view all -></p>
        </div>
    </div>
</template>
<style lang="scss" scoped>

    .white-block{
        background-color: #ffffff;
        width: 270px;
        height: 280px;
        margin-top: 30px;
        padding-top: 30px;
        padding-left: 30px;
    }
    .ready-img{
        position: relative;
        left: 144px;
        top: 130px;
    }
    .text-widgets{
        font-size: 24px;
        font-family: 'Raleway', sans-serif;
        font-style: italic;
        line-height: 1.2;
        text-align: left;
        z-index: 279;
    }
    .btn{
        border-radius: 0px;
        background-color: #e9e9e9;
        color: #333333;
        font-family: 'Poppins', sans-serif;
        line-height: 1.2;
        font-size: 12px;
        margin: 4px;
    }
    .btn:hover{
        background-color: #faef03;
        font-size: 14px;
    }
    .btn-secondary{
        border-color: #e9e9e9;
    }
    .tags-text{
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        margin-left: 3px;
        margin-top: 15px;
    }


    .list-item{
        border: none;
        padding:10px 0 10px 0px;
    }

</style>
<script>
    import axios from 'axios';


    export default {
        data() {
            return {
                fontSize : 8
            }
        },
        methods: {

        }
    }
</script>