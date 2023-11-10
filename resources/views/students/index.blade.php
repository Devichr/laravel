@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>STUDENTS</h2>
                    </div>
                    <div class="card-body">
                        <a href="/student/create" class="btn btn-success btn-sm" title="Add New Student">Add New</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" border="1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $u)
                                    <tr>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>{{$u->created_at}}</td>
                                        <td>{{$u->updated_at}}</td>
                                            <td>

                                                <a href="/student/show/{{$u->id}}" title="Show Student"><button class="btn btn-primary btn-sm"> Show</button></a>
                                                <a href="/student/edit/{{$u->id}}" title="Edit Student"><button class="btn btn-primary btn-sm"> Edit</button></a>
                                                <form method="POST" action="{{ url('/student' . '/' . $u->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm ("Confirm delete?")"> Delete</button>
                                                </form>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
