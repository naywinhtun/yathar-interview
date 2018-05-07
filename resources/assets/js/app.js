import Vue from 'vue';
import axios from 'axios';

import Form from './core/Form';

window.axios = axios;
window.Form = Form;

new Vue({
  el:'#app',

  data:{

  	form: new Form({
  		name:'',
  	  description:''
  	})
  },

  methods:{
     onSubmit(){
     	this.form.submit('post','/project');
       // axios.post('/project',this.$data)
       //      .then(this.onSuccess)
       //      .catch(error => this.form.errors.record(error.response.data.errors));
     }
  }
});