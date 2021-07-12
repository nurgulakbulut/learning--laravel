
<h1> Article Listesi</h1>
    <ul>
   @foreach ($articles as $article )
      <li>
      <a href="/articles/{{ $article->id }}"></a>
          {{$article->title}}
       </li>
   @endforeach
   </ul>
