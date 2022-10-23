@extends('layouts.app')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col">
            <h2>Serviciu - {{$servicii->titlu}}</h2>
        </div>
        <div class="col text-end">
            <a href="{{ route('servicii.index') }}" class="btn btn-primary btn-sm ">Vezi toate</a>
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
                        {{ $servicii->titlu }}
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"><b>Descriere</b></label>
                    <div class="col-sm-10">
                        {{ $servicii->descriere }}
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"><b>Imagine</b></label>
                    <div class="col-sm-10">
                        {{ $servicii->imagine }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <img src="{{ asset('pic/' .  $servicii->imagine) }}" width="100%" class="img-thumbnail mb-3" />
        </div>
    </div>
</div>

@endsection('content')