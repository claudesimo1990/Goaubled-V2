<div>
    <section class="search-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row fields">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input wire:model.debounce.500ms="from" type="text" class="form-control search-slt"
                                   placeholder="Ville de Depart">
                        </div>
                        <div wire:model="to" class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Ville d'arrivee">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input wire:model="date" type="text" class="form-control search-slt" placeholder="Date"
                                   id="depart">
                        </div>
                    </div>
                </div>
                @if(count($results) > 0)
                    <div class="list-group col-lg-12 mt-1 item-box">
                        @forelse($results as $item)
                            <a href="{{$item->id}}" class="list-group-item list-group-item-action item-list">
                                <div class="row">
                                    <div class="col-md-3"><strong>{{ $item->vilDepart }}</strong></div>
                                    <div class="col-md-3"><strong>{{ $item->vilArrive }}</strong></div>
                                    <div class="col-md-3"><strong>{{ $item->date_depart }}</strong>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <a href="#" class="list-group-item list-group-item-action item-list">No result</a>
                        @endforelse
                    </div>
            </div>
            @endif
        </div>
    </section>
</div>
