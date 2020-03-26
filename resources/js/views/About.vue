<template>
  <div>
    <Header></Header>
    <Resume></Resume>
  </div>
</template>

<script>
import Header from '../components/Header'
import Resume from '../components/Resume'
export default {
    name:'About',
  components:{
    Resume,Header
  },

methods: {
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