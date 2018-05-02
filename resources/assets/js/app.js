import Vue from 'vue';
import { populateAmenitiesAndPrices } from './helpers';
let model = JSON.parse(window.vuebnb_listing_model);
model = populateAmenitiesAndPrices(model);
/*document.addEventListener('keyup', evt=>{

})*/
var app = new Vue({
  el: '#app',
  data: Object.assign(model, {
    modalOpen: false,
    contracted: true,
    headerImageStyle: {
      'background-image': `url(${model.images[0]})`
    }
  }),
  methods: {
    escapeKeyListener(evt) {
      if (evt.keyCode === 27 && this.modalOpen){
        this.modalOpen = false
      }
    }
  },
  watch: {
    modalOpen () {
      let className = 'modal-open'
      if (this.modalOpen){
        document.body.classList.add(className)
      } else {
        document.body.classList.remove(className)
      }
    }
  },
  created() {
    document.addEventListener('keyup', this.escapeKeyListener)
  },
  destroyed() {
    document.removeEventListener('keyup', this.escapeKeyListener)
  }
})
