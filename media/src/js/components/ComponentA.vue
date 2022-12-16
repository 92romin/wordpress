<template>
	<!-- Show message -->
	<h1>Output message</h1>
  	<div class="example">{{ msg }}</div>

	<hr>

	<!-- Computed -->
	<h1>Simple Computed Example</h1>
	<div class="example">
		<!-- Good -->
		<p>Has published books:</p>
		<span>{{ publishedBooksMessage }}</span>

		<!-- Bad -->
		<p>Has published books:</p>
		<span v-if="author.books.length > 0">Yes</span>
		<span v-else>No</span>
	</div>

	<hr>

	<!-- Watcher -->
	<h1>Watcher Example</h1>
	<form action="#">
		<label for="fname">First name:</label>
		<input type="text" name="fname" v-model="firstName"><br>

		<label for="fname">Last name:</label>
		<input type="text" name="lname" v-model="lastName">
	</form>

	<strong>Output: {{ fullName }}</strong>

	<hr>

	<!-- Methods -->
	<h1>Methods Example</h1>
	<div class="example">{{ magic() }}</div>

	<hr>

	<!-- Method Create -->
	<h1>Methods create</h1>
	<form action="#">
		<label for="fname">First name:</label>
		<input type="text" name="fname" v-model="firstName"><br>

		<input type="button" value="Create" @click="create">
	</form>

	<hr>

	<!-- Child Component -->
	<h1>Child Component</h1>
	<component-b></component-b>

</template>
 
<script>
import ComponentB from '../components/ComponentB.vue';

export default {
	components: {
		'component-b': ComponentB,
	},
	data () {
		return {
			// First Example
			msg: 'Hello world!',
			// Second Example
			author: {
				name: 'John Doe',
                books: [
                    { category: 'Laravel' },
                    { category: 'PHP' },
                    { category: 'Codeigniter' }
                ]
			},
			// Third Example
			firstName: 'Foo',
			lastName: 'Bar',
			fullName: 'Foo Bar',
		}
	},
	mounted() {
	  	console.log('Component mounted.')
  	},
	// Talk about CRUD!
	methods: {
		// Simple method
		magic() {
			// lets output something from our data vars
			return this.author.name;
			// or lets change it
			// this.author.name = this.firstName;
			// return this.author.name;
		},
		create() {
			if(this.firstName == '') {
				alert(`Please enter a first name`);
			}else {
				// Submit via Axios.
				alert(`We created a new user ${this.firstName}`);
			}
		}
	},
	/* Will override the variable above. */
	computed: {
		publishedBooksMessage() {
			return this.author.books.length > 0 ? 'Yes' : 'No'
		},
		
		// fullName() {
		// 	return this.firstName + ' ' + this.lastName
		// }
	},
	watch: {
		// Compare this with computed
		firstName(val) {
			this.fullName = val + ' ' + this.lastName
		},
		lastName(val) {
			this.fullName = this.firstName + ' ' + val
		}
	}
}
</script>