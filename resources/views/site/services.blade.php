@extends('site.layouts.master')

@section('title')
    {{ $categoryService->name }} - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$categoryService->image->path ?? '' }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- Main Wrapper-->
    <main class="wrapper">
        <!-- Page Header -->
        <div class="wptb-page-heading">
            <div class="wptb-item--inner" style="background-image: url('{{ $categoryService->image ? $categoryService->image->path : '/site/images/page-header-bg-6.jpg' }}');">
                <div class="wptb-item-layer wptb-item-layer-one">
                    <img src="/site/images/circle.png" alt="img">
                </div>
                <h2 class="wptb-item--title ">{{ $categoryService->name }}</h2>
            </div>
        </div>
        <!-- Blog Grid -->
        <section class="wptb-blog-grid-one">
            <div class="container">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-sm-6">
                            <div class="wptb-blog-grid1 active highlight wow fadeInLeft">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <a href="{{ route('front.getServiceDetail', $service->slug) }}" class="wptb-item-link"><img
                                                src="{{ $service->image ? $service->image->path : 'https://placehold.co/600x400' }}"
                                                alt="img" loading="lazy"></a>
                                    </div>
                                    <div class="wptb-item--holder">
                                        <div class="wptb-item--date">{{ $service->created_at->format('d M Y') }}</div>
                                        <h5 class="wptb-item--title "><a href="{{ route('front.getServiceDetail', $service->slug) }}"
                                                class="limit-2-line">{{ $service->name }}</a></h5>
                                        <div class="wptb-item--meta">
                                            <div class="wptb-item--author limit-3-line">{!! $service->description !!}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if ($services->count() > 0)
                    <div class="wptb-pagination-wrap text-center">
                        {{ $services->links() }}
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection

@push('scripts')
@endpush
