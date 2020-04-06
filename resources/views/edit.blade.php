@extends('layouts.master')
@section('content')
@include('navs.navbar')
@foreach ($datafor as $item)
 
 
    <div style="width:40%" class="container my-4">
      <div class="input-group mb-3">
          <form action="{{url('/up/'.$item->id_todo)}}"method="post">
            {{ csrf_field() }}
            <input type="hidden" name = "_method" value="PUT">
      <input value="{{$item->body}}"  type="text"  class="form-control" placeholder="Add a todo"aria-label="Recipient's username" aria-describedby="button-addon2" name="uptodo">
               <div class="input-group-append">
                 <button class="bbtn btn-info" type="submit " id="button-addon2">Update</button>
               </div>
             </div>

            </form>
    </div>
    
@endforeach
@endsection()