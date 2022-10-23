@extends('layouts.app')

@section('content')

<div class="container mb-4">

    <div class="row">
        <div class="col">
            <h2>Mesaje</h2>
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
                <th>@sortablelink('titlu', 'Titlu')</th>
                <th>@sortablelink('created_at', 'Creat la')</th>
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
                <td>
                    {{$row->created_at}}
                </td>
                <td class="text-end">
                <form method="post" action="{{route('mesaje.destroy', $row->id)}}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('mesaje.show',$row->id)}}" class="btn  btn-sm">Vezi detalii</a>
                        <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Esti sigur ca vrei sa stergi <?php echo $row->titlu; ?>?')" value="Sterge" />
                    </form>
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
    {!! $data->appends(\Request::except('page'))->render() !!}

    {!! $data->links() !!}
    


</div>

@endsection('content')