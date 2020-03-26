<template>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              
              <div class="h1">
                  Blogs
              </div>
              <hr>
          </div>
      </div>
      <div class="row">
          <div v-for="(blog) in blogs" :key="blog.id" class="col-md-6">
             
              <div>
                 <img :src="blog.img" alt="" class="img-fluid my-2">
                 
                  <h3>{{blog.title}}</h3>
                  <p>
                      {{blog.description}}
                     
                </p>
                <router-link :to="{name:'Single',params:{slug:blog.slug}}" >Read More</router-link>
              </div>
              </div>
         
      </div>
  </div>
</template>

<script>
import {mapState, mapActions} from 'vuex'
export default {
    name:'Blog',
    computed: {
        ...mapState(['blogs'])
    },
    created() {
        this.getPosts()
    },
    

    methods: {
      ...mapActions(['getPosts'])
    },
}
</script>

<style>

</style>