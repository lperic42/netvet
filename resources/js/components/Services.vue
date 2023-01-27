<template>
    <div class="iconsOuter">
        <div class="iconsWrap">
            <div class="icons">
                <a class="icon-link" :href="this.link + '?filter=dogs'">
                    <img src="images/dog-icon.svg" alt="NetVet logo - veterinar koji je prisutan u svakom trenutku">
                </a>
                <a class="icon-link" :href="this.link + '?filter=cats'">
                    <img src="images/cat-icon.svg" alt="NetVet logo - veterinar koji je prisutan u svakom trenutku">
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Services",
    props: {
        link: null,
    }
}
</script>

<style scoped>

</style>
