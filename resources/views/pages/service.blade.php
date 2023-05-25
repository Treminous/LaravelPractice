@extends('layouts.app')
@section('content')          
<h1>{{$title}}</h1>
 <p style="color:red;"> This is a service Page</p>
 @if(count($serves)>0 )
    <ul>
        @foreach($serves as $serve)
                      
             <li>{{$serve}}</li>
             
    
         @endforeach
     </ul>
    
 @endif
    

@endSection
    

   
