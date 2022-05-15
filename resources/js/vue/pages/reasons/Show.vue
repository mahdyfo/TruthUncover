<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <reason :reason="reason"></reason>
            </div>
        </div>
        <div class="row justify-content-around mt-2">
            <div class="col-auto" v-for="childReason in reason.reasons">
                <reason :reason="childReason"></reason>
            </div>
        </div>
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
