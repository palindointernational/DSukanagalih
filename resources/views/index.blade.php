@include('frontend.partials.header')
@include('frontend.partials.navbar')
@include('frontend.partials.hero')
@include('frontend.components.card')

@include('frontend.components.donation', ['donations' => $donations])

@include('frontend.components.gallery')
@include('frontend.components.news')
@include('frontend.partials.footer')
