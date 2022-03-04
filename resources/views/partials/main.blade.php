<main>
    <div class="container_main">
        @foreach ($appoggio as $key => $element)
            <div class="box">
                <div class="title_film">
                    <div class="title">
                        Titolo:
                    </div>
                    {{$element->title}}
                </div>
                <div class="original_title">
                    <div class="title">
                        Titolo originale:
                    </div>
                    {{$element->original_title}}
                </div>
                <div class="nation">
                    <div class="title">
                        Produzione:
                    </div>
                    {{$element->nationality}}
                </div>
                <div class="date">
                    <div class="title">
                        Uscita:
                    </div>
                    {{$element->date}}
                </div>
                <div class="vote">
                    <span class="title">
                        Vote:
                    </span>
                    {{$element->vote}}
                </div>
            </div>
        @endforeach
    </div>
</main>