<template>
	<ul>
		<li v-for="item in items">
			{{ item.title.rendered }}
		</li>
	</ul>
</template>

<script>
	export default {
		data () {
			return {
				items: []
			}
		},
		mounted() {
			this.fetch();
		},
		methods: {
			fetch() {
				const _self = this;
				axios.get(`/posts`)
				.then(function (response) {
					_self.items = response.data;
				})
				.catch(function(error) {
				})
				.then(function () {
				});
			}
		}
	}
</script>