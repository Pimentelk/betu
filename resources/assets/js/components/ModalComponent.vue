<template>
    <div id="modal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                    <h4 id="modal-title" class="modal-title">{{ modal.title }}</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="title" class="col-sm-4 control-label">Title</label>
                            <div class="col-sm-6">
                                <input v-model="task.title" id="title" class="form-control" type="text" placeholder="Enter the book title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-4 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea v-model="task.description" id="learned" class="form-control" rows="8"></textarea>
                            </div>
                        </div>                        
                    </form>
                </div>
                <div class="modal-footer">
                    
                    <div v-if="modal.showEditButtons">
                        <button type="button" 
                                class="btn btn-danger pull-right" 
                                v-on:click="remove">Delete</button>

                        <button type="button" 
                                class="btn btn-primary pull-right btn-save" 
                                v-on:click="update">Save</button>
                    </div>

                    <div v-if="!modal.showEditButtons">
                        <button type="button" 
                                class="btn btn-primary pull-right btn-save" 
                                v-on:click="store">Create</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import { EventBus } from './../app.js';    

    export default {

        props: ['title'],

        data: function() {
            return {
                modal: {
                    title: 'Edit Task',
                    showEditButtons: true,
                },
                task: {
                    id: '',
                    title: '',
                    description: '',
                    list_id: '',
                    category_id: '',
                    complete: 0,
                    complete_on: '',
                    due: '',
                    updated_at: '',
                    created_at: '',
                }
            }
        },

        methods: {
            
            init: function() {

                console.log('init');

                return;
            },
            
            store: function() {              

                let self = this;

                axios.post('/task',{      
                    task: {
                        title: self.task.title,
                        description: self.task.description,
                        list_id: self.task.list_id
                    }
                }).then(function(response){
                    
                    if (response.status == 202) {
                        EventBus.$emit("task-add-" + response.data.list_id, response.data);
                        $('#modal').modal('hide');
                    }                      

                }).catch(function(error) {
                    console.log(error);
                });

            },

            add: function(list_id) {

                this.reset();

                this.modal.title = 'Add New Task';                
                this.modal.showEditButtons = false;
                this.task.list_id = list_id;

                $('#modal').modal('show'); 
            },

            save: function() {

                let route = '/task/' + this.task.id;

                axios.post(route,{      
                    task: this.task
                }).then(function(response){
                    
                    if (response.status == 201) {
                        
                    }                      

                }).catch(function(error) {
                    console.log(error);
                });

            },

            close: function() {

                $('#modal').modal('show');

                this.reset();
            },

            reset: function() {
                this.modal.title            = "Edit Task";
                this.modal.showEditButtons  = true;
                this.task.id                = "";
                this.task.title             = "";
                this.task.description       = "";
                this.task.list_id           = "";
                this.task.category_id       = "";
                this.task.complete          = "";
                this.task.complete_on       = "";
                this.task.due               = "";
                this.task.updated_at        = "";
                this.task.created_at        = "";
            },

            update: function() {

                let route = '/task/' + this.task.id;
                let self = this;

                axios.put(route,{
                   task: self.task
                }).then(function(response){
                    
                    if (response.status == 202) {                        
                        EventBus.$emit("task-update-" + self.task.id, self.task);
                    }

                    $('#modal').modal('hide');

                }).catch(function(error) {
                    console.log(error);
                });

            },

            remove: function() {

                let route = '/task/' + this.task.id;
                let self = this;

                axios.delete(route,{
                    task: self.task
                }).then(function(response){
                    
                    if (response.status == 202) {                        
                        EventBus.$emit("task-remove-" + self.task.list_id, self.task);
                    }

                    $('#modal').modal('hide');

                }).catch(function(error) {
                    console.log(error);
                });

            },

        },

        mounted: function() {
            
            let self = this;

            EventBus.$on('task-edit', function(task) {

                self.reset();
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

                $('#modal').modal('show');
            });

            EventBus.$on("task-new", function(list_id) {
                self.add(list_id);
            }); 
        },
    }
</script>