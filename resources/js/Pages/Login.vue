<template>

<Login  :errors="errors" />

</template>

<script>

import Login from '@/Components/Login.vue';

export default {
        
    components:{
            Login
    },

    props: {
        errors: {
            type: Array,
            default:[]
        },
    },
    }
</script>
