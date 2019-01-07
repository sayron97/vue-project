<template>
    <div class="users">
        <div class="loading" v-if="loading">
            Loading...
        </div>

        <div v-if="error" class="error">
            {{ error }}
        </div>

        <ul v-if="users">
            <li v-for="{ name, email } in users">
                <strong>Name:</strong> {{ name }},
                <strong>Email:</strong> {{ email }}
            </li>
        </ul>
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                loading: false,
                users: null,
                postBody : {
                    name : '',
                    email : ''
                },
                errors: [],
            };
        },
        created() {
            this.fetchData();
        },
        methods: {
            fetchData() {
                this.error = this.users = null;
                this.loading = true;
                axios.post('/send-user', {
                    body: 'aso'
                    })
                    .then(response => {})
                    .catch(e => {
                        this.errors.push(e)
                    })

            }
        }
    }
</script>