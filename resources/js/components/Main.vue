<template>
  <div class="container">
      <div class="row">
          <div class="col-md-6 m-auto text-center ">
              <img src="../assets/ilqar.jpg" class="img-fluid img rounded-circle w-50" alt="">
          </div>
          <div class="col-md-6 m-auto">
             <div class="content">
                  <h6 class="text-muted">Full Stack Developer</h6>
              <h1 class="my-2 font-weight-bolder">Ilqar Aliyev</h1>
              <p class="my-4">Hi. I am self-taught Full-stack Web Developer
                  who always amazed by coding and making websites.
                  
              </p>
             </div>
        <div class="button">
          <button type="button" class="btn btn-light mr-2  border-primary rounded-pill px-4 p-2">Download Cv</button>
    
        </div>
          </div>
      </div>

  </div>
</template>

<script>
export default {
    name:'Main'
}
</script>

<style scoped>

@media only screen and (max-width: 600px) {
    .img {
        text-align: center;

    }
    .content {
        margin: 10px auto;
        text-align: center;
    }
    .button {
        margin: 5px auto;
        text-align: center;
    }
}

</style>