<div class="subscribe-section container-fluid" id="subscribe-section">
    <!-- Container -->
    <div class="container">
        <h4 class="subscribe-title col-md-5 col-sm-4 col-xs-12">subscribe to our newsletter</h4>
        <form action="{{route('subcribe.store')}}" class="col-md-7 col-sm-8 col-xs-12" method="POST" id="subcribe-form">
            @csrf
            <div class="col-md-9 col-sm-8 col-xs-8"><input type="text" placeholder="Your Email Here" name="email"><i
                    class="fa fa-envelope-o" aria-hidden="true"></i></div>
            <div class="col-md-3 col-sm-4 col-xs-4 no-left-padding"><input type="submit" value="subscribe"
                    class="btn-default" name="subscribe"></div>
        </form>
    </div>
</div>
