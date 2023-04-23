  <div class="col-121 pb-4 g-0 border-bottom-black">
      <p class="text-muted fs-5">Trendler</p>
      @foreach($Trendler as $trend)
          <span onclick="redirectTo('{{$trend['url']}}')">
          <div class="card p-0 mt-4 small-card blog-card border-rounded" style="min-height: 140px;">
              <img src="{{$trend['image_url_landscape']}}" class="ww-100 h-100 card-img" style="opacity: 0.5;min-height:140px; ">
              <div class="card-img-overlay">
                  <h3 class="card-title">{{$trend['title']}}</h3>
                  <p class="card-text">{{$trend['tarih']}}</p>
              </div>
          </div>
         </span>
      @endforeach
  </div>
