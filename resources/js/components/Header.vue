<template>
  <nav class="navbar navbar-container navbar-expand-lg navbar-dark mt-2 mb-5 " id="mainNav">
            <div class="container">
                <!-- <a class="navbar-brand text-dark" id="l" href="#">Logo</a> -->
                <button class="navbar-toggler navbar-togler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Tooglenavigation">Menu <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase my-0 ml-auto">
                        <li class="nav-item">
                            <router-link to="/" class="nav-item nav-link text-dark">Home</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/about" class="nav-item nav-link text-dark">About</router-link>
                        </li>
                       <li class="nav-item">
                            <router-link to="/blog" class="nav-item nav-link text-dark">Blog</router-link>
                        </li>
                        

                       
                    </ul>
                </div>
            </div>

        </nav>
</template>

<script>
export default {
    name:"Header",
 

}
</script>

<style scoped>
.nav-link {
    font-weight: bolder;
}
#mainNav {
    transition:ease-in-out 1s;
}

@media only screen and (max-width: 600px) {
    .navbar-toggler  {
        color: black;
        background-color: white;
    }
    .nav-link {
        color: black;
        font-weight: bolder;
        margin: 0 auto 0 0.8rem;
    }
    
}

</style>