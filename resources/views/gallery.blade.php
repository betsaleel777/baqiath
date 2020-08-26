<div class="portfolio-agileinfo" id="portfolio">
    <div class="container">
        <div class="wthree_head_section">
            <h3 class="w3l_header w3_agileits_header">{{__('messages.us_plurial')}} <span>{{__('messages.house_word')}}</span></h3>
        </div>
    </div>
    <div class="agile_wthree_inner_grids">
        <div class="agile_port_w3ls_info">
            <div class="portfolio-grids_main">
                <div class="col-md-6 portfolio-grids gallery-grid1" data-aos="zoom-in">
                    <a href="{{asset('web/images').'/'.$maisons->where('rang',0)->first()->image_presentation}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                        <img src="{{asset('web/images').'/'.$maisons->where('rang',0)->first()->image_presentation}}" class="img-responsive" alt="w3ls"/>
                        <div class="p-mask">
                            <h4><span>{{$maisons->where('rang',0)->first()->intitule}}</span></h4>
                            <p>{{__('messages.image_default_slogant')}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 portfolio-grid_left">
                    <div class="col-md-6 portfolio-grids gallery-grid1" data-aos="zoom-in">
                        <a href="{{asset('web/images').'/'.$maisons->where('rang',2)->first()->image_presentation}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="{{asset('web/images').'/'.$maisons->where('rang',2)->first()->image_presentation}}" class="img-responsive" alt="w3ls"/>
                            <div class="p-mask">
                                <h4><span>{{$maisons->where('rang',2)->first()->intitule}}</span></h4>
                                <p>{{__('messages.image_default_slogant')}}</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 portfolio-grids gallery-grid1" data-aos="zoom-in">
                        <a href="{{asset('web/images').'/'.$maisons->where('rang',3)->first()->image_presentation}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="{{asset('web/images').'/'.$maisons->where('rang',3)->first()->image_presentation}}" class="img-responsive" alt="w3ls"/>
                            <div class="p-mask">
                                <h4><span>{{$maisons->where('rang',3)->first()->intitule}}</span></h4>
                                <p>{{__('messages.image_default_slogant')}}</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="portfolio-grids_main">

                <div class="col-md-6 portfolio-grid_left">
                    <div class="col-md-6 portfolio-grids gallery-grid1" data-aos="zoom-in">
                        <a href="{{asset('web/images').'/'.$maisons->where('rang',4)->first()->image_presentation}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="{{asset('web/images').'/'.$maisons->where('rang',4)->first()->image_presentation}}" class="img-responsive" alt="w3ls"/>
                            <div class="p-mask">
                                <h4><span>{{$maisons->where('rang',4)->first()->intitule}}</span></h4>
                                <p>{{__('messages.image_default_slogant')}}</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 portfolio-grids gallery-grid1" data-aos="zoom-in">
                        <a href="{{asset('web/images').'/'.$maisons->where('rang',5)->first()->image_presentation}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="{{asset('web/images').'/'.$maisons->where('rang',5)->first()->image_presentation}}" class="img-responsive" alt="w3ls"/>
                            <div class="p-mask">
                                <h4><span>{{$maisons->where('rang',5)->first()->intitule}}</span></h4>
                                <p>{{__('messages.image_default_slogant')}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 portfolio-grids gallery-grid1" data-aos="zoom-in">
                    <a href="{{asset('web/images').'/'.$maisons->where('rang',1)->first()->image_presentation}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                        <img src="{{asset('web/images').'/'.$maisons->where('rang',1)->first()->image_presentation}}" class="img-responsive" alt="w3ls"/>
                        <div class="p-mask">
                            <h4><span>{{$maisons->where('rang',1)->first()->intitule}}</span></h4>
                            <p>{{__('messages.image_default_slogant')}}</p>
                        </div>
                    </a>
                </div>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>
<!--// Gallery -->
