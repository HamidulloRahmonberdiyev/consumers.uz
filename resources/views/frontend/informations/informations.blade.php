<x-layouts.frontend.main>

    <x-slot:title>
        Ma'lumotlar
    </x-slot:title>

    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            @foreach ($informations as $information)
                <div class="row feature-item mb-5">
                    <div class="col-lg-6  wow fadeInUp order-1 order-lg-2" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('storage/' . $information->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
                        <h4>{{ $information->title }}</h4>
                        <p>
                            {{ $information->content }}
                        </p>
                    </div>
                </div>
            @endforeach

            <div class="mb-5">
                {{ $informations->links() }}
            </div>
        </div>
    </section>

    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
              <h3 class="cta-title">Platformaga kirish</h3>
              <p class="cta-text">Yuqoridagi ma'lumotlar bilan tanishgan bo'lsangiz ro'yhatdan o'ting. Ro'yhatdan o'tib bo'lganingizdan so'ng Platforma ma'murlari sizga qisqa fursatda aloqaga chiqishadi. </p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="{{ route('register') }}">Ro'yhatdan o'tish</a>
            </div>
          </div>
  
        </div>
      </section>




</x-layouts.frontend.main>
