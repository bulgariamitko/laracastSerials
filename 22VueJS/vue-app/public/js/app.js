new Vue({
	el: '#app',
	data: {
		skills: []
	},
	mounted() {
		// Make an ajax request to out server = /skills
		axios.get('/skills').then(response => this.skills = response.data);
	}
});