<div>
    <template>
        <section id="about" class="pb-5">
            <div class="container py-4">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="quigo-title">{{$title}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mt-3 cathergorie">
                        <h3 class="my-4 reveal-2">Affiner votre recherche</h3>
                        <div class="list-group">
                            <a href="" wire:click.prevent="sortNews('travel')" class="list-group-item">Voyages</a>
                            <a href="" wire:click.prevent="sortNews('pack')" class="list-group-item">Colis</a>
                            <a href="" wire:click.prevent="showAllNews('liste d annonces')" class="list-group-item">toutes les annonces</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @if($allnews)
                            @foreach($allnews as $news)
                                @if($news['categorie_id'] == '2')
                                    <x-cardtravel :news="$news"></x-cardtravel>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </template>
</div>
