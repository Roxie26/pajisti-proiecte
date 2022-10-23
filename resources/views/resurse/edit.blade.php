@extends('layouts.app')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col">
            <h2>Edit - {{$resurse->titlu}}</h2>
        </div>
        <div class="col text-end">
            <a href="{{ route('resurse.index') }}" class="btn btn-primary btn-sm ">Vezi toate</a>
        </div>
    </div>
</div>
<div class="container">
    <form method="post" action="{{ route('resurse.update', $resurse->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="hidden_id" value="{{$resurse->id}}" />

        <input type="hidden" name="titlu" value="{{$resurse->titlu}}" />
        <input type="hidden" name="locatie" value="{{$resurse->locatie}}" />
        @switch($resurse->locatie)
        @case('Hero')
        <div class="row mb-3">
            <div class="col">
                <label for="data[titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[titlu]" id="data[titlu]" class="form-control" required value="{{$resurse->data['titlu']}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="data[subtitlu]"> Subtitlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[subtitlu]" id="data[subtitlu]" class="form-control" required value="{{$resurse->data['subtitlu']}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="data[buttonText]"> buttonText</label>
            </div>
            <div class="col">
                <input type="text" name="data[buttonText]" id="data[buttonText]" class="form-control" required value="{{$resurse->data['buttonText']}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="data[imagine]"> Imagine</label>
            </div>
            <div class="col">
                <input type="file" name="data[imagine]" />
                @if(isset($resurse->data['imagine']))
                <img src="{{asset('pic/'.$resurse->data['imagine']) }}" style="width:300px" />
                <input type="hidden" name="data[hidden_imagine]" value="{{$resurse->data['imagine']}}" />
                @endif
            </div>
        </div>
        @break
        @case('Despre noi')

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>

        <div class="row mb-3">
            <div class="col">
                <label for="data[continut]"> Continut</label>
            </div>
            <div class="col">
                <textarea type="text" name="data[continut]" id="data[continut]" class="ckeditor form-control" required>{{$resurse->data['continut']}}</textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[imagine]"> Imagine</label>
            </div>
            <div class="col">
                <input type="file" name="data[imagine]" />
                @if(isset($resurse->data['imagine']))
                <img src="{{asset('pic/'.$resurse->data['imagine']) }}" style="width:300px" />
                <input type="hidden" name="data[hidden_imagine]" value="{{$resurse->data['imagine']}}" />
                @endif
            </div>
        </div>

        <hr />
        <hr />

        <h4>Valori</h4>

        <div class="row mb-3">
            <div class="col">
                <label for="data[valori][titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[valori][titlu]" id="data[valori][titlu]" class="form-control" required value="{{$resurse->data['valori']['titlu']}}">
            </div>
        </div>

        <hr />

        <h5>Adaptabilitate</h5>

        <div class="row mb-3">
            <div class="col">
                <label for="data[valori][adaptabilitate][titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[valori][adaptabilitate][titlu]" id="data[valori][adaptabilitate][titlu]" class="form-control" required value="{{$resurse->data['valori']['adaptabilitate']['titlu']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[valori][adaptabilitate][continut]"> Continut</label>
            </div>
            <div class="col">
                <textarea type="text" name="data[valori][adaptabilitate][continut]" id="data[valori][adaptabilitate][continut]" class="ckeditor form-control" required>{{$resurse->data['valori']['adaptabilitate']['continut']}}</textarea>
            </div>
        </div>

        <hr />

        <h5>Cortectitudine</h5>

        <div class="row mb-3">
            <div class="col">
                <label for="data[valori][cortectitudine][titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[valori][cortectitudine][titlu]" id="data[valori][cortectitudine][titlu]" class="form-control" required value="{{$resurse->data['valori']['cortectitudine']['titlu']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[valori][cortectitudine][continut]"> Continut</label>
            </div>
            <div class="col">
                <textarea type="text" name="data[valori][cortectitudine][continut]" id="data[valori][cortectitudine][continut]" class="ckeditor form-control" required>{{$resurse->data['valori']['cortectitudine']['continut']}}</textarea>
            </div>
        </div>

        <hr />

        <h5>Onestitate</h5>

        <div class="row mb-3">
            <div class="col">
                <label for="data[valori][onestitate][titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[valori][onestitate][titlu]" id="data[valori][onestitate][titlu]" class="form-control" required value="{{$resurse->data['valori']['onestitate']['titlu']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[valori][continut]"> Continut</label>
            </div>
            <div class="col">
                <textarea type="text" name="data[valori][onestitate][continut]" id="data[valori][onestitate][continut]" class="ckeditor form-control" required>{{$resurse->data['valori']['onestitate']['continut']}}</textarea>
            </div>
        </div>

        <hr />
        <hr />

        <h4>Misiune</h4>

        <div class="row mb-3">
            <div class="col">
                <label for="data[misiune][titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[misiune][titlu]" id="data[misiune][titlu]" class="form-control" required value="{{$resurse->data['misiune']['titlu']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[misiune][continut]"> Continut</label>
            </div>
            <div class="col">
                <textarea type="text" name="data[misiune][continut]" id="data[misiune][continut]" class="ckeditor form-control" required>{{$resurse->data['misiune']['continut']}}</textarea>
            </div>
        </div>

        <hr />
        <hr />

        <h4>Viziune</h4>

        <div class="row mb-3">
            <div class="col">
                <label for="data[viziune][titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[viziune][titlu]" id="data[viziune][titlu]" class="form-control" required value="{{$resurse->data['viziune']['titlu']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[viziune][continut]"> Continut</label>
            </div>
            <div class="col">
                <textarea type="text" name="data[viziune][continut]" id="data[viziune][continut]" class="ckeditor form-control" required>{{$resurse->data['viziune']['continut']}}</textarea>
            </div>
        </div>

        @break
        @case('Noutati')

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>

        <div class="row mb-3">
            <div class="col">
                <label for="data[imagine]"> Imagine</label>
            </div>
            <div class="col">
                <input type="file" name="data[imagine]" />
                @if(isset($resurse->data['imagine']))
                <img src="{{asset('pic/'.$resurse->data['imagine']) }}" style="width:300px" />
                <input type="hidden" name="data[hidden_imagine]" value="{{$resurse->data['imagine']}}" />
                @endif
            </div>
        </div>

        <hr />
        <hr />

        <h4>Tehnologii</h4>

        <div class="row mb-3">
            <div class="col">
                <label for="data[tehnologii][titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[tehnologii][titlu]" id="data[tehnologii][titlu]" class="form-control" required value="{{$resurse->data['tehnologii']['titlu']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[tehnologii][continut]"> Continut</label>
            </div>
            <div class="col">
                <textarea type="text" name="data[tehnologii][continut]" id="data[tehnologii][continut]" class="ckeditor form-control" required>{{$resurse->data['tehnologii']['continut']}}</textarea>
            </div>
        </div>

        <hr />
        <hr />

        <h4>Legislatie</h4>

        <div class="row mb-3">
            <div class="col">
                <label for="data[legislatie][titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[legislatie][titlu]" id="data[legislatie][titlu]" class="form-control" required value="{{$resurse->data['legislatie']['titlu']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[legislatie][continut]"> Continut</label>
            </div>
            <div class="col">
                <textarea type="text" name="data[legislatie][continut]" id="data[legislatie][continut]" class="ckeditor form-control" required>{{$resurse->data['legislatie']['continut']}}</textarea>
            </div>
        </div>

        @break
        @case('Contact')
        <div class="row mb-3">
            <div class="col">
                <label for="data[titlu]"> Titlu</label>
            </div>
            <div class="col">
                <input type="text" name="data[titlu]" id="data[titlu]" class="form-control" required value="{{$resurse->data['titlu']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[adresa]"> Adresa</label>
            </div>
            <div class="col">
                <input type="text" name="data[adresa]" id="data[adresa]" class="form-control" required value="{{$resurse->data['adresa']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[telefon]"> Telefon</label>
            </div>
            <div class="col">
                <input type="text" name="data[telefon]" id="data[telefon]" class="form-control" required value="{{$resurse->data['telefon']}}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="data[email]"> E-mail</label>
            </div>
            <div class="col">
                <input type="text" name="data[email]" id="data[email]" class="form-control" required value="{{$resurse->data['email']}}">
            </div>
        </div>
        @break
        @default

        <h2>Resursa negasita</h2>

        @endswitch

        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Modifica">
        </div>
    </form>
</div>
@endsection('content')