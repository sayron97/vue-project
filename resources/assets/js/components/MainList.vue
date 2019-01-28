<template>
    <div class="main">
        <div class="row">
           <div class="product-header">
               <div class="product-header-name row">
                  NEW PRODUCTS
                   <div class="slider-arrows">
                       <b-img @click="prevPage" src="img/arrow-right.png" width="6" height="12" blank-color="#777" alt="img" class="m-1" />
                       <b-img @click="nextPage" src="img/arrow-left.png" width="7" height="13" blank-color="#777" alt="img" class="m-1" />
                   </div>
               </div>
               <div class="product-header-slider">
                   <b-card-group columns @click="$router.push({name: 'product', params: {id: 1}})">
                       <div v-for="product in products">
                       <router-link to="/product/1">
                           <b-card style="width: 270px;"
                               img-src="img/2.jpeg"
                               img-fluid
                               img-alt="image"
                               img-top

                                   @click='unshowComponent'>
                           <b-card-img v-if="product.is_hot !== 0" src="img/CornerHot.png"
                                       alt="Image"
                                       bottom></b-card-img>

                               <b-card-img v-else-if="product.is_new !== 0" src="img/Corner.png"
                                           alt="Image"
                                           bottom></b-card-img>
                               <div v-else class="empty-img"></div>
                           <p class="card-text">
                               <b-row align-h="between">
                                   <b-col cols="8" class="card-text-name">{{product.name}}</b-col>
                                   <b-col cols="4" class="card-text-price">€.{{product.cost}}</b-col>
                               </b-row>
                               <b-row align-h="between">
                                   <b-col cols="8"></b-col>
                                   <b-col cols="4" class="card-text-price-old"><s v-if="product.new_cost !== ''">€.{{product.new_cost}}</s></b-col>
                               </b-row>
                           </p>
                       </b-card>
                       </router-link>

                       </div>
                   </b-card-group>
               </div>
           </div>
            <div class="product-header">
                <div class="product-header-name row">
                    TOP PRODUCTS
                    <div class="slider-arrows">
                        <b-img src="img/arrow-right.png" width="6" height="12" blank-color="#777" alt="img" class="m-1" />
                        <b-img src="img/arrow-left.png" width="7" height="13" blank-color="#777" alt="img" class="m-1" />
                    </div>
                </div>
                <div class="product-header-slider">
                    <b-card-group columns>
                        <b-card style="width: 270px;"
                                img-src="http://interier-foto.ru/wp-content/uploads/2014/11/juzhno-chujskij-hrebet4012.jpg"
                                img-fluid
                                img-alt="image"
                                img-top
                                v-for="i in imagesThree">
                            <b-card-img src="img/Corner.png"
                                        alt="Image"
                                        bottom></b-card-img>
                            <p class="card-text">
                                <b-row align-h="between">
                                    <b-col cols="8" class="card-text-name">Single Thruster 2014</b-col>
                                    <b-col cols="4" class="card-text-price">€.865.00</b-col>
                                </b-row>
                                <b-row align-h="between">
                                    <b-col cols="8"></b-col>
                                    <b-col cols="4" class="card-text-price-old"><s>€.865.00</s></b-col>
                                </b-row>
                            </p>
                        </b-card>


                    </b-card-group>
                </div>
            </div>
            <div class="product-header">
                <div class="product-header-name row">
                    SALE PRODUCTS
                    <div class="slider-arrows">
                        <b-img src="img/arrow-right.png" width="6" height="12" blank-color="#777" alt="img" class="m-1" />
                        <b-img src="img/arrow-left.png" width="7" height="13" blank-color="#777" alt="img" class="m-1" />
                    </div>
                </div>
                <div class="product-header-slider">
                    <b-card-group columns>
                        <b-card style="width: 270px;"
                                img-src="http://interier-foto.ru/wp-content/uploads/2014/11/juzhno-chujskij-hrebet4012.jpg"
                                img-fluid
                                img-alt="image"
                                img-top
                                v-for="i in imagesThree">
                            <b-card-img src="/img/Corner.png"
                                        alt="Image"
                                        bottom></b-card-img>
                            <p class="card-text">
                                <b-row align-h="between">
                                    <b-col cols="8" class="card-text-name">Single Thruster 2014</b-col>
                                    <b-col cols="4" class="card-text-price">€.865.00</b-col>
                                </b-row>
                                <b-row align-h="between">
                                    <b-col cols="8"></b-col>
                                    <b-col cols="4" class="card-text-price-old"><s>€.865.00</s></b-col>
                                </b-row>
                            </p>
                        </b-card>


                    </b-card-group>
                </div>
            </div>
        </div>
    </div>
</template>
<style>

    .card{
        box-shadow: none;
        padding: 10px;
    }

    .empty-img{
        margin-top: -20px;
        position: relative;
        bottom: 206px;
        left: 203px;
        width: 45px;
        height:45px
    }

    .card-text {
        font-weight: bold;
        font-size: 14px;
        font-family: 'Roboto', sans-serif;
        color: rgb(51, 51, 51);
        font-style: italic;
        line-height: 1.286;
        -moz-transform: matrix( 0.99931942654312,0,0,0.99931942654312,0,0);
        -webkit-transform: matrix( 0.99931942654312,0,0,0.99931942654312,0,0);
        -ms-transform: matrix( 0.99931942654312,0,0,0.99931942654312,0,0);
    }

    .card-text-price {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        color: rgb(51, 51, 51);
        padding-left: 0px;
        padding-right: 0px;
    }
    .card-text-price-old{
        color: #e24602;
    }
    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 0px;
        margin-top: -24px;
        /* padding-bottom: 5px;  */
        height: 100px;
    }
    .card-img-top{
        width: 250px;
        height:230px
    }
    .card-img-bottom{
        position: relative;
        bottom: 206px;
        left: 203px;
        width: 45px;
        height:45px
    }
    .product-header{
        margin-left: 15px;
    }
    .product-header-name{
        margin-left: 25px;
        margin-top: 28px;
        margin-bottom: 28px;
        font-size: 22px;
        font-family: 'Roboto', sans-serif;
        color: rgb(112, 112, 112);
        font-style: italic;
        text-transform: uppercase;
        line-height: 1.2;
        text-align: left;

    }
    .slider-arrows{
        margin-left: 640px;
        margin-right: 30px;
    }


</style>
<script>
    import axios from 'axios';


    export default {
        data() {
            return {
                images : [ 0, 1, 2, 3, 4, 5 ],
                imagesThree : [ 0, 1, 2],
                products : [],
                pageNumber: 0  // по умолчанию 0
            }
        },
        props:{
            listData:{
                type:Array,
                required:true
            },
            size:{
                type:Number,
                required:false,
                default: 10
            }
        },

        methods: {
            unshowComponent(){
                this.$emit('unshowComponent', false);
            },

            getProducts(){
                axios.get('/products', {})
                    .then(response => (this.products = response['data']));
            },
            nextPage(){
                this.pageNumber++;
            },
            prevPage(){
                this.pageNumber--;
            },
            pageCount(){
                let l = this.listData.length,
                    s = this.size;
                // редакция переводчика спасибо комментаторам
                return Math.ceil(l/s);
                // оригинал
                // return Math.floor(l/s);
            },
            paginatedData(){
                const start = this.pageNumber * this.size,
                    end = start + this.size;
                return this.listData.slice(start, end);
            }
        },
        beforeMount() {
            this.getProducts()
        }
    }
</script>