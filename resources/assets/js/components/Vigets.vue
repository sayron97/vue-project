<template>
    <div class="main">
        <div class="white-block">
            <p class="text-widgets">Tags Widget</p>
            <span v-for="(tag, key) in tags">
                <b-button href="#">{{tag.name}}</b-button>
            </span>
            <p class="tags-text">view all tags -></p>
        </div>
    </div>
</template>
<style lang="scss" scoped>

    .white-block {
        background-color: #ffffff;
        width: 270px;
        height: 280px;
        margin-top: 30px;
        padding-top: 30px;
        padding-left: 30px;
    }

    .ready-img {
        position: relative;
        left: 144px;
        top: 130px;
    }

    .text-widgets {
        font-size: 24px;
        font-family: 'Raleway', sans-serif;
        font-style: italic;
        line-height: 1.2;
        text-align: left;
        z-index: 279;
    }

    .btn {
        border-radius: 0px;
        background-color: #e9e9e9;
        color: #333333;
        font-family: 'Poppins', sans-serif;
        line-height: 1.2;
        font-size: 12px;
        margin: 4px;
    }

    .btn:hover {
        background-color: #faef03;
        font-size: 14px;
    }

    .btn-secondary {
        border-color: #e9e9e9;
    }

    .tags-text {
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        margin-left: 3px;
        margin-top: 15px;
    }

</style>
<script>
    import axios from 'axios';


    export default {
        data() {
            return {
                fontSize: 8,
                tags: []
            }
        },
        methods: {
            getTags() {
                axios.get('/tags', {})
                    .then(response => (this.tags = response['data']));
            }
        },
        beforeMount() {
            this.getTags()
        }
    }
</script>