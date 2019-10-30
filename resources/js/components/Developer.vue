<style>
    .widget-user-header{
        background-size: cover;
        background-position: center center;
        height: 835px;

    }

    </style>

<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <passport-clients></passport-clients>
                <passport-authorized-clients></passport-authorized-clients>
                <passport-personal-access-tokens></passport-personal-access-tokens>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {

                form: new Form({
                    id:'',
                    name: '',
                    email:'',
                    password:'',
                    type:'',
                    bio:'',
                    photo:''
                })
            }

        },
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            console.log('Component created.')
            axios.get("api/profile/").then(({ data }) => (this.users = data.data));

        }
    }
</script>