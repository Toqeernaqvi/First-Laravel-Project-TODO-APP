 
 @include('navs.navbar')

 @extends('layouts.master');
 @if(session()->has('success'))
 <div  style="width=50%"  class="alert alert-success" role="alert">
     Todo inserted successfully
   </div>
 @endif
 @section('content')
     <div style="width:50%" class="container my-4">
     
        <form action="{{url('/done')}}" method="post">
            {{ csrf_field() }}
             
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Add a new Todo" aria-label="Recipient's username" aria-describedby="button-addon2" name="todobody">
                <div class="input-group-append">
                  <button class="btn btn-info" type="submit " id="button-addon2">Add</button>
                </div>
              </div>

        </form>

<table class="table">
    <thead>
        <th>Todo</th>
        <th>Option</th>
    </thead>

    <tbody>
        @foreach ($data as $item)
<tr>

    <td>{{$item->body}}</td>
    <td>
        <form action="{{url('/del/'.$item->id_todo)}}" method="post">
            <a href="{{url('/display/'.$item->id_todo)}}" class="btn btn-warning">Edit</a>

            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit"class="btn btn-danger">Delete</button>
            

        </form>
</td>

</tr>
            
        @endforeach
    </tbody>


</table>
@endsection