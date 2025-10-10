@extends('site.layouts.master')
@section('title')
    Liên hệ - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ @$config->image->path ?? '' }}
@endsection

@section('css')
    <style>
        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 100%;
            color: #fe6402;
        }
    </style>

    <style>
        .send-success-message {
            display: flex;
            align-items: center;
            background-color: #e6ffed;
            /* nền xanh nhạt */
            border: 1px solid #71d58b;
            /* viền xanh tươi */
            color: #2d6a4f;
            /* chữ xanh đậm */
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 1rem;
            gap: 12px;
            /* khoảng cách icon - text */
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 10px;
        }

        .send-success-message i {
            font-size: 1.4rem;
        }

        .send-success-message p {
            margin: 0;
            line-height: 1.4;
        }
    </style>
@endsection

@section('content')
    <!-- Main Wrapper-->
    <main class="wrapper" >
        <!-- Contact -->
        <section class="wptb-contact-form bg-image-5" style="background-image: url('/site/images/bg-9.jpg'); padding-top: 150px;">
            <div class="container">
                <div class="wptb-form--wrapper no-bg">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="wptb-heading">
                                <div class="wptb-item--inner">
                                    <h1 class="wptb-item--title"> <span>Thông tin liên hệ</span></h1>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="wptb-office">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--subtitle">
                                            Hotline:
                                        </div>
                                        <h5 class="wptb-item--title"><a href="tel:{{ str_replace(' ', '', $config->hotline) }}">{{ $config->hotline }}</a></h5>
                                    </div>
                                </div>
                                <div class="wptb-office">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--subtitle">
                                            Email:
                                        </div>
                                        <h5 class="wptb-item--title"><a
                                                href="mailto:{{ $config->email }}">{{ $config->email }}</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="wptb-office">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--subtitle">
                                            Địa chỉ:
                                        </div>
                                        <h5 class="wptb-item--title"><a
                                                href="#">{{ $config->address_company }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            {!! $config->location !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

                                                <span class="invalid-feedback d-block" role="alert" ng-if="errors.message">
                                                    <strong><% errors.message[0] %></strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="wptb-item--button text-center">
                                                <button class="btn white-opacity creative" type="submit" ng-click="submitContact()">
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
