import Axios from 'axios';

const Vue = require('vue');
export default {
    state: {
        kilos: 0,
        news: {},
        currentUser: {},
        postUser: {},
        isActiveChat: true
        
      },
      mutations: {
        setKilos (state, payload) {
          state.kilos = payload;
        },
        setPostUser (state, payload) {
          state.postUser = payload;
        },
        setCurrentUser (state, payload) {
          state.currentUser = payload;
        },
        setisActiveChat (state, payload) {
          state.isActiveChat = payload;
        },
        bookKilo (state, payload) {
            if(payload <= state.kilos) {
              state.kilos = (state.kilos - payload);
            }
          },
          setNews (state) {
            axios.get('/api/listeNews')
            .then(function (response) {
              Vue.set(state.news,'', response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
          }
      },
      actions: {
        setKilos(context, payload) {
            context.commit('setKilos', payload)
        },
        setCurrentUser(context, payload) {
            context.commit('setCurrentUser', payload)
        },
        setPostUser(context, payload) {
            context.commit('setPostUser', payload)
        },
        setisActiveChat(context, payload) {
            context.commit('setisActiveChat', payload)
        },
        bookKilo(context, payload) {
            context.commit('bookKilo', payload)
        },
        setNews(context, payload) {
          context.commit('setNews', payload)
      }
      },
      getters: {
          getKilos(state) {
              return state.kilos;
          },
          getNews(state) {
            return state.news;
          }, 
          getCurrentUser(state) {
            return state.currentUser;
          }, 
          getPostUser(state) {
            return state.postUser;
          }, 
          getisActiveChat(state) {
            return state.isActiveChat;
          } 
      }
}