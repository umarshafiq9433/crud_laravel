@extends('layout.lay')
@section('nav2')
    active
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Students List</h4>
            <table class="table table-responsive-md">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Program</th>
                    <th>Date Created</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->program->name }}</td>
                        <td>{{ $student->created_at }}</td>
                        <th><a href="/{{ $student->id }}/show" class="btn btn-warning">Update</a></th>
                        <th><a href="#" onclick="
                        event.preventDefault();
                        var result = confirm('Are you sure?');
                        if(result){
                            document.getElementById('d-{{ $student->id }}').submit();
                                }
                        " class="btn btn-danger">Delete</a>
                        <form action="/{{ $student->id }}/delete" method="post" id="d-{{ $student->id }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
