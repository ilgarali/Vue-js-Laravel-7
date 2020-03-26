export const ALLPOSTS = (state,data) => {
  
  state.blogs = data
  
}

export const SET_SINGLE = (state,slug) => {

    state.blog = state.blogs.filter(item => item.slug==slug)
  
    
    
  }