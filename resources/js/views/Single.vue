<template>

  <div class="container">
          <Header></Header>
      <div class="row">
          <div class="col-md-12" v-for="(blog) in blog" :key="blog.id">
            
              <img class="img-fluid my-2" :src="blog.img" alt="">
                <h2 class="my-3 text-center">{{blog.title}}</h2>
              <p>{{blog.content}}</p>
          </div>
      </div>
  </div>
</template>

<script>
import Header from '../components/Header'
import { mapActions, mapState } from 'vuex'
export default {
    components:{
        Header
    },
    props:['slug'],
    computed: {
       
        ...mapState(['blog'])
    },
    mounted() {
        this.single(this.slug)
    },
    methods: {
        ...mapActions(['single']),
        handleScroll: function (event) {
            
              let mainNav = document.getElementById('mainNav')
            let navItem = document.querySelectorAll('.nav-link')
            if (event.path[1].scrollY >=200) {
               
        
           
            
            mainNav.classList.add('fixed-top')
            mainNav.style.backgroundColor ="black"
            mainNav.style.color ="white"
            mainNav.classList.remove('mt-2')
             
            navItem.forEach((item) => {
                item.classList.remove('text-dark')
                item.classList.add('text-white')})
            }
            else {

                  mainNav.classList.remove('fixed-top')
            mainNav.style.backgroundColor =""
            mainNav.style.color ="black"
            mainNav.classList.add('mt-2')
             
            navItem.forEach((item) => {
                item.classList.remove('text-white')
                item.classList.add('text-dark')})


            }
            
            
            
        }
    },

   

    created: function () {
        window.addEventListener('scroll', this.handleScroll);
    },


}
</script>

<style>

</style>