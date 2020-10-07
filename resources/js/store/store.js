const Vue = require('vue');
export default {
    state: {
        kilos: 0
      },
      mutations: {
        setKilos (state, payload) {
          state.kilos = payload;
        },
        bookKilo (state, payload) {
            if(payload <= state.kilos) {
                state.kilos = (state.kilos - payload);
            }
          }
      },
      actions: {
        setKilos(context, payload) {
            context.commit('setKilos', payload)
        },
        bookKilo(context, payload) {
            context.commit('bookKilo', payload)
        }
      },
      getters: {
          getKilos(state) {
              return state.kilos;
          }
      }
}