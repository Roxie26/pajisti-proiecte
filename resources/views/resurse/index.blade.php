@extends('layouts.app')

@section('content')

<div class="container mb-4">

    <div class="row">
        <div class="col">
            <h2>Resurse</h2>
        </div>
    </div>

    @if($message= Session::get("success"))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @endif
</div>

<div class="container">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nume</th>
                <th class="text-end">Optiuni</th>
            </tr>
        </thead>
        <tbody>
            @if(count($data)>0)
            @foreach ($data as $row)
            <tr>
                <td>
                    {{$row->titlu}}
                </td>
                <td class="text-end">
                    <a href="{{ route('resurse.show',$row->id)}}" class="btn  btn-sm">Vezi detalii</a>
                    <a href="{{ route('resurse.edit',$row->id)}}" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">
                    Nu exista resurse
                </td>
            </tr>
            @endif
        </tbody>
    </table>
    {!! $data->links() !!}


</div>

@endsection('content')