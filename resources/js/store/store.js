export default {
    state: {
        kilos: 0,
        OverlayShow: false,
        messages: {},
        contact: {},
        postUser: {},
        isActiveChat: true,
        selectContact: {},
        authUser: {},
        notifications: []
        
      },
      mutations: {
        setKilos (state, payload) {
          state.kilos = payload;
        },
        contact (state, payload) {
          state.contact = payload;
        },
        selectContact (state, payload) {
          state.selectContact = payload;
        },
        setisActiveChat (state, payload) {
          state.isActiveChat = payload;
        },
        bookKilo (state, payload) {
            if(payload <= state.kilos) {
              state.kilos = (state.kilos - payload);
            }
          },
          messages (state, payload) {
            state.messages = payload;
          },
          authUser (state, payload) {
            state.authUser = payload;
          },
          setNotifications (state, payload) {
            state.notifications = payload;
          },
          addNotification (state, payload) {
            state.notifications.push(payload);
          },
          setOverlayShow (state, payload) {
            state.OverlayShow = payload;
          }
      },
      actions: {
        setKilos(context, payload) {
            context.commit('setKilos', payload);
        },
        selectContact(context, payload) {
            context.commit('selectContact', payload);
        },
        contact(context, payload) {
            context.commit('contact', payload);
        },
        setisActiveChat(context, payload) {
            context.commit('setisActiveChat', payload);
        },
        bookKilo(context, payload) {
            context.commit('bookKilo', payload);
        },
        setNews(context, payload) {
          context.commit('setNews', payload);
        },
        authUser(context, payload) {
          context.commit('authUser', payload);
        },
        setNotifications(context, payload) {
          context.commit('setNotifications', payload);
        },
        addNotification(context, payload) {
          context.commit('addNotification', payload);
        },
        setOverlayShow(context, payload) {
          context.commit('setOverlayShow', payload);
        }
      },
      getters: {
          getKilos(state) {
              return state.kilos;
          },
          messages(state) {
            return state.messages;
          },
          authUser(state) {
            return state.authUser;
          }, 
          selectContact(state) {
            return state.selectContact;
          }, 
          contact(state) {
            return state.contact;
          }, 
          getisActiveChat(state) {
            return state.isActiveChat;
          },
          getNotifications(state) {
            return state.notifications;
          }, 
          getOverlayShow(state) {
            return state.OverlayShow;
          } 
      }
}