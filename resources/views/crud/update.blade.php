@extends('layout.lay')
@section('nav')
    active
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Students</h4>
            <form action="/{{ $student->id }}/update" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" name="name" value="{{ $student->name }}" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="r_no">Roll No</label>
                    <input class="form-control" id="r_no" name="r_no" value="{{ $student->roll_no }}" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="program">Program</label>
                    <select name="program" id="program" class="form-control" required>
                        @foreach($programs as $program)
                            <option value="{{ $program->id }}" @if($program->id == $student->program_id) selected @endif>{{ $program->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
