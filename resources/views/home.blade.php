<x-layouts.backend.home>

    <x-slot:title> Bosh sahifa </x-slot:title>

    <x-layouts.backend.header> Bosh sahifa </x-layouts.backend.header>

    <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $addresses->count() }}</h3>
              <p>Manzillar</p>
            </div>
            <div class="icon">
              <i class="ion ion-location"></i>
            </div>
            <a href="{{ route('addresses.index') }}" class="small-box-footer">Ko'rish <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $consumers_active->count() }}<sup style="font-size: 20px"></sup></h3>
              <p>Faol Iste'molchilar</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('consumers.active') }}" class="small-box-footer">Ko'rish <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $consumers_passive->count() }}</h3>
              <p>Passiv Iste'molchilar</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('consumers.passive') }}" class="small-box-footer">Ko'rish <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $consumers_noactive->count() }}</h3>
              <p>Nofaol Iste'molchilar</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('consumers.noactive') }}" class="small-box-footer">Ko'rish <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">
            <i class="far fa-chart-bar"></i>
            Statistika
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div id="donut-chart" style="height:300px;"></div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-sm-3 col-6">
              <div class="description-block border-right">
                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>@if($consumers->count() != 0) {{ Str::limit((100 / $consumers->count()) * $consumers_active->count(), 4, '') }}% @endif</span>
                <h5 class="description-header">{{ $consumers_active->count() }}</h5>
                <span class="description-text">Faol</span>
              </div>
            </div>
            <div class="col-sm-3 col-6">
              <div class="description-block border-right">
                <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i>@if($consumers->count() != 0) {{ Str::limit((100 / $consumers->count()) * $consumers_passive->count(), 4, '') }}% @endif</span>
                <h5 class="description-header">{{ $consumers_passive->count() }}</h5>
                <span class="description-text">Passiv</span>
              </div>
            </div>
            <div class="col-sm-3 col-6">
              <div class="description-block border-right">
                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i>@if($consumers->count() != 0) {{ Str::limit((100 / $consumers->count()) * $consumers_noactive->count(), 4, '') }}% @endif</span>
                <h5 class="description-header">{{ $consumers_noactive->count() }}</h5>
                <span class="description-text">Nofaol</span>
              </div>
            </div>
            <div class="col-sm-3 col-6">
              <div class="description-block">
                <span class="description-percentage text-default"><i class="fas fa-caret"></i> 100%</span>
                <h5 class="description-header">{{ $consumers->count() }}</h5>
                <span class="description-text">Jami</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

</x-layouts.backend.home>