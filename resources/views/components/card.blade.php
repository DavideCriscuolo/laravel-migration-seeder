@props(["train"])

<div>
    <div class="card bg-transparent border-0">
        <div class="card-body ">
            <h4 class="card-title text-center">{{ $train->azienda }}</h4>
            <ul class="list-unstyled">
                <li><strong> Stazione di partenza:</strong> {{ $train->stazione_partenza }}</li>
                <li><strong> Orario di Partenza: </strong>{{$train->orario_partenza}}</li>
                <li><strong> Stazione di Arrivo:</strong> {{$train->stazione_arrivo}}</li>
                <li><strong> Orario di Arrivo: </strong>{{$train->orario_arrivo}}</li>
                <li><strong> Codice Treno : </strong>{{ strtoupper($train->codice_treno)}}</li>
                <li><strong> Totale carrozze : </strong>{{$train->tot_carrozze}}</li>
                <li><strong> In orario: </strong>@if ($train->in_orario===1 && $train->cancellato===0 )
                    Si
                    @else
                    No
                    @endif</li>
                <li><strong> Stato: </strong>@if ($train->cancellato===1)
                    Cancellato
                    @else
                    Attivo
                    @endif</li>
            </ul>
        </div>
    </div>

</div>