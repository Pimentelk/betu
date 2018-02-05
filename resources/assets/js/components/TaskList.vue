<style>
	.add-task {
		text-align: center;
		border: 2px dashed #6d326dc9;
		color: #6d326dc9;
		padding: 3px;
	}
</style>

<template>
	<div class="col-md-3 col-sm-6 col-xs-12">
    	<div id="scrollbar" class="x_panel scrollbar">
		    <div class="x_title">
		        <div v-show="edit == false">
		        	<h2 @dblclick="edit = true">{{ title }}</h2>
		        </div>
		        <input 	v-show="edit == true" v-model="title" 
		        		v-on:blur="edit = false; update()" @keyup.enter="edit = false;">

		        <ul class="nav navbar-right panel_toolbox">
		            <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
		                <ul class="dropdown-menu" role="menu">
		                    <li><a v-on:click="prepareTask">Add Task</a></li>
		                    <!-- <li><a v-on:click="archiveList">Archive</a></li> -->
		                    <li><a v-on:click="removeList">Delete</a></li>
		                </ul>
		            </li>
		        </ul>
		        <div class="clearfix"></div>
		    </div>
		    <div class="x_content">
		        <div class="icheckbox_flat-green">
		        	<ul class="to_do" v-for="task in list.tasks" :key="task.id">
		            	<task-item v-bind:task="task"></task-item>
		            </ul>
		            <div class="add-task" v-on:click="prepareTask">
	            		<span>Add Task</span>
	            	</div>
		        </div>
		    </div>
		</div>
	</div>
</template>

<script>

	import TaskItem from './TaskItem.vue';

	import { EventBus } from './../app.js';

	export default {
		
		components: { TaskItem },

		props: ['list'],

		data: function() {
			return {
				title: this.list.title,
				edit: false,
				edited: null,
			}
		},

		methods: {
			
			editTitle: function(title) {
				this.editedTitle = title;
			},
			
			prepareTask: function() {
				EventBus.$emit("task-new",this.list.id);
			},
			
			addTask: function(task) {
				this.list.tasks.push(task);
			},

			// archiveList: function() {
			// 	console.log(this.list)
			// },

			update: function() {
				
				let route = '/tasklist/' + this.list.id;
                let self = this;

                axios.put(route,{
                    tasklist: {
                    	title: self.title
                    }
                }).then(function(response){
                    
                    if (response.status == 202) {
                        
                    }

                }).catch(function(error) {
                    console.log(error);
                });

			},
			
			removeList: function() {

				let route = '/tasklist/' + this.list.id;
                let self = this;

                axios.delete(route,{
                    list: self.list
                }).then(function(response){
                    
                    if (response.status == 202) {
                        EventBus.$emit("list-remove", self.list);
                    }

                }).catch(function(error) {
                    console.log(error);
                });
				
			},

			remove: function(task_id) {
				for (let i = 0; i < this.list.tasks.length; i++) {
					if (this.list.tasks[i].id == task_id) {
						this.list.tasks.splice(i,1);
						break;
					}
				}
			}

		},

		mounted: function() {

			let self = this;

			EventBus.$on("task-remove-" + self.list.id, function(task) {
				self.remove(task.id);
            });  

            EventBus.$on("task-add-" + self.list.id, function(task) {
                self.addTask(task);
            }); 
		}
	}
	
</script>