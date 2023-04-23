<div class="col-12 mt-4">
    <p class="text-muted fs-5">Etiketler</p>
    @foreach($Etiketler as $etiket)
        <span onclick="redirectTo('{{ $etiket['url']}}')">
                                  <a href="{{$etiket['url']}}">
                                      <span class="badge bg-secondary">{{$etiket['name']}}</span>
                                  </a>
                                  </span>
    @endforeach
</div>

