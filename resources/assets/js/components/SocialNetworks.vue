<template>
    <div class="main">


            <div class="insta text-center">
                <b-img src="/img/insta.png" fluid alt="Responsive image"/>
                Instagram feed: #surfhouse
            </div>
            <b-container fluid>
                <b-row>
                    <b-col>
                        <b-img width="186" height="186" thumbnail fluid src="/img/livello6.png" alt="Thumbnail" />
                    </b-col>
                    <b-col>
                        <b-img width="186" height="186" thumbnail fluid src="/img/livello5.png" alt="Thumbnail" />
                    </b-col>
                    <b-col>
                        <b-img width="186" height="186" thumbnail fluid src="/img/livello4.png" alt="Thumbnail" />
                    </b-col>
                    <b-col>
                        <b-img width="186" height="186" thumbnail fluid src="/img/livello3.png" alt="Thumbnail" />
                    </b-col>
                    <b-col>
                        <b-img width="186" height="186" thumbnail fluid src="/img/livello2.png" alt="Thumbnail" />
                    </b-col>
                    <b-col>
                        <b-img width="186" height="186" thumbnail fluid src="/img/livello1.png" alt="Thumbnail" />
                    </b-col>
                </b-row>
            </b-container>

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