@extends('site.layouts.master')

@section('title')
    {{ $service->name }} - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$service->image->path ?? '' }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- Main Wrapper-->
    <main class="wrapper">
        <!-- Page Header -->
        <div class="wptb-page-heading">
            <div class="wptb-item--inner"
                style="background-image: url('{{ $service->image ? $service->image->path : '/site/images/page-header-bg-2.jpg' }}');">
                <div class="wptb-item-layer wptb-item-layer-one">
                    <img src="/site/images/circle.png" alt="img">
                </div>
                <h2 class="wptb-item--title ">{{ $service->name }}</h2>
            </div>
        </div>
        <!-- Details Content -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <!-- Service Navigation List -->
                    <div class="col-lg-4 col-md-4 pe-md-5">
                        <div class="sidebar">
                            <div class="sidenav">
                                <ul class="side_menu">
                                    @foreach ($categoryServices as $categoryService)
                                        <li class="menu-item">
                                            <a href="{{ route('front.services', $categoryService->slug) }}"
                                                class="d-flex align-items-center justify-content-between">
                                                <span>
                                                    {{ $categoryService->name }}
                                                </span>
                                                <i class="bi bi-chevron-right"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 mb-5 mb-md-0 ps-md-0">
                        <div class="blog-details-inner">
                            <div class="post-content">
                                <div class="fulltext">
                                    {!! $service->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Details Content -->
        <!-- Contact -->
        <section class="wptb-contact-form style1" ng-controller="AboutPage" ng-cloak>
            <div class="wptb-item-layer both-version">
                <img src="/site/images/texture-2.png" alt="img" loading="lazy">
                {{-- <img src="/site/images/texture-2-light.png" alt=""> --}}
            </div>
            <div class="container">
                <div class="wptb-form--wrapper">
                    <div class="wptb-heading">
                        <div class="wptb-item--inner text-center">
                            <h1 class="wptb-item--title"> <span>Hãy liên hệ với chúng tôi</span></h1>
                            <div class="wptb-item--description"> Chúng tôi sẽ liên hệ với bạn để được hỗ trợ</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <form class="wptb-form" id="form-contact">
                                <div class="wptb-form--inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Họ tên*" required>

                                                <span class="invalid-feedback d-block" role="alert" ng-if="errors.name">
                                                    <strong><% errors.name[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email*" required>

                                                <span class="invalid-feedback d-block" role="alert" ng-if="errors.email">
                                                    <strong><% errors.email[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Số điện thoại">

                                                <span class="invalid-feedback d-block" role="alert" ng-if="errors.phone">
                                                    <strong><% errors.phone[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 mb-4">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Tin nhắn"></textarea>

                                                <span class="invalid-feedback d-block" role="alert"
                                                    ng-if="errors.message">
                                                    <strong><% errors.message[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="wptb-item--button text-center">
                                                <button class="btn white-opacity creative" type="submit"
                                                    ng-click="submitContact()">
                                                    <span class="btn-wrap">
                                                        <span class="text-first">Gửi liên hệ</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
<script>
    app.controller('AboutPage', function($rootScope, $scope, $sce, $interval) {
        $scope.errors = {};
        $scope.sendSuccess = false;

        $scope.submitContact = function() {
            var url = "{{ route('front.submitContact') }}";
            var data = jQuery('#form-contact').serialize();
            $scope.loading = true;
            jQuery.ajax({
                type: 'POST',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        jQuery('#form-contact')[0].reset();
                        $scope.errors = {};
                        $scope.sendSuccess = true;
                        $scope.$apply();
                    } else {
                        $scope.errors = response.errors;
                        toastr.warning(response.message);
                    }
                },
                error: function() {
                    toastr.error('Đã có lỗi xảy ra');
                },
                complete: function() {
                    $scope.loading = false;
                    $scope.$apply();
                }
            });
        }
    })
</script>
@endpush
