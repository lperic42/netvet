<template>
    <div class="navigation-wrap">
        <div class="navigation">
            <div class="navigation--items">
                <a href="#">O nama</a>
                <a href="#">Blog</a>
            </div>
            <a href="#" class="navigation--logo">
                <img src="../../images/logo.png" alt="NetVet - Online veterinar">
            </a>
            <div class="navigation--contact">
                <a href="#">Imaš pitanje?</a>
            </div>
            <div class="hamburger" @click="toggleMobileNav" :class="{ 'hamburger__active' : mobileActive }">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div :class="this.mobileActive ? 'mobile-navigation-active' : 'mobile-navigation'">
            <a href="#">Početna</a>
            <a href="#">O nama</a>
            <a href="#">Blog</a>
            <a href="#">Imaš pitanje?</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Navigation",
    data() {
        return {
            mobileActive: false,
        };
    },
    methods: {
        toggleMobileNav() {
            this.mobileActive = !this.mobileActive;
            console.log(this.mobileActive);
        }
    }
}
</script>

<style scoped>

</style>
