        <div class="card" style="width: 18rem;">
            <img src="{{$annoucement->images->isNotEmpty() ? $announcement->images->first()->getUrl(700, 1000): 'https://picsum.photos/200'}}" class="card-img-top" alt="Immagine dell'articolo {{ $announcement->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $announcement->title }}</h5>
                <p class="card-text">Prezzo: {{ $announcement->price }} €</p>
                <p class="card-text">Categoria: {{ $announcement->category->name }}</p>
                <a href="#" class="btn btn-primary">Dettaglio Annuncio</a>
            </div>
        </div>
