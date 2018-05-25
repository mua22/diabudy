<title>Diabudy: {!! Meta::get('title') !!}</title>

{!! Meta::tag('robots') !!}

{!! Meta::tag('site_name', 'Diabudy') !!}
{!! Meta::tag('url', Request::url()); !!}
{!! Meta::tag('locale', 'en_EN') !!}


{!! Meta::tag('description') !!}

{{-- Print custom section images and a default image after that --}}
{!! Meta::tag('image', asset('images/diabudy/favicon.png')) !!}
