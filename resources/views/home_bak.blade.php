@extends('layouts.app')

    @section('content')
        
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
            <div class="br-pagetitle">
                <i class="icon ion-ios-home-outline"></i>
                <div>
                <h4>Dashboard</h4>
                <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
            </div>            
        </div><!-- d-flex -->

        <div class="br-pagebody">
            <div class="row row-sm mg-t-20">
                <div class="col-sm-6 col-lg-4">
                    <div class="bg-white rounded shadow-base overflow-hidden">
                    <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                        <i class="ion ion-earth tx-80 lh-0 tx-primary op-5"></i>
                        <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-10">All Number Of Tweets</p>
                        <p class="tx-32 tx-inverse tx-lato tx-black mg-b-0 lh-1">{{$tweet_counter->total}}</p>
                        {{-- <span class="tx-12 tx-roboto tx-gray-600">24% higher than yesterday</span> --}}
                        </div>
                    </div>
                    <div id="ch5" class="ht-60 tr-y-1 rickshaw_graph"><svg width="524" height="60"><g><path d="M0,30Q37.84444444444444,25.75,43.666666666666664,26.25C52.39999999999999,27,78.6,37.125,87.33333333333333,37.5S122.26666666666667,31.5,131,30S165.93333333333334,22.5,174.66666666666666,22.5S209.6,27.75,218.33333333333331,30S253.26666666666668,42.75,262,45S296.9333333333333,52.5,305.66666666666663,52.5S340.59999999999997,46.125,349.3333333333333,45S384.26666666666665,42.375,393,41.25S427.9333333333333,33.375,436.66666666666663,33.75S471.59999999999997,45.375,480.3333333333333,45Q486.15555555555557,44.75,524,30L524,60Q486.15555555555557,60,480.3333333333333,60C471.59999999999997,60,445.4,60,436.66666666666663,60S401.73333333333335,60,393,60S358.06666666666666,60,349.3333333333333,60S314.4,60,305.66666666666663,60S270.73333333333335,60,262,60S227.06666666666663,60,218.33333333333331,60S183.39999999999998,60,174.66666666666666,60S139.73333333333332,60,131,60S96.06666666666666,60,87.33333333333333,60S52.39999999999999,60,43.666666666666664,60Q37.84444444444444,60,0,60Z" class="area" fill="#0866C6"></path></g></svg></div>
                    </div>
                </div><!-- col-4 -->
                <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
                    <div class="bg-white rounded shadow-base overflow-hidden">
                    <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                        <i class="icon ion-clock tx-80 lh-0 tx-purple op-5"></i>
                        <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-10">Today Number Of Tweets</p>
                        <p class="tx-32 tx-inverse tx-lato tx-black mg-b-0 lh-1">{{$today_count}}</p>
                        {{-- <span class="tx-12 tx-roboto tx-gray-600">$390,212 before tax</span> --}}
                        </div>
                    </div>
                    <div id="ch6" class="ht-60 tr-y-1 rickshaw_graph"><svg width="524" height="60"><g><path d="M0,30Q37.84444444444444,25.75,43.666666666666664,26.25C52.39999999999999,27,78.6,37.125,87.33333333333333,37.5S122.26666666666667,31.5,131,30S165.93333333333334,22.5,174.66666666666666,22.5S209.6,27.75,218.33333333333331,30S253.26666666666668,42.75,262,45S296.9333333333333,52.5,305.66666666666663,52.5S340.59999999999997,46.125,349.3333333333333,45S384.26666666666665,42.375,393,41.25S427.9333333333333,33.375,436.66666666666663,33.75S471.59999999999997,45.375,480.3333333333333,45Q486.15555555555557,44.75,524,30L524,60Q486.15555555555557,60,480.3333333333333,60C471.59999999999997,60,445.4,60,436.66666666666663,60S401.73333333333335,60,393,60S358.06666666666666,60,349.3333333333333,60S314.4,60,305.66666666666663,60S270.73333333333335,60,262,60S227.06666666666663,60,218.33333333333331,60S183.39999999999998,60,174.66666666666666,60S139.73333333333332,60,131,60S96.06666666666666,60,87.33333333333333,60S52.39999999999999,60,43.666666666666664,60Q37.84444444444444,60,0,60Z" class="area" fill="#6F42C1"></path></g></svg></div>
                    </div>
                </div><!-- col-4 -->
                <div class="col-sm-6 col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="bg-white rounded shadow-base overflow-hidden">
                    <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                        <i class="icon ion-person-stalker tx-80 lh-0 tx-teal op-5"></i>
                        <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-10">All Number Of Users</p>
                        <p class="tx-32 tx-inverse tx-lato tx-black mg-b-0 lh-1">{{$user_count}}</p>
                        {{-- <span class="tx-12 tx-roboto tx-gray-600">23% average duration</span> --}}
                        </div>
                    </div>
                    <div id="ch7" class="ht-60 tr-y-1 rickshaw_graph"><svg width="524" height="60"><g><path d="M0,30Q37.84444444444444,25.75,43.666666666666664,26.25C52.39999999999999,27,78.6,37.125,87.33333333333333,37.5S122.26666666666667,31.5,131,30S165.93333333333334,22.5,174.66666666666666,22.5S209.6,27.75,218.33333333333331,30S253.26666666666668,42.75,262,45S296.9333333333333,52.5,305.66666666666663,52.5S340.59999999999997,46.125,349.3333333333333,45S384.26666666666665,42.375,393,41.25S427.9333333333333,33.375,436.66666666666663,33.75S471.59999999999997,45.375,480.3333333333333,45Q486.15555555555557,44.75,524,30L524,60Q486.15555555555557,60,480.3333333333333,60C471.59999999999997,60,445.4,60,436.66666666666663,60S401.73333333333335,60,393,60S358.06666666666666,60,349.3333333333333,60S314.4,60,305.66666666666663,60S270.73333333333335,60,262,60S227.06666666666663,60,218.33333333333331,60S183.39999999999998,60,174.66666666666666,60S139.73333333333332,60,131,60S96.06666666666666,60,87.33333333333333,60S52.39999999999999,60,43.666666666666664,60Q37.84444444444444,60,0,60Z" class="area" fill="#20C997"></path></g></svg></div>
                    </div>
                </div><!-- col-4 -->
            </div>

            <div class="row row-sm mg-t-20">
                <div class="col-lg-12">
                    <div class="card bd-0 shadow-base">
                        <div class="d-md-flex justify-content-between pd-10 pd-l-30">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Tweets Daily</h6>
                                <p>{{$key_array[0]}} - {{$key_array[10]}}</p>
                            </div>
                            <!--<div>                                
                                <div class="bd-sm-l pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                                    <p class="mg-b-0 tx-uppercase tx-10 tx-mont tx-semibold text-center">Database Connection Status</p>
                                    <div class="d-sm-flex" style="align-items: center;">
                                        <div class="br-toggle br-toggle-primary <?php //if($tweet_counter->status){echo 'on';}?>">
                                            <div class="br-toggle-switch"></div>
                                        </div>
                                        <svg width="150px"  height="60px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-bar-chart" style="background: none;">
                                            <g transform="rotate(180 50 50)">
                                                <rect y="15" height="66.9982" fill="#ff0000" x="17.5" width="5">
                                                    <animate attributeName="height" calcMode="spline" values="50;70;30;50" keyTimes="0;0.33;0.66;1" dur="1" keySplines="0.5 0 0.5 1;0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.4s" repeatCount="indefinite"></animate>
                                                </rect>
                                                <rect y="15" height="50.29" fill="#ff7300" x="27.5" width="5">
                                                    <animate attributeName="height" calcMode="spline" values="50;70;30;50" keyTimes="0;0.33;0.66;1" dur="1" keySplines="0.5 0 0.5 1;0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.2s" repeatCount="indefinite"></animate>
                                                </rect>
                                                <rect y="15" height="63.0276" fill="#002cff" x="37.5" width="5">
                                                    <animate attributeName="height" calcMode="spline" values="50;70;30;50" keyTimes="0;0.33;0.66;1" dur="1" keySplines="0.5 0 0.5 1;0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.6s" repeatCount="indefinite"></animate>
                                                </rect>
                                                <rect y="15" height="40.2841" fill="#00ff55" x="47.5" width="5">
                                                    <animate attributeName="height" calcMode="spline" values="50;70;30;50" keyTimes="0;0.33;0.66;1" dur="1" keySplines="0.5 0 0.5 1;0.5 0 0.5 1;0.5 0 0.5 1" begin="0s" repeatCount="indefinite"></animate>
                                                </rect>
                                                <rect y="15" height="36.9982" fill="#00ffff" x="57.5" width="5">
                                                    <animate attributeName="height" calcMode="spline" values="50;70;30;50" keyTimes="0;0.33;0.66;1" dur="1" keySplines="0.5 0 0.5 1;0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.8s" repeatCount="indefinite"></animate>
                                                </rect>
                                                <rect y="15" height="26.9982" fill="#ff00ff" x="67.5" width="5">
                                                    <animate attributeName="height" calcMode="spline" values="50;70;30;50" keyTimes="0;0.33;0.66;1" dur="1" keySplines="0.5 0 0.5 1;0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.3s" repeatCount="indefinite"></animate>
                                                </rect>
                                                <rect y="15" height="16.9982" fill="#55ff00" x="77.5" width="5">
                                                    <animate attributeName="height" calcMode="spline" values="50;70;30;50" keyTimes="0;0.33;0.66;1" dur="1" keySplines="0.5 0 0.5 1;0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.1s" repeatCount="indefinite"></animate>
                                                </rect>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                
                            </div> -->
                        </div><!-- d-flex -->
            
                        <div class="pd-l-25 pd-r-15 pd-b-25">
                            <div class="bd pd-t-30 pd-b-20 pd-x-20">
                                <canvas id="chartArea1" height="55"></canvas>
                            </div>
                        </div>
                    </div>
                </div><!-- col-8 -->
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">

                    
                </div><!-- col-4 -->
            </div><!-- row -->

        </div><!-- br-pagebody -->
        <footer class="br-footer">
            <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2019. Bracket Plus. All Rights Reserved.</div>
            <div>Attentively and carefully made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
            <span class="tx-uppercase mg-r-10">Share:</span>
            <a target="_blank" class="pd-x-5" href="#"><i class="fab fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="#"><i class="fab fa-twitter tx-20"></i></a>
            </div>
        </footer>
        </div><!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
        
    @endsection

    @section('script')
    <script src="{{asset('js/Chart.min.js')}}"></script>
    <script src="{{asset('js/chart.chartjs.js')}}"></script>
    <script>
        // Toggles
        $('.br-toggle').on('click', function(e){
            e.preventDefault();
            $(this).toggleClass('on');

            if(!$('.br-toggle').hasClass('on')){
                $('svg animate').attr('attributeName','');
                $.ajax({
                    url: 'set_status',
                    data: {flag:0},
                    type: 'get',
                    success: function(data){
                        console.log(data);
                    }
                })
            }else{
                $('svg animate').attr('attributeName','height');
                $.ajax({
                    url: 'set_status',
                    data: {flag:1},
                    type: 'get',
                    success: function(data){
                        console.log(data);
                    }
                })
            }

        })

        $(function(){
            if(!$('.br-toggle').hasClass('on')){
                $('svg animate').attr('attributeName','');
            }
            let key_array = <?php if(isset($key_array)) {echo json_encode($key_array);}else{echo '0';} ?>;
            let tweet_number = <?php if(isset($tweet_number)) {echo json_encode($tweet_number);}else{echo '0';} ?>;
            // console.log(key_array);
            // console.log(tweet_number);
            /** AREA CHART **/
            var ctx5 = document.getElementById('chartArea1');
            var myChart5 = new Chart(ctx5, {
                type: 'line',
                data: {
                labels: key_array,
                datasets: [{
                    data: tweet_number,
                    backgroundColor: '#50aa5b', //rgba(240, 113, 36, 0.4)
                    fill: true,
                    borderWidth: 0,
                    borderColor: '#fff'
                }]
                },
                options: {
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                        ticks: {
                            beginAtZero:true,
                            fontSize: 15,
                            // max: 50
                        }
                        }],
                        xAxes: [{
                        ticks: {
                            beginAtZero:true,
                            fontSize: 15
                        }
                        }]
                    }
                }
            });
        });

    </script>
    @endsection


    
