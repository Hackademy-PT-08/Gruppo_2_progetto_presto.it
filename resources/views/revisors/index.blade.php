<x-layout>

<h1 class="display-2 py-5">

    {{$article_to_check ? 'Titolo dell\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}

</h1>
   
@if($article_to_check)
<!-- pulsante per accettare l'articolo -->
<p>{{$article_to_check->title}}</p>
<form action="{{route('revisors.accept_article', ['article'=>$article_to_check])}}" method="post">

    @method('PATCH')
    @csrf
    <button type="submit">Accetta</button>
</form>
<!-- pulsante per rifiutare l'articolo -->
<form action="{{route('revisors.reject_article', ['article'=>$article_to_check])}}" method="post">

    @method('PATCH')
    @csrf
    <button type="submit">Rifiuta</button>
</form>
@endif

</x-layout>