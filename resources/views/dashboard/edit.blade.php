@extends('layouts.app')
@section('title', 'Dashboard')
@section('Dashboard')

<div class="container pt-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="{{ route('dashboard.update',$dashboard->id) }}" method="post">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label for="reg_no" class="form-label">Register Number</label>
                    <input type="number" class="form-control" id="reg_no" name="reg_no" value="{{$dashboard->reg_no}}">
                </div>
                <div class="mb-3">
                    <label for="mark_one" class="form-label">Mark 1</label>
                    <input type="number" class="form-control" id="mark_one" name="mark_one"
                        value="{{$dashboard->mark_one}}">
                </div>
                <div class="mb-3">
                    <label for="mark_two" class="form-label">Mark 2</label>
                    <input type="number" class="form-control" id="mark_two" name="mark_two"
                        value="{{$dashboard->mark_two}}">
                </div>
                <div class="mb-3">
                    <label for="mark_three" class="form-label">Mark 3</label>
                    <input type="number" class="form-control" id="mark_three" name="mark_three"
                        value="{{$dashboard->mark_three}}">
                </div>
                <div class="mb-3">
                    <label for="exam_date" class="form-label">Exam Date</label>
                    <input type="datetime-local" class="form-control" id="exam_date" name="exam_date"
                        value="{{$dashboard->exam_date}}">
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection