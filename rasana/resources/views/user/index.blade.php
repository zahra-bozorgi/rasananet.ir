@extends('user.panel-main')
@section('title', 'داشبورد')
@section('content')


    <div class="page">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon dashboard_box_1">
                        <div class="body d-flex">
                            <div class="widget_icon">


                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg width="48px"  height="48px"  viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>Iconly/Light/Document</title>
                                    <g id="Iconly/Light/Document" stroke="#fafafa"  stroke-width="1.5"  fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <g id="Document" transform="translate(3.000000, 2.000000)" stroke="#fafafa"  stroke-width="1.5" >
                                            <line x1="12.7162" y1="14.2234" x2="5.4962" y2="14.2234" id="Stroke-1"></line>
                                            <line x1="12.7162" y1="10.0369" x2="5.4962" y2="10.0369" id="Stroke-2"></line>
                                            <line x1="8.2513" y1="5.8601" x2="5.4963" y2="5.8601" id="Stroke-3"></line>
                                            <path d="M12.9086,0.7498 C12.9086,0.7498 5.2316,0.7538 5.2196,0.7538 C2.4596,0.7708 0.7506,2.5868 0.7506,5.3568 L0.7506,14.5528 C0.7506,17.3368 2.4726,19.1598 5.2566,19.1598 C5.2566,19.1598 12.9326,19.1568 12.9456,19.1568 C15.7056,19.1398 17.4156,17.3228 17.4156,14.5528 L17.4156,5.3568 C17.4156,2.5728 15.6926,0.7498 12.9086,0.7498 Z" id="Stroke-4"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <div class="widget_text">
                                <h6>تعداد سفارشات</h6>
                                <h2>0</h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon dashboard_box_2">
                        <div class="body d-flex">
                            <div class="widget_icon">


                                <svg width="48px"  height="48px"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9951 16.6768V14.1398" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 5.3302H18.19C19.88 5.3302 21.24 6.7002 21.24 8.3902V11.8302C18.78 13.2702 15.53 14.1402 11.99 14.1402C8.45 14.1402 5.21 13.2702 2.75 11.8302V8.3802C2.75 6.6902 4.12 5.3302 5.81 5.3302H8.50012" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.4951 5.32579V4.95979C15.4951 3.73979 14.5051 2.74979 13.2851 2.74979H10.7051C9.48512 2.74979 8.49512 3.73979 8.49512 4.95979V5.32579" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.2156 15.483L21.0266 17.992C20.8986 19.683 19.4896 20.99 17.7946 20.99H11.9951" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2.77441 15.483L2.96341 17.992C3.09141 19.683 4.50041 20.99 6.19541 20.99H8.09516" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                            <div class="widget_text">
                                <h6>تعداد کاربران</h6>
                                <h2>0</h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon dashboard_box_3">
                        <div class="body d-flex">
                            <div class="widget_icon">
                                <svg width="48px"  height="48px"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.8496 4.25031V6.67031" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.8496 17.7601V19.7841" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.8496 14.3246V9.5036" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.5 20H18.7021C20.5242 20 22 18.5426 22 16.7431V14.1506C20.7943 14.1506 19.8233 13.1917 19.8233 12.001C19.8233 10.8104 20.7943 9.85039 22 9.85039L21.999 7.25686C21.999 5.45745 20.5221 4 18.7011 4H5.29892C3.47789 4 2.00104 5.45745 2.00104 7.25686L2 9.93485C3.20567 9.93485 4.17668 10.8104 4.17668 12.001C4.17668 13.1917 3.20567 14.1506 2 14.1506V16.7431C2 18.5426 3.4758 20 5.29787 20H6.14894" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="widget_text">
                                <h6>تیکت ها</h6>
                                <h2>39 </h2>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon dashboard_box_4">
                        <div class="body d-flex">
                            <div class="widget_icon">
                                <svg width="48px"  height="48px"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.5 14.3958H17.5906C16.1042 14.3949 14.8993 13.1909 14.8984 11.7045C14.8984 10.218 16.1042 9.01413 17.5906 9.01321H21.6389" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.0485 11.6429H17.7369" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.0694 20.6724H7.74766C4.84951 20.6724 2.5 18.3229 2.5 15.4247V8.24766C2.5 5.34951 4.84951 3 7.74766 3H16.3911C19.2892 3 21.6388 5.34951 21.6388 8.24766V15.4247C21.6388 18.3229 19.2892 20.6724 16.3911 20.6724H16" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2.7002 7.53818H12.4348" stroke="#fefefe"  stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </div>

                            <div class="widget_text">
                                <h6>تراکنش های مالی</h6>
                                <h2>0</h2>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-12">
                    <div class="card">
                        <div class="header">
                            <h2>آخرین مقالات</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12">
                                    <div class="card">
                                        <div class="body">
                                            <img class="img-fluid" src="{{ URL('assets/cloud/images/image-gallery/11.jpg') }}" alt="About the image">
                                            <div class="mt-4">
                                                <h6 class="font-17">رسانا حامی محیط زیست</h6>
                                                <small class="text-muted"> اخرین بروزرسانی: 1 تیر 1402</small>
                                            </div>
{{--                                            <div class="pw_meta">--}}
{{--                                                <span>4,870 USD</span>--}}
{{--                                                <small class="text-muted">Budget / Salary</small>--}}
{{--                                                <small class="text-danger">17 Days Remaining</small>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card">
                                        <div class="body">
                                            <img class="img-fluid" src="{{ URL('assets/cloud/images/image-gallery/10.jpg') }}" alt="About the image">
                                            <div class="mt-4">
                                                <h6 class="font-17">رسانا حامی محیط زیست</h6>
                                                <small class="text-muted"> اخرین بروزرسانی: 1 تیر 1402</small>
                                            </div>
{{--                                            <div class="pw_meta">--}}
{{--                                                <span>921 USD</span>--}}
{{--                                                <small class="text-muted">Budget / Salary</small>--}}
{{--                                                <small class="text-success">Early Dec 2019</small>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card">
                                        <div class="body">
                                            <img class="img-fluid" src="{{ URL('assets/cloud/images/image-gallery/12.jpg') }}" alt="About the image">
                                            <div class="mt-4">
                                                <h6 class="font-17">رسانا حامی محیط زیست</h6>
                                                <small class="text-muted"> اخرین بروزرسانی: 1 تیر 1402</small>
                                            </div>
{{--                                            <div class="pw_meta">--}}
{{--                                                <span>1,870 USD</span>--}}
{{--                                                <small class="text-muted">Budget / Salary</small>--}}
{{--                                                <small class="text-danger">10 Days Remaining</small>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

@endsection
