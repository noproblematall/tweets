@extends('layouts.app')

    @section('content')
        
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
            <div class="br-pagetitle">
                <i class="icon ion-gear-a"></i>
                <div>
                <h4>Settings</h4>
                <p class="mg-b-0">Google analytics and Hash tag.</p>
            </div>            
        </div><!-- d-flex -->

        <div class="br-pagebody" id="app" v-cloak>            
            <div class="row row-sm mg-t-20">
                <div class="col-lg-6">
                    <div class="row row-sm">                        
                        <p class="mg-t-15">Google analytics code.</p>                            
                    </div>
                    <div style="clear:both;"></div>
                    <div class="card bd-0 shadow-base">
                        <codemirror v-model="code" :options="cmOptions"></codemirror>
                    </div>
                    <button class="btn btn-native btn-block mg-t-10" @click="google_save()">Save</button>
                    {{-- <div class="row row-sm mg-t-30">                        
                        <p class="mg-t-15">New Hash Tag.</p>                            
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" v-model="hash" placeholder="New hash tag" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-native" @click="hash_save()" type="button" title="Save"><i class="icon ion-navigate"></i></button>
                        </div>
                    </div> --}}
                </div><!-- col-8 -->
                <div class="col-lg-6">
                    
                </div>
            </div><!-- row -->
            <notifications group="hash-google" position="top right"/>
        </div><!-- br-pagebody -->
        <footer class="br-footer" style="margin-top:50px;">
            <div class="footer-left">
            <div class="mg-b-2">Meshbak. All Rights Reserved.</div>
            </div>
            {{-- <div class="footer-right d-flex align-items-center">
            <span class="tx-uppercase mg-r-10">Share:</span>
            <a target="_blank" class="pd-x-5" href="#"><i class="fab fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="#"><i class="fab fa-twitter tx-20"></i></a>
            </div> --}}
        </footer>
        </div><!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
        
    @endsection

    @section('script')
    <script src="{{asset('js/setting.js')}}"></script>
    @endsection


    
