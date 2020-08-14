@extends('../layouts/default')
@section('content')
    <!-- /mail -->
    <div class="banner-bottom inner">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header w3_agileits_header">{{__('messages.contact_verb')}} <span>{{__('messages.us_pronom')}}</span></h3>
            </div>
            <div class="agile_wthree_inner_grids">
                <div class="contact_img_agile">
                </div>
                <div class="contact-form agile_inner_grids">
                    <div class="wthree_head_section">
                        <h3 class="w3l_header w3_agileits_header">{{__('messages.send_word')}} <span>{{__('messages.message_word')}}</span></h3>
                    </div>
                    @include('flash')
                    <form action="{{route('mailus_send')}}" method="post">
                        <div class="fields-grid">
                            @csrf
                            <div class="styled-input agile-styled-input-top">
                                @error('nomination')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" name="nomination" required="">
                                <label>{{__('messages.form_label_name')}}</label>
                                <span></span>
                            </div>
                            <div class="styled-input agile-styled-input-top">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" name="phone" required="">
                                <label>{{__('messages.form_label_phone')}}</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="email" name="email" required="">
                                <label>{{__('messages.form_label_email')}}</label>
                                <span></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="styled-input textarea-grid">
                            @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <textarea name="message" required=""></textarea>
                            <label>{{__('messages.form_label_message')}}</label>
                            <span></span>
                        </div>
                        <input type="submit" value="{{__('messages.send_word')}}">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //mail -->
@endsection
