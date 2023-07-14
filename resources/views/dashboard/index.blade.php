@extends('layouts.app')
@section('title', 'Dashboard')
@section('Dashboard')

<div class="container">
    <div class="row pt-2 justify-content-end text-center">
        <div class="col-md-6 text-left pt-2">
            <h5 class="text-muted">#Results</h5>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{route('dashboard.create')}}" with="50px" height="50px">
                <i class="bi bi-plus-circle-fill fs-1"></i>
            </a>
        </div>
    </div>
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
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach($results as $result)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$result->reg_no}}</td>
                    <td>{{$result->mark_one}}</td>
                    <td>{{$result->mark_two}}</td>
                    <td>{{$result->mark_three}}</td>
                    <td>{{$result->exam_date}}</td>
                    <td class="text-end">
                        <form action="{{route('dashboard.destroy',$result->id)}}" method="POST"
                            onsubmit="return confirm('Are you sure?');">
                            <a href="{{route('dashboard.show',$result->id)}}"
                                class="text-primary text-decoration-none fw-bold pe-2">
                                <i class="bi bi-eye-fill pe-1"></i>View</a>
                            <a href="{{route('dashboard.edit',$result->id)}}"
                                class="text-primary text-decoration-none fw-bold">
                                <i class="bi bi-pencil-square pe-1"></i>Edit</a>
                            @csrf @method('DELETE')
                            <button type="submit" class="text-danger ms-2 border-0 bg-transparent fw-bold">
                                <i class="bi bi-trash pe-1"></i>Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection