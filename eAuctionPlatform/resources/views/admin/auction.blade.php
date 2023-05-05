@extends('layout.admin-layout')

@section('body-contents')
    
<div class="flex">
    
    <div class="w-full h-full p-4 m-8 overflow-y-auto">
        <div>
        <b>Hi, <i>{{ Auth::user()->name }}</i> </b> 
        </div>





    </div>
</div>

<script>
    

</script>



@endsection