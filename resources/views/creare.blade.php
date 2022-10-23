@extends('layouts.app')

@section('content')

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>

<div class="container mb-3">
    <div class="row">
        <div class="col">
            <h2>SERVICII</h2>
        </div>
        <div class="col text-end">
            <a href="{{ route('servicii.create') }}" class="btn btn-success btn-sm ">Adauga serviciu</a>
        </div>
    </div>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors ->all() as $error)
        {{$error}}
        @endforeach
    </div>
    @endif
</div>

<div class="container">
    <form method="post" action="{{route("servicii.store")}}" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">

            <div class="col">
                <label for="titlu">Titlu</label>
            </div>

            <div class="col">
                <input type="text" class="form-control" name="titlu" id="titlu" required />
            </div>
        </div>
        <div class=" row mb-3">

            <div class="col">
                <label for="descriere"> Descriere</label>
            </div>

            <div class="col">
                <textarea type="text" class="ckeditor form-control" name="descriere" id="descriere" required></textarea>
            </div>


        </div>
        <div class="row mb-3">

            <div class="col">
                <label for="imagine"> Imagine</label>
            </div>

            <div class="col">
                <input type="file" name="imagine" />

            </div>


        </div>

</div>
<div class="text-center">
    <input type="submit" class="btn btn-primary" value="Add">
</div>
</form>
</div>
@endsection('content')