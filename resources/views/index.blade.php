@extends('layouts.app')

@section('content')

<div class="container mb-4">

    <div class="row">
        <div class="col">
            <h2>SERVICII</h2>
        </div>
        <div class="col text-end">
            <a href="{{ route('servicii.create') }}" class="btn btn-success btn-sm ">Adauga serviciu</a>
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
                <th>Imagine</th>
                <th>Nume serviciu</th>
                <th>Descriere</th>
                <th>Optiuni</th>
            </tr>
        </thead>
        <tbody>
            @if(count($data)>0)
            @foreach ($data as $row)
            <tr>
                <td>
                    <img src="{{asset('pic/'.$row->imagine)}}" style="width:100px" />
                </td>
                <td>
                    {{$row->titlu}}
                </td>
                <td>
                    {{$row->descriere}}
                </td>
                <td>
                    <form method="post" action="{{route('servicii.destroy', $row->id)}}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('servicii.show',$row->id)}}" class="btn  btn-sm">Vezi detalii</a>
                        <a href="{{ route('servicii.edit',$row->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Esti sigur ca vrei sa stergi <?php echo $row->titlu; ?>?')" value="Sterge" />
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">
                    Nu exista servicii
                </td>
            </tr>
            @endif
        </tbody>
    </table>
    {!! $data->links() !!}


</div>

@endsection('content')