
import Posts from "../components/Posts/Posts.vue";
import PostDetails from "../components/Posts/PostDetails.vue";

export const routes = [
    { path: '/', component: Posts, name: 'Post' },
    { path: '/post/:slug', component: PostDetails, name: 'PostDetails' },
];
