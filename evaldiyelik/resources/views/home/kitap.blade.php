<div class="col-lg-8 col-12" >
    @foreach ($Kitaplar as $blog)
        <span onclick="redirectTo('{{ $blog['url']}}')">
                      <div class="row mt-4 mb-4 blog-card border-rounded ">
                          <div class="col-lg-4 col-12 p-0 m-0">
                              <img class="rounded w-100 h-100 "src="{{$blog['image_url_portait']}}">
                          </div>
                          <div class="col-lg-8 col-12 p-lg-4">
                              <div class="row h-100 pt-4 align-items-center">
                                 <div class="col-12 mx-auto">
                                     <small class="text-muted fs-8">{{$blog['tarih']}}</small>
                                     <br>
                                     @foreach(explode(",",$blog['etiketler']) as $tag)
                                         <span class="text-primary fw-bolder gs-6 pe-1">{{$tag}}</span>
                                         @if($loop->iteration < count(explode(",",$blog['etiketler'])))
                                             <span class="text-primary fw-bolder gs-6 pe-1">&#x2023</span>
                                         @endif
                                     @endforeach
                                     <h2 class="fw-lighter fs-2">{{$blog['title']}}</h2>
                                     <p class="text-muted">{{$blog['açıklama']}}</p>
                                     <p>
                                         <img class="rounded-circle" alt="yazar image" height="40" width="35" src="{{$blog['yazar_image_url']}}">
                                         <span class="ps-1">{{$blog['yazar']}}</span>
                                     </p>
                                 </div>
                              </div>
                          </div>
                      </div>
                  </span>
    @endforeach
</div>
