export const getPosts = ({commit}) => {
    fetch('http://127.0.0.1:8000/api/posts')
    .then((res) => res.json() )
    .then((data) => {
       commit('ALLPOSTS',data)
        
    })
    .catch((error) => console.log(error))
}

export const single = ({commit},slug) => {
    commit('SET_SINGLE',slug)
}