<template>

    <div class="col-lg-8">
        <div class="row">
            <div class="col-sm-6 py-3" v-for="post in posts" :key="post.id">
                <div class="card-blog">
                    <div class="header">
                        <router-link :to="'/post/'+post.slug" class="post-thumb">
                         <img :src="'img/'+post.image" alt="">
                        </router-link>
                    </div>
                    <div class="body">
                        <h5 class="post-title">
                            <router-link :to="'/post/'+post.slug" class="post-thumb">
                                {{post.slug}}
                            </router-link>
                        </h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <span>{{post.user.name}}</span>
                            </div>
                            <span class="mai-time"></span> {{post.created_at}}
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .row -->
    </div>


</template>

<script>
export default {
    data(){
      return {
          posts : []
      }
    },
    mounted() {
        this.getPosts();
    },
    methods: {
      getPosts(){
          axios.get('/api/posts')
              .then(res=>{
                  this.posts = res.data.data;
              }).catch(err=>{
                  console.log(err)
          })
      }
    },
}
</script>
