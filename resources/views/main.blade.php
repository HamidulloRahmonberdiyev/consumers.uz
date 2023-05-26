<x-layouts.frontend.main>

    <x-slot:title>
        Bosh sahifa
    </x-slot:title>

     <!-- ======= Features Section ======= -->
     <section id="features" class="features">
        <div class="container" data-aos="fade-up">
  
          @foreach ($posts as $post)            
          <div class="row feature-item">
            <div class="col-lg-6  wow fadeInUp order-1 order-lg-2" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
              <h4>{{ $post->title }}</h4>
              <p>
                {{ $post->content }}
              </p>
            </div>
          </div>
          @endforeach
  
        </div>
      </section>
  
      <!-- ======= Why Us Section ======= -->
      {{-- <section id="why-us" class="why-us">
        <div class="container-fluid" data-aos="fade-up">
  
          <header class="section-header">
            <h3>Nega aynan biz?</h3>
            <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
          </header>
  
          <div class="row">
  
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="why-us-img">
                <img src="{{ asset('frontend') }}/assets/img/why-us.jpg" alt="" class="img-fluid">
              </div>
            </div>
  
            <div class="col-lg-6">
              <div class="why-us-content">
                <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
                <p>
                  Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                  et temporibus. Labore est odio.
  
                  Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
                </p>
  
                <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-bookmarks" style="color: #f058dc;"></i>
                  <h4>Corporis dolorem</h4>
                  <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
                </div>
  
                <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-box-seam" style="color: #ffb774;"></i>
                  <h4>Eum ut aspernatur</h4>
                  <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
                </div>
  
                <div class="features clearfix" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-card-checklist" style="color: #589af1;"></i>
                  <h4>Voluptates dolores</h4>
                  <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
                </div>
  
              </div>
  
            </div>
  
          </div>
  
        </div>
  
        <div class="container">
          <div class="row counters" data-aos="fade-up" data-aos-delay="100">
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
  
          </div>
  
        </div>
      </section> --}}
  
      <!-- ======= Call To Action Section ======= -->
      <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
              <h3 class="cta-title">Ro'yhatdan o'tish</h3>
              <p class="cta-text"> Ro'yhatdan o'tishdan avval ma'lumot olish bo'limiga kirib platformadan qaday foydalanish haqida ba'tafsil ma'lumot olishingizni maslahat beramiz.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="{{ route('informations') }}">Ma'lumot olish</a>
            </div>
          </div>
  
        </div>
      </section>
  
      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h3>Bizning jamoa</h3>
            <p>Quyidagi platformaning asosiy jamoa a'zolari.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="{{ asset('frontend') }}/assets/img/user.webp" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Hamidullo Rahmonberdiyev</h4>
                    <span>Platforma asoschisi</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <img src="{{ asset('frontend') }}/assets/img/user.webp" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Noma'lum</h4>
                    <span>Manager</span>
                    <div class="social">
                      <a href=""><i class="bi bi-telegram"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <img src="{{ asset('frontend') }}/assets/img/user.webp" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Noma'lum</h4>
                    <span>designer</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <img src="{{ asset('frontend') }}/assets/img/user.webp" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Noma'lum</h4>
                    <span>Accountant</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
  
      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">
  
          <header class="section-header">
            <h3>Hamkorlarimiz</h3>
          </header>
  
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              @foreach ($partners as $partner)
                <div class="swiper-slide"><img src="{{ asset('storage/' . $partner->image) }}" class="img-fluid" alt=""></div>
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section>
  
      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing section-bg wow fadeInUp">
  
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3>Tariflar</h3>
            <p>Platforma tariflari bilan yaqindan tanishing.</p>
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
  

      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h3>Ko'p beriladigan savollar</h3>
            <p>Bizga kelib tushadigan eng ko'p beriladigan savollarga javoblar.</p>
          </header>
  
          <ul class="faq-list" data-aso="fade-up" data-aos-delay="100">
  
            @foreach ($questions as $question)                
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">{{ $question->title }} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                <p>{{ $question->content }}</p>
              </div>
            </li>
            @endforeach
  
          </ul>
  
        </div>
      </section>

</x-layouts.frontend.main>