@extends("./layouts/master")


@section("content")
<div class="container my-5">
    <h1 class="text-center">Tabellone Treni</h1>
    <div class="row row-cols-2">
        @foreach ($trains as $train )
        <div class="col my-2">
            <x-card :train="$train"></x-card>

        </div>

        @endforeach
    </div>
</div>





@endsection