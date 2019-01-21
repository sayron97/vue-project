import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'


import VueRouter from 'vue-router'
import VueCarousel from 'vue-carousel';



import App from './views/App'
import MainList from './components/MainList'
import ProductCard from './components/ProductCard'
import Home from './views/Home'


import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(VueRouter)
Vue.use(BootstrapVue);
Vue.use(VueCarousel);


const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/', name: "home", component: MainList},
        {path: '/product/:id', name: "product", component: ProductCard}

    ]
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});