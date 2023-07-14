@extends('layouts.guest')
@section('content')
<div class="container py-5">
    <div class="row pb-5">
        <div class="col-md-6 offset-3">
            <form action="{{ url('/') }}" method="post">
                @csrf
                <label for="exam_date" class="form-label">Exam Date</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="exam_date" name="exam_date" required ">
                    <button type=" submit" class="btn btn-primary">Button</button>
                </div>
            </form>
        </div>
    </div>
    @if($dashboard ?? null)
    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr class="text-primary">
                    <th scope="col">#</th>
                    <th scope="col">Reg_no#</th>
                    <th scope="col">Mark_one</th>
                    <th scope="col">Mark_two</th>
                    <th scope="col">Mark_three</th>
                    <th scope="col">Exam_date</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach($dashboard as $result)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$result->reg_no}}</td>
                    <td>{{$result->mark_one}}</td>
                    <td>{{$result->mark_two}}</td>
                    <td>{{$result->mark_three}}</td>
                    <td>{{$result->exam_date}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection