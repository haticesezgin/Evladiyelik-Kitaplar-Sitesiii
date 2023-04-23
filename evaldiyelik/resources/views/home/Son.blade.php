<div class="col-12 pt-3 pb-4 g-0 border-bottom-black">
    <p class="text-muted fs-5">Son Yazılanlar</p>
    @foreach($Son as $son)
        <span onclick="redirectTo('{{ $son['url']}}')">
                                      <div class="card p-0 mt-4 small-card blog-card border-rounded" style="min-height:140px;">
                                          <img src="{{ $son['image_url_landscape'] }}" class="w-100 h-100 card-img" style="opacity:0.5;min-height: 140px">
                                          <div class="card-img-overlay">
                                              <h5 class="card-title">{{$son['title']}}</h5>
                                              <p class="card-text">{{$son['tarih']}}</p>
                                          </div>
                                      </div>
                                      </span>
    @endforeach
</div>
</div>

