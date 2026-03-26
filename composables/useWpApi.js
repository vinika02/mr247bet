export default () =>{
    const config=useRuntimeConfig()
    const wpUri= config.public.wpURI

    const get = async (endpoint) =>
    useFetch(`${wpUri}/wp-json/wp/v2/${endpoint}`)


    // Get all posts
    const getPosts = async(categories,page=1,perPage=100) => {
   
    let query = `posts?_embed&per_page=${perPage}&page=${page}`
    
    if(categories){
query+=`&categories=${categories}`
    }
    return get(query)
}

    // Get single post
    const getPost = async(slug)=> get(`posts?slug=${slug}&_embed`)

    // Get all categories
    const getCategories=async()=> get("categories")
    
    // Get single category
    const getCategory=async(slug)=> get(`categories?slug=${slug}`)
 
    // Get search
    const getSearch = async(query)=> useFetch(`https://mr247admin.com/index.php/wp-json/wp/v2/search?_embed=1&per_page=100&search=${query}`)

    return{
        get,
        getPosts,
        getPost,
        getCategories,
        getCategory,
        getSearch
    }
}