<template>
    <div class="container">
        <h1>{{ lessonDetail }}</h1>
    </div>
</template>

<script>
export default {
    data() {
        return {
            lessonDetail: "ok"
        };
    },
    created() {
        console.log("ıjı");
        axios
            .get("./api/lesson")
            .then(response => {
                this.lessonDetail = response.data;
            })
            .catch(e => this.errors.push(e));
    }
};
</script>
