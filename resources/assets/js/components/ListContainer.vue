
<template>
	<div id="klists">		
		
		<modal></modal>
		
		<task-list v-for="list in lists" v-bind:list="list" :key="list.id"></task-list>

		<div class="col-md-3 col-sm-6 col-xs-12" align="center">
			<button class="btn btn-new-list" v-on:click="add">NEW LIST</button>
		</div>

	</div>	
</template>

<script>
	
	import TaskList from './TaskList.vue';
	import Modal from './ModalComponent.vue';
	import { EventBus } from './../app.js';

	export default {

		name: "klists",

		components: {
			TaskList, Modal
		},

		props: ['lists'],

		methods: {
			
			add: function() {

				let self = this;

                axios.post('/tasklist',{
                    tasklist: {
                    	title: self.title
                    }
                }).then(function(response){                    
                    if (response.status == 202) {
                    	
                    	let tasklist = response.data;

                        self.lists.push({
							id: tasklist.id,
							title: tasklist.title,
							status: tasklist.status
						});
                    }

                }).catch(function(error) {
                    console.log(error);
                });
				
			},

			remove: function(list_id) {
				for(let i = 0; i < this.lists.length; i++) {
					if(this.lists[i].id === list_id) {
						this.lists.splice(i,1);
						break;
					}
					continue;
				}
			},

		},

		mounted: function() {

			let self = this;

			EventBus.$on("list-remove", function(list) {
				self.remove(list.id);
            });  
		}

	}

</script>
