@extends('layouts.app')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col">
            <h2>Mesaje - {{$mesaje->titlu}}</h2>
        </div>
        <div class="col text-end">
            <a href="{{ route('mesaje.index') }}" class="btn btn-primary btn-sm ">Vezi toate</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"><b>Titlu</b></label>
                    <div class="col-sm-10">
                        {{ $mesaje->titlu }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"><b>Nume client</b></label>
                    <div class="col-sm-10">
                        {{ $mesaje->nume }}
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"><b>Email</b></label>
                    <div class="col-sm-10">
                        {{ $mesaje->email }}
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"><b>Data</b></label>
                    <div class="col-sm-10">
                    {{ $mesaje->created_at }}
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"><b>Mesaj</b></label>
                    <div class="col-sm-10">
                        {{ $mesaje->mesaj }}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection('content')