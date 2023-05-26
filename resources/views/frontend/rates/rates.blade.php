<x-layouts.frontend.main>

    <x-slot:title>
        Tariflar
    </x-slot:title>

    <section id="pricing" class="pricing section-bg wow fadeInUp">
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3>Tariflar</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </header>
  
          <div class="row flex-items-xs-middle flex-items-xs-center">
  
            @foreach ($rates as $rate)               
            <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <div class="card-header">
                  <h3 style="font-size:50px"><span class="currency"></span>{{ $rate->price }}<span class="period">/so'm</span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">
                    {{ $rate->title }}
                  </h4>
                  <ul class="list-group">
                    <li class="list-group-item"><em>{{ $rate->content }}</em></li>
                  </ul>
                  <a href="{{ route('rates') }}" class="btn">{{ $rate->lifetime }}</a>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
  
      </section>

</x-layouts.frontend.main>