@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('content')


<div class="site-section" data-aos="fade">
        <div class="container-fluid">

          <div class="row justify-content-center">
            <div class="col-md-7">
              <div class="row mb-5">
                <div class="col-12 ">
                  <h2 class="site-section-heading text-center">Contact Us</h2>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-8 mb-5">
                  {{ legendaryart_notification($errors)}}

                    <form id="contact-us" action="" method="POST">
                   @csrf

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name" value="{{ old('name') }}">
                        </div>
                    </div>


                    <div class="row form-group">

                      <div class="col-md-12">
                        <label class="text-black" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email" value="{{ old('email') }}">
                      </div>
                    </div>

                    <div class="row form-group">

                      <div class="col-md-12">
                        <label class="text-black" for="phone">Phone</label>
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter your Phone" value="{{ old('phone') }}">
                      </div>
                    </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="name">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter Your Subject" value="{{ old('subject') }}">
                            </div>
                        </div>

                        <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                          <button id="msgsubmitbtn" class="btn btn-primary py-2 px-4 text-white" type="submit">
                              <span>SEND</span>
                          </button>
                      </div>
                    </div>


                  </form>
                </div>
                <div class="col-lg-3 ml-auto">
                  <div class="mb-3 bg-white">
                      @if (count($infos)>0)

                        @foreach ($infos as $info)
                  <p class="mb-0 font-weight-bold">{{ $info->title }}</p>
                  <p class="mb-4">{{ $info->description }}</p>

                        @endforeach

                      @endif

                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
@endsection
@section('scripts')
    <script>
        $('textarea#message').characterCounter();

        $(function(){
            $(document).on('submit','#contact-us',function(e){
                e.preventDefault();

                var data = $(this).serialize();
                var url = "{{ route('message') }}";
                var btn = $('#msgsubmitbtn');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    beforeSend: function() {
                        $(btn).addClass('disabled');
                        $(btn).empty().append('<span>LOADING...</span><i class="material-icons right">rotate_right</i>');
                    },
                    success: function(data) {
                        if (data.message) {
                            M.toast({html: data.message, classes:'green darken-4'})
                        }
                    },
                    error: function(xhr) {
                        M.toast({html: 'ERROR: Failed to send message!', classes: 'red darken-4'})
                    },
                    complete: function() {
                        $('form#contact-us')[0].reset();
                        $(btn).removeClass('disabled');
                        $(btn).empty().append('<span>SEND</span><i class="material-icons right">send</i>');
                    },
                    dataType: 'json'
                });

            })
        })

    </script>
@endsection
