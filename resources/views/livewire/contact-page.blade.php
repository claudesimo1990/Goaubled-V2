<div>
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <h2 class="quigo-title">Nom : {{$user->name}}</h2>
                    <h3 class="quigo-subtitle">Email: {{$user->email}}</h3>
                </div>
                <div class="col-lg-6 text-center">
                    <h3 class="quigo-subtitle">naissance: {{$profile->birthDay}}</h3>
                    <h4 class="quigo-subtitle">ville: {{$profile->ville}}</h4>
                    <h4 class="quigo-subtitle">pays: {{$profile->pays}}</h4>
                    <h4 class="quigo-subtitle">rue: {{$profile->rue}}</h4>
                    <h4 class="quigo-subtitle">phone: {{$profile->phone}}</h4>
                    <h4 class="quigo-subtitle">verifier: {{$profile->isVerified ? 'oui' : 'non'}}</h4>
                    <button wire:click="changepage">hallo</button>
                </div>
            </div>
        </div>
    </section>
</div>
