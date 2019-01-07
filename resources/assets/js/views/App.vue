<template>
    <div class="main">
        <div class="container-fluid main-background">
            <div class="container-fluid">
                <div class="app-header">
                    <app-header></app-header>
                </div>
            </div>
            <div class="container-custom">
                <div class="row main-background">
                    <div class="col-md-3">
                        <div class="nav-bar">
                            <nav-bar></nav-bar>
                            <nav-image-block></nav-image-block>
                            <vigets></vigets>
                            <articles></articles>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="main-list">
                         <!--   <main-list></main-list>  -->
                            <router-view></router-view>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <brand></brand>
                        <social-networks></social-networks>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="footer-main">
                <footer-page></footer-page>
            </div>
            <footer-panel></footer-panel>

            <!--       <p>
                       <router-link :to="{ name: 'home' }">Home</router-link> |
                       <router-link :to="{ name: 'hello' }">Hello World</router-link>
                       <router-link :to="{ name: 'users.index' }">Users</router-link>
                   </p>
            -->

        </div>
    </div>
</template>
<style lang="scss" scoped>
    @gridColumns :           12;
    @gridColumnWidth :       70px;
    @gridColumnWidth768 :    70px;
    @gridGutterWidth :    30px;
    @gridGutterWidth768 :    30px;
    @font-face {
        font-family: "BoldItalic";
        src: url("/Users/ipeople/work/vue/public/fonts/Raleway/Raleway-ExtraBold.otf");
    }
    .container-custom {
        width: 1170px;
        margin-right: auto;
        margin-left: auto;
    }

    .main-background {
        background-color: #f8f8f8;
    }

    .social-network-background {
        background-color: #eaeaea;
    }

    .footer-main {
        background-color: #373737;
        padding-bottom: 35px;
        margin-top: -46px
    }

    .container-fluid {
        padding-right: 0;
        padding-left: 0;
    }

</style>
<script>
    import AppHeader from '../components/Header.vue'
    import NavBar from '../components/NavBar.vue'
    import MainList from '../components/MainList.vue'
    import FooterPage from '../components/FooterPage.vue'
    import NavImageBlock from '../components/NavImageBlock.vue'
    import Vigets from '../components/Vigets.vue'
    import Articles from '../components/Articles.vue'
    import Brand from '../components/Brand.vue'
    import SocialNetworks from '../components/SocialNetworks.vue'
    import FooterPanel from '../components/FooterPanel.vue'
    import ProductCard from '../components/ProductCard.vue'
    import {Carousel, Slide} from 'vue-carousel';

    export default {
        components: {
            AppHeader: AppHeader,
            NavBar: NavBar,
            MainList: MainList,
            NavImageBlock: NavImageBlock,
            Vigets: Vigets,
            Articles: Articles,
            Brand: Brand,
            SocialNetworks: SocialNetworks,
            FooterPage: FooterPage,
            FooterPanel: FooterPanel,
            ProductCard: ProductCard,
            Carousel,
            Slide
        }
    }
</script>