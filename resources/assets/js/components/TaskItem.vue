<style>
	span {
		cursor:pointer;
	}
</style>

<template>
	<li>
		<input type="checkbox" checked="checked" v-model="task.complete" v-on:change="update">
		<span v-on:click="edit">{{ task.title }}</span>
	</li>    
</template>

<script>
	
	import { EventBus } from './../app.js';

	export default {
		
		props: ['task'],

		methods: {
			
			update: function() {		

				let route = '/task/' + this.task.id;

                axios.put(route,{
                    task: this.task
                }).then(function(response){
                    
                    if (response.status == 202) {
                        console.log(response);
                    }

                }).catch(function(error) {
                    console.log(error);
                });
			},

			edit: function() {
				EventBus.$emit('task-edit', this.task);
			},
		},

		mounted: function() {

			let self = this;

			EventBus.$on("task-update-" + self.task.id, function(task) {

				self.task.id             = task.id;                
                self.task.title          = task.title;               
                self.task.complete       = task.complete;
                self.task.description    = task.description;                
                self.task.category_id    = task.category_id;              
                self.task.complete       = task.complete;              
                self.task.complete_on    = task.complete_on;        
                self.task.due            = task.due;     
                self.task.list_id        = task.list_id;
                self.task.updated_at     = task.updated_at;
                self.task.created_at     = task.created_at;
            });
		}
	}
</script>