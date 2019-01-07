<template>
    <div class="main">
        <div class="field">
            <div class="control">
                <input name="name" @keyup="unshowForm" id="name" class="input is-primary" type="text" placeholder="Name" v-model="name">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input name="email" @keyup="unshowForm" id="email" class="input is-info" type="text" placeholder="Email" v-model="email">
            </div>
        </div>
        <article  class="message is-danger" v-if="(error_field !== '')">
            <div class="message-header">
                <p>Danger</p>
                <button class="delete" aria-label="delete"></button>
            </div>
            <div  class="message-body">
                Field {{  error_field }} is requier !
            </div>
        </article>

        <a class="button is-primary" v-on:click="fetchData">Enter</a>
        <a class="button"  v-on:click="uploadUsers">Refresh</a>
        <a class="button" v-on:click="deleteAll">Delete all</a>

        <table>
            <thead>
            <tr>
                <th scope="col" style="text-align: left; width: 10rem;">
                    <div>Name</div>
                </th>
                <th scope="col" style="text-align: left; width: 10rem;">
                    <div>Email</div>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="us in userList" >
                <td>{{us.name}}</td>
                <td>{{us.email}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<style>

</style>
<script>
    import axios from 'axios';


    export default {
        props: ['userList'],
        data() {

            return {
                name : '',
                email : '',
                loading: false,
                users: null,
                error_field : ''
            };
        },

        methods: {
            fetchData() {
                if(!this.checkForm()) {
                    return false;
                }
                this.error = this.users = null;
                this.loading = true;
                axios.post('/send-user', {
                    body: {
                        name : this.name,
                        email : this.email
                    }
                })
                    .then(response => {this.uploadUsers()},);
                this.name = '';
                this.email = '';
            },
            uploadUsers() {
                axios.get('/users', {

                })
                    .then(response => (this.userList = response['data']));
            },
            deleteAll() {
                axios.get('/users-delete')
                    .then(() => {
                        this.uploadUsers()
                    });
                this.uploadUsers();
            },
            checkForm() {
                if(this.name && this.email){
                    return true;
                }
                if(!this.name){
                    this.error_field = 'Name'
                }else{
                    this.error_field = 'Email'
                }
                return false;
            },
            unshowForm() {
                if(this.error_field !== ''){
                    if(this.error_field === 'Name'){
                        if(this.name !== ''){
                            this.error_field = '';
                        }
                    }
                    if(this.error_field === 'Email'){
                        if(this.email !== ''){
                            this.error_field = '';
                        }
                    }
                }
            }
        }
    }
</script>