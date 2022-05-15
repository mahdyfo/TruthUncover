<template>
    <div class="card card-body">
        {{reason.title}}
    </div>
</template>

<script>
    export default {
        props: ['reason'],
        setup() {
            console.log();
        }
    }
</script>

<style scoped>
    .card {
        min-width: 100px;
        text-align: center;
    }
</style>
