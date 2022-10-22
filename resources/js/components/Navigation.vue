<template>
    <div class="navigation-wrap">
        <div class="navigation">
            <div class="navigation--items">
                <a :href="this.about_url">O nama</a>
                <a :href="this.blog_url">Blog</a>
            </div>
            <a :href="this.home_url" class="navigation--logo">
                <img :src="'../../images/logo-without-label.svg'" alt="NetVet - Online veterinar">
            </a>
            <div class="navigation--contact">
                <a :href="this.contact_url">Imaš pitanje?</a>
            </div>
            <div class="hamburger" @click="toggleMobileNav" :class="{ 'hamburger__active' : mobileActive }">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div :class="this.mobileActive ? 'mobile-navigation-active' : 'mobile-navigation'">
            <a :href="this.about_url">O nama</a>
            <a :href="this.blog_url">Blog</a>
            <a :href="this.contact_url">Imaš pitanje?</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Navigation",
    props: {
        about_url: null,
        contact_url: null,
        home_url: null,
        blog_url: null
    },
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
.navigation-wrap {
    width: 100%;
}
.navigation {
    width: 95%;
    margin: 0 auto;
}
.mobile-navigation-active {
    border-radius: 0 0 0 10px;
}
.mobile-navigation {
    border-radius: 0 0 0 10px;
}
.mobile-navigation a {
    text-decoration: none;
    color: #000;
}
.mobile-navigation-active a {
    text-decoration: none;
    color: #000;
}
</style>
