@extends('layouts.app')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col">
            <h2>Edit Serviciu - {{$servicii->titlu}}</h2>
        </div>
        <div class="col text-end">
            <a href="{{ route('servicii.index') }}" class="btn btn-primary btn-sm ">Vezi toate</a>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>

<form method="post" action="{{ route('servicii.update', $servicii->id)}}" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="hidden" name="hidden_id" value="{{$servicii->id}}"/>
    <div class="container">
        <div class="row mb-3">
        
            <div class="col">
            <label for="titlu"> Nume Serviciu</label>
            </div>
            
            <div class="col">
            <input type="text" name="titlu" id="titlu" class="form-control" required value="{{$servicii->titlu}}">
            </div>


        </div>
        <div class="row mb-3">
        
            <div class="col">
            <label for="descriere" > Descriere</label>
            </div>
            
            <div class="col">
            <textarea type="text" name="descriere" id="descriere" class="ckeditor form-control" required>{{$servicii->descriere}}</textarea>
            </div>

            
        </div>
        
         <div class="row mb-3">
        
            <div class="col">
            <label for="imagine"> Imagine serviciu</label>
            </div>
            
            <div class="col">
            <input type="file" name="imagine"/>
            <img src="{{asset('pic/'.$servicii->imagine) }}" style="width:300px"/>

            <input type="hidden" name="hidden_imagine" value="{{$servicii->imagine}}"/>
            </div>

            
        </div>
    
    </div>
    <div class="text-center">
    <input type="submit" class="btn btn-primary" value="Modifica">
    </div>
</form>
@endsection('content')