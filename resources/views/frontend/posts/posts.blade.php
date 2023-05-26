<x-layouts.frontend.main>

    <x-slot:title>
        Postlar
    </x-slot:title>

     <section id="features" class="features">
        <div class="container" data-aos="fade-up">
  
          @foreach ($posts as $post)            
          <div class="row feature-item mb-5">
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
  
          <div class="mb-5">
              {{ $posts->links() }}
          </div>

        </div>
      </section>

      


</x-layouts.frontend.main>