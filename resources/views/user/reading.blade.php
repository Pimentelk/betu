@extends('layouts.app')

@section('style')
    <style>
        tbody tr {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')

<div id="modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                <h4 id="modal-title" class="modal-title">@{{ mTitle }}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="title" class="col-sm-4 control-label">Title</label>
                        <div class="col-sm-6">
                            <input v-model="book.title" id="title" class="form-control" type="text" placeholder="Enter the book title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="author" class="col-sm-4 control-label">Author</label>
                        <div class="col-sm-6">
                            <input v-model="book.author" id="author" class="form-control" type="text" placeholder="Enter the book author" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="learned" class="col-sm-4 control-label">Learned</label>
                        <div class="col-sm-6">
                            <textarea v-model="book.learned" id="learned" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="learned" class="col-sm-4 control-label">Notes</label>
                        <div class="col-sm-6">
                            <textarea v-model="book.notes" id="notes" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group" v-if="isUpdate">
                        <label for="status" class="col-sm-4 control-label">status</label>
                        <div class="col-sm-6">
                            <select v-model="book.status" id="status" class="form-control">
                                <option value="0">open</option>
                                <option value="1">completed</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-right btn-save" v-show="isUpdate" @click="update">Update</button>
                <button type="button" class="btn btn-danger pull-right" v-show="isUpdate" @click="remove">DELETE</button>

                <button type="button" class="btn btn-primary pull-right btn-save" v-show="!isUpdate" @click="save">Save</button>
            </div>
        </div>
    </div>
</div>

<div id="panel-container" class="x_panel">
    <div class="x_title">
        <h2>Reading List</h2>
        <button class='btn btn-info btn-sm right pull-right' @click="showAddModal">+</button>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">            
            <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1585px;">
                <thead>
                    <tr role="row">
                        <th v-for="(hRow,i) in hRows">
                            @{{ hRow }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr role="row" class="odd" v-for="(row,i) in rows" @click="edit(i)">
                      <td v-for="(value,key) in row" v-if="key != 'id'">                        
                        <span v-if="isCompleted(key,value)">
                            <i class="fa fa-check"></i>
                        </span>
                        <span v-else-if="key == 'status'">
                            <i class="fa fa-close"></i>
                        </span>
                        <span v-else>@{{ value }}</span>
                      </td>
                    </tr>
                </tbody>
            </table>
            <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing <b>@{{ count }}</b> entries</div>                        
        </div>    
    </div>
</div>
@endsection

@section('scripts')
    <script>

        let rows = [];

        @foreach($books as $book)
            rows.push({
                id: '{{ $book->id }}',
                status: '{{ $book->read }}',
                title: '{{ $book->title }}',
                author: '{{ $book->author }}',
                learned: '{{ $book->learned }}',
                notes: '{{ $book->notes }}'
            });
        @endforeach

        Vue.component('table-row',{
            template: `
                <td>@{{ status }}</td>
                <td>@{{ title }}</td>
                <td>@{{ author }}</td>
                <td>@{{ learned }}</td>
                <td>@{{ notes }}</td>
            `,
            props: {
                data: Array,                
            }
        })
                
        let tBody = new Vue({
            el: '#panel-container',
            data: {
                rows: rows,
                hRows: ['Status','Title','Author','Learned','Notes'],
            },
            methods: {
                edit: function(index) {
                    
                    modal.reset();        
                    modal.isUpdate = true;
                    modal.mTitle = 'Edit Book';

                    modal.init(
                        this.rows[index].id,
                        this.rows[index].title,
                        this.rows[index].author,
                        this.rows[index].learned,
                        this.rows[index].notes,
                        this.rows[index].status );

                    $('#modal').modal('show');
                },
                showAddModal: function() { 

                    modal.reset();
                    modal.mTitle = 'Add New Modal';

                    $('#modal').modal('show');
                },
                isCompleted: function (key,value) {

                    if (key == 'status' && value == 1) {
                        return true;
                    }
                    return false;
                },
                refresh: function (data) {

                    tBody.rows = [];

                    for (let i = 0; i < data.length; i++) {
                        tBody.rows.push({
                            id: data[i].id,
                            status: data[i].read,
                            title: data[i].title,
                            author: data[i].author,
                            learned: data[i].learned,
                            notes: data[i].notes
                        });
                    }

                    modal.reset();
                }
            },
            computed: {
                count: function() {
                    return this.rows.length
                }
            }
        });

        let modal = new Vue({
            el: '#modal',
            data: {
                mTitle: 'Add New Modal',
                isUpdate: false,
                book: {
                    status: 0,
                    id: '',
                    title: '',
                    author: '',
                    learned: '',
                    notes: ''
                }
            },
            methods: {
                save: function() {

                    $('#modal').modal('hide');

                    axios.post('/book',{      
                        book: this.book
                    }).then(function(response){
                        
                        if (response.status == 201) {
                            tBody.rows.push({
                                status: "not read",
                                title: modal.book.title,
                                author: modal.book.author,
                                learned: modal.book.learned,
                                notes: modal.book.notes
                            });
                        }

                        modal.reset();                        

                    }).catch(function(error) {
                        console.log(error);
                    });
                },
                reset: function() {
                    modal.isUpdate = false;
                    modal.book.id = '';
                    modal.book.title = '';
                    modal.book.author = '';
                    modal.book.learned = '';
                    modal.book.notes = '';
                    modal.book.status = 0;
                },
                init: function(id,title,author,learned,notes,status) {
                    modal.book.id = id;
                    modal.book.title = title;
                    modal.book.author = author;
                    modal.book.learned = learned;
                    modal.book.notes = notes;
                    modal.book.status = status;
                },
                update: function() {
                    
                    $('#modal').modal('hide');

                    let route = '/book/' + this.book.id;

                    axios.put(route,{
                        book: this.book,
                    }).then(function(response){
                        
                        if (response.status == 202) {
                            tBody.refresh(response.data);
                        }

                        modal.reset();                        

                    }).catch(function(error) {
                        console.log(error);
                    });
                },
                remove: function() {
                    $('#modal').modal('hide');

                    let route = '/book/' + this.book.id;

                    axios.delete(route,{
                        id: this.book.id,
                    }).then(function(response){
                        
                        if (response.status == 202) {
                            tBody.refresh(response.data);
                        }

                    }).catch(function(error) {
                        console.log(error);
                    });
                }
            }
        });

    </script>
@endsection