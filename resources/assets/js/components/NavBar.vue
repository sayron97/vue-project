<template>
    <div class="main">
        <b-nav vertical>
            <span class="nav-header">Menu</span>
            <b-nav-item class="nav-row" active>About</b-nav-item>
            <b-nav-item class="nav-row">Apparel</b-nav-item>
            <b-nav-item class="nav-row">Surf Apparel</b-nav-item>
            <b-nav-item class="nav-row">Windsurf</b-nav-item>
            <b-nav-item class="nav-row">Kitesurf</b-nav-item>
            <b-nav-item class="nav-row">Accessories</b-nav-item>
            <b-nav-item class="nav-row">Sale</b-nav-item>
            <b-nav-item class="nav-row">Brands</b-nav-item>
            <b-nav-item class="nav-row">Blog</b-nav-item>
            <b-nav-item class="nav-row">Gagets</b-nav-item>
            <b-nav-item class="nav-row">Contact</b-nav-item>
        </b-nav>
    </div>
</template>
<style lang="scss" scoped>

        .main{
            font-size: 14px;
            font-family: 'Raleway', sans-serif;

            text-transform: uppercase;
            line-height: 2.571;
            text-align: left;
            font-weight: bold;
        }
        .nav-link{
            padding: 1px 1px;
        }
        .nav-row, .nav-link {
            background-color: #26d2fc;
            padding-left: 20px;

        }
        .nav-header {
            background-color: #333333;
            color: #ffffff;
            padding-top: 18px;
            padding-bottom: 18px;
            padding-left: 42px;
            font-size: 14px;
            font-family: 'Raleway', sans-serif;

            text-transform: uppercase;
            line-height: 2.286;
            text-align: left;

        }
        .nav-row:hover, .nav-link:hover {
            background-color: #333333;
        }
        A {
            color: #000000;
        }
        A:hover {
            color: #ffffff;
        }

</style>
<script>
    import axios from 'axios';


    export default {

    }
</script>