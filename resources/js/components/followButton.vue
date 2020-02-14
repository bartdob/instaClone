<template>
    <div>

        <button class="h8 btn btn-primary ml-4" @click="followUser">Follow</button>


    </div>
</template>

<script>
    export default {

        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function () {

        return status;

        }

        methods: {

            followUser() {
                axios.post('/follow/{user}')
                    .then(response=> {
                        console.log(response.data);
                    })
            }


        }
    }
</script>
