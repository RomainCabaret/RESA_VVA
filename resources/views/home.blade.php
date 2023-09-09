@extends('layouts.app')


@section('content')
    <section class="sub-header">
        <h1>Découvrez un séjour inoubliable dans notre charmant refuge, niché au milieu de la nature.</h1>
        <div>
            <img src="{{ Storage::url('img/map.png')}}">
        </div>
        <form>
            @csrf
            <select name="" id="">
                <option value="">Tout Type</option>
            </select>
            <select name="" id="">
                <option value="">Alpes</option>
            </select>
            <button>Se</button>
        </form>
    </section>
@endsection
