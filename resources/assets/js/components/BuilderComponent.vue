<template>
	<div id="builder">
		<table class="table table-striped workout_table bulk_action">
			<thead>
				<tr>
					<th>Name</th>
					<th>Sets</th>
					<th>Reps</th>
					<th>Weight</th>
					<th>Duration</th>
					<th></th>
				</tr>
			</thead>
			<draggable v-model="items" :element="'tbody'">
				<tr v-for="exercise in items" :key="exercise.id">
					<td>
						<input type="text" 
							   class="form-control" 
							   name="name" 
							   id="name" 
							   v-on:change="update(exercise.id)"
							   v-model="exercise.name">
					</td>
					<td>
						<input type="text" 
							   class="form-control" 
							   name="set" 
							   id="set" 
							   v-on:change="update(exercise.id)"
							   v-model="exercise.sets">
					</td>
					<td>
						<input type="text" 
							   class="form-control" 
							   name="rep" 
							   id="rep" 
							   v-on:change="update(exercise.id)"
							   v-model="exercise.reps">
					</td>
					<td>
						<input type="text" 
							   class="form-control" 
							   name="weight" 
							   id="weight" 
							   v-on:change="update(exercise.id)"
							   v-model="exercise.weight">
					</td>
					<td>
						<input type="text" 
							   class="form-control" 
							   name="duration" 
							   id="duration" 
							   v-on:change="update(exercise.id)"
							   v-model="exercise.duration">
					</td>
					<td class="valign">
						<span><i class="fa fa-arrows"></i></span>
						<span v-on:click="remove(exercise.id)"><i class="fa fa-trash"></i></span>
					</td>
				</tr>
			</draggable>
		</table>
		<button class="btn btn-info pull-right" v-on:click="add">Add Exercise</button>
	</div>
</template>

<script>

	import draggable from 'vuedraggable';

	export default {

		name: "builder",

		components: {
			draggable
		},

		props: ['exercises'],

		data: function() {
			return {
				items: this.exercises
			}
		},

		methods: {
			
			add: function() {

				let self = this;
				let route = '/builder';

                axios.post(route,{
                	workout_id: self.exercises[0].workout_id
                }).then(function(response){                    
                    if (response.status == 202) {                    	
                    	let exercise = response.data;
						self.items.push(exercise);
                    }
                }).catch(function(error) {
                    console.log(error);
                });				
			},
			
			remove: function(item_id) {

				let self = this;
				let route = '/builder/' + item_id;

				axios.delete(route,{
                    
                }).then(function(response){
                    
                    if (response.status == 202) {                        
						self.items.splice(self.getExerciseIndex(item_id),1);
                    }

                }).catch(function(error) {
                    console.log(error);
                });
			},
			
			update: function(item_id) {

                let self = this;
				let route = '/builder/' + item_id;

				let exercise = self.items[self.getExerciseIndex(item_id)];

                axios.put(route,{
                    exercise: exercise
                }).then(function(response){
                    
                    if (response.status == 202) {
                        
                    }

                }).catch(function(error) {
                    console.log(error);
                });
			},

			getExerciseIndex: function(item_id) {
				for(let i = 0; i < this.items.length; i++) {
					if(this.items[i].id === item_id) {
						return i;
					}
					continue;
				}				
				return -1;
			}

		}
	}

</script>