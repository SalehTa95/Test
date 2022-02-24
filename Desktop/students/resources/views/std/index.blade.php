@extends('std.layout')
@section('content')

<div class="jumbotron container">
    <p>HOME</p>
    <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" role="button"> Create</a>


</div>

<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-primary" role="alert">
        {{$message}}
    </div>
    @endif

  <div class='container'>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Student name</th>
            <th scope="col">Student phone</th>
            <th scope="col">Student email</th>
            <th scope="col">Student gender</th>
            <th scope="col">Student birth_date</th>
            <th scope="col">Student post_code</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=0
            @endphp
            @foreach ($stds as $item)
            <tr>
                <th scope="row">{{++ $i}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->birth_date}}</td>
                <td>{{$item->post_code}}</td>
                <td>
                    <div class="row">



                        {{--<div class="col-sm">
                            <form action="{{route('products.destroy', $item->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </div>--}}
                    </div>




                </td>
              </tr>
            @endforeach



        </tbody>
      </table>
        {!!$stds->links()!!}
  </div>
@endsection
