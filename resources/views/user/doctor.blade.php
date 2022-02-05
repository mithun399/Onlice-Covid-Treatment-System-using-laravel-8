
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
      
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
       @foreach($doctor as $doctors)
       
      <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctor/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="tel:01788379424"><span class="mai-call"></span></a>
                <a href="https://tokbox.com/developer/embeds/?room=y3wbdj"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <p class="text-xl mb-0">Available:{{$doctors->time}}</p>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
              <p class="text-xl mb-0"> <a href="{{url('payment',$doctors->id)}}"> Fees:{{$doctors->fee}}</a></p>
              
            </div>
          </div>
        </div>
        
@endforeach

      </div>
    </div>
  </div>
  