@extends('layouts.app')
@section('title', 'Dashboard')
@section('Dashboard')

<div class="container pt-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="{{route('dashboard.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="reg_no" class="form-label">Register Number</label>
                    <input type="number" class="form-control" id="reg_no" name="reg_no">
                    @error('reg_no')
                    <span class="text-danger mt-1">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mark_one" class="form-label">Mark 1</label>
                    <input type="number" class="form-control" id="mark_one" name="mark_one">
                    @error('mark_one')
                    <span class="text-danger mt-1">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mark_two" class="form-label">Mark 2</label>
                    <input type="number" class="form-control" id="mark_two" name="mark_two">
                    @error('mark_two')
                    <span class="text-danger mt-1">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mark_three" class="form-label">Mark 3</label>
                    <input type="number" class="form-control" id="mark_three" name="mark_three">
                    @error('mark_three')
                    <span class="text-danger mt-1">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exam_date" class="form-label">Exam Date</label>
                    <input type="datetime-local" class="form-control" id="exam_date" name="exam_date">
                    @error('exam_date')
                    <span class="text-danger mt-1">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection