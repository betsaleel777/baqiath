@extends('../layouts/default')
@section('content')
    <!-- /mail -->
    <div class="banner-bottom inner">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header w3_agileits_header">Contactez <span>nous</span></h3>
            </div>
          <div class="agile_wthree_inner_grids">
          <div class="contact_img_agile">
		</div>
		<div class="contact-form agile_inner_grids">
			  <div class="wthree_head_section">
                <h3 class="w3l_header w3_agileits_header">Envoyer <span>un message </span></h3>
            </div>
            <form action="{{route('mailus_send')}}" method="post">
				<div class="fields-grid">
                    @csrf
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="nomination" required="">
						<label>Nom</label>
						<span></span>
					</div>
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="phone" required="">
						<label>Phone</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="email" required="">
						<label>Email</label>
						<span></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="styled-input textarea-grid">
					<textarea name="message" required=""></textarea>
					<label>Message</label>
					<span></span>
				</div>
				<input type="submit" value="SEND">
			</form>
		</div>
		<div class="clearfix"> </div>
          </div>
        </div>
    </div>
    <!-- //mail -->
@endsection
