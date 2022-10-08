<template>
    <div class="col-md-4 col-sm-6">
        <a :href="this.url" class="wrapper">
            <div class="blog-post">
                <div class="blog-thumb">
                    <img :src="this.image" alt="" />
                </div>
                <div class="blog-content">
                    <div class="content-show">
                        <h4><a href="#">{{ this.title }}</a></h4>
                        <span>{{ this.created_at }}</span>
                    </div>
                    <div class="content-hide" id="hiddenContent">
                        <p>{{ this.excerpt}}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</template>

<script>
export default {
    name: "Post",
    props: {
        title: null,
        url: null,
        image: null,
        created_at: null,
        excerpt: null,
    }
}
</script>

<style scoped>
.blog-thumb {
    height: 235px;
}

.blog-thumb img {
    height: 100%;
}
</style>
