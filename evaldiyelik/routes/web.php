<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home',[
        "title" =>"Evladiyelik Kitaplar ",
        "sayfa_sayısı"=>10,
        "total_kitaplar"=>11,
        "sayfa_numara"=>1,
        "Kitaplar"=>[
            [

            "url"=>"/",
            "is_trending"=>true,
            "yazar"=>"Hatice Sezgin",
            "yazar_image_url"=>"WhatsApp-Image-2023-04-07-at-12..png",
            "image_url_portait"=>"resized_WhatsApp-Image-2023-04-07-at-07.24.20.png",
            "image_url_landscape"=>"/",
            "title"=>"Otostopçunun Galaksi Rehberi",
            "tarih"=>"13 Mart 2023",
            "açıklama"=>"Seri, bir perşembe sabahı Arthur Dent adındaki sıradan bir İngiliz vatandaşının uzayda kestirme bir yol yapılması için dünyanın patlatılmasından biraz önce Ford Prefect adındaki bir uzaylıyla beraber bir Vogon inşaat gemisine otostop çekerek dünyadan kaçmayı başarmasıyla başlar.",
            "etiketler"=>"Bilim Kurgu,Roman,Mizah,Kurgu Komedi,Bilim Kurgu Komedisi"
        ],
        [
            "url"=>"/",
            "is_trending"=>true,
            "yazar"=>"Hatice Sezgin",
            "yazar_image_url"=>"WhatsApp-Image-2023-04-07-at-12..png",
            "image_url_portait"=>"0000000422258-1-_1_.png",
            "image_url_landscape"=>"/",
            "title"=>"Martin Eden",
            "tarih"=>"13 Mart 2023",
            "açıklama"=>"Ya da bu idealin yarattığı muazzam hayal kırıklığı… London, romanı bir sanatçının çıraklıktan olgunluğa geçiş sürecini işleyen Künstlerroman geleneğinde yazmıştır. Martin'in aşkı uğruna eğitimsiz genç bir işçiden başarılı ve rafine bir yazara dönüşüm mücadelesini anlatır.",
            "etiketler"=> "Kurgu,Roman,künstlerroman"
        ],
        [
            "url"=>"/",
            "is_trending"=>true,
            "yazar"=>"Hatice Sezgin",
            "yazar_image_url"=>"WhatsApp-Image-2023-04-07-at-12..png",
            "image_url_portait"=>"wi_800.png",
            "image_url_landscape"=>"/",
            "title"=>"Mülksüzler",
            "tarih"=>"13 Mart 2023",
            "açıklama"=>"Görünürde ütopik bir kurgusu olan Mülksüzler, salt iyiye olan gerçekçi yaklaşımı bakımından yazarın ifadesiyle “ikircikli bir ütopya”yı anlatıyor. Kitabın kapitalist ve anarşist sistemlere sahip iki farklı gezegende geçen olay örgüsü, yazarın siyasi ve sistematik eleştirilerini başarılı bir şekilde ortaya koyuyor. Bu kitap, bir yandan yaşadığınız dünyadan uzaklaşmanızı sağlarken, diğer yandan dünyanın en büyük sorunlarına kapsamlı bir pencereden bakabilmeniz için eşsiz bir fırsat sunuyor.",

            "etiketler"=>"Bilim Kurgu,Roman,Ütopik Kurgu"
        ]

        ],

        "Trendler"=>[
        [

            "url"=>"/",
            "is_trending"=>true,
            "yazar"=>"Hatice Sezgin",
            "yazar_image_url"=>"WhatsApp-Image-2023-04-07-at-12..png",
            "image_url_portait"=>"/",
            "image_url_landscape"=>"74-_1_.png",
            "title"=>"Rus Edebiyatından Herkesin Okuması Gereken 10 Kitap",
            "tarih"=>"13 Mart 2023",
            "açıklama"=>"Seri, bir perşembe sabahı Arthur Dent adındaki sıradan bir İngiliz vatandaşının uzayda kestirme bir yol yapılması için dünyanın patlatılmasından biraz önce Ford Prefect adındaki bir uzaylıyla beraber bir Vogon inşaat gemisine otostop çekerek dünyadan kaçmayı başarmasıyla başlar.",
            "etiketler"=>"Bilim Kurgu,Roman,Mizah,Kurgu Komedi,Bilim Kurgu Komedisi"
        ],
        [
            "url"=>"/",
            "is_trending"=>true,
            "yazar"=>"Hatice Sezgin",
            "yazar_image_url"=>"WhatsApp-Image-2023-04-07-at-12..png",
            "image_url_portait"=>"0000000422258-1-_1_.png",
            "image_url_landscape"=>"psyholoxy-_1__1.png",
            "title"=>"En İyi 10 Psikoloji Kitabı",
            "tarih"=>"13 Mart 2023",
            "açıklama"=>"Ya da bu idealin yarattığı muazzam hayal kırıklığı… London, romanı bir sanatçının çıraklıktan olgunluğa geçiş sürecini işleyen Künstlerroman geleneğinde yazmıştır. Martin'in aşkı uğruna eğitimsiz genç bir işçiden başarılı ve rafine bir yazara dönüşüm mücadelesini anlatır.",
            "etiketler"=> "Kurgu,Roman,künstlerroman"
        ],
        [
            "url"=>"/",
            "is_trending"=>true,
            "yazar"=>"Hatice Sezgin",
            "yazar_image_url"=>"WhatsApp-Image-2023-04-07-at-12..png",
            "image_url_portait"=>"10447704883250.png",
            "image_url_landscape"=>"6196541b45d2a07ffcb0f267-_1_.png",
            "title"=>"Dünya edebiyatının en iyi 10 korku-gerilim kitabı",
            "tarih"=>"13 Mart 2023",
            "açıklama"=>"Görünürde ütopik bir kurgusu olan Mülksüzler, salt iyiye olan gerçekçi yaklaşımı bakımından yazarın ifadesiyle “ikircikli bir ütopya”yı anlatıyor. Kitabın kapitalist ve anarşist sistemlere sahip iki farklı gezegende geçen olay örgüsü, yazarın siyasi ve sistematik eleştirilerini başarılı bir şekilde ortaya koyuyor. Bu kitap, bir yandan yaşadığınız dünyadan uzaklaşmanızı sağlarken, diğer yandan dünyanın en büyük sorunlarına kapsamlı bir pencereden bakabilmeniz için eşsiz bir fırsat sunuyor.",

            "etiketler"=>"Bilim Kurgu,Roman,Ütopik Kurgu"
        ]
          ],

        "Son"=>[
            [

                "url"=>"/",
                "is_trending"=>true,
                "yazar"=>"Hatice Sezgin",
                "yazar_image_url"=>"WhatsApp-Image-2023-04-07-at-12..png",
                "image_url_portait"=>"resized_WhatsApp-Image-2023-04-07-at-07.24.20.png",
                "image_url_landscape"=>"/",
                "title"=>"Otostopçunun Galaksi Rehberi",
                "tarih"=>"13 Mart 2023",
                "açıklama"=>"Seri, bir perşembe sabahı Arthur Dent adındaki sıradan bir İngiliz vatandaşının uzayda kestirme bir yol yapılması için dünyanın patlatılmasından biraz önce Ford Prefect adındaki bir uzaylıyla beraber bir Vogon inşaat gemisine otostop çekerek dünyadan kaçmayı başarmasıyla başlar.",
                "etiketler"=>"Bilim Kurgu,Roman,Mizah,Kurgu Komedi,Bilim Kurgu Komedisi"
            ],
            [
                "url"=>"/",
                "is_trending"=>true,
                "yazar"=>"Hatice Sezgin",
                "yazar_image_url"=>"WhatsApp-Image-2023-04-07-at-12..png",
                "image_url_portait"=>"0000000422258-1-_1_.png",
                "image_url_landscape"=>"/",
                "title"=>"Martin Eden",
                "tarih"=>"13 Mart 2023",
                "açıklama"=>"Ya da bu idealin yarattığı muazzam hayal kırıklığı… London, romanı bir sanatçının çıraklıktan olgunluğa geçiş sürecini işleyen Künstlerroman geleneğinde yazmıştır. Martin'in aşkı uğruna eğitimsiz genç bir işçiden başarılı ve rafine bir yazara dönüşüm mücadelesini anlatır.",
                "etiketler"=> "Kurgu,Roman,künstlerroman"
            ],
            [
                "url"=>"/",
                "is_trending"=>true,
                "yazar"=>"Hatice Sezgin",
                "yazar_image_url"=>"WhatsApp-Image-2023-04-07-at-12..png",
                "image_url_portait"=>"10447704883250.png",
                "image_url_landscape"=>"/",
                "title"=>"Mülksüzler",
                "tarih"=>"13 Mart 2023",
                "açıklama"=>"Görünürde ütopik bir kurgusu olan Mülksüzler, salt iyiye olan gerçekçi yaklaşımı bakımından yazarın ifadesiyle “ikircikli bir ütopya”yı anlatıyor. Kitabın kapitalist ve anarşist sistemlere sahip iki farklı gezegende geçen olay örgüsü, yazarın siyasi ve sistematik eleştirilerini başarılı bir şekilde ortaya koyuyor. Bu kitap, bir yandan yaşadığınız dünyadan uzaklaşmanızı sağlarken, diğer yandan dünyanın en büyük sorunlarına kapsamlı bir pencereden bakabilmeniz için eşsiz bir fırsat sunuyor.",

                "etiketler"=>"Bilim Kurgu,Roman,Ütopik Kurgu"
            ]
        ],
        "Etiketler"=>[
            [
                "url"=>"/",
                "name"=>"Edebiyat"
        ],
            [

            "url"=>"/",
            "name"=>"Roman"
            ],
        [

        "url"=>"/",
        "name"=>"Kitap"
        ]


   ]

    ]);
});


