<x-layouts.backend.home>

    <x-slot:title> Sozlamalar </x-slot:title>

    <x-layouts.backend.header> Sozlamalar</x-layouts.backend.header>

<div class="row">

    <div class="col-md-4 col-sm-6 col-12">
        <a href="{{ route('user.password', auth()->user()->id) }}">
      <div class="info-box">
        <span class="info-box-icon mr-3 bg-danger"><i class="fas fa-lock"></i></span>
        <div class="info-box-content">
          <h5 class="info-box-number">Xavfsizlik</h5>
        </div>
      </div></a>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
      <a href="{{ route('user.photo', auth()->user()->id) }}">
        <div class="info-box">
          <span class="info-box-icon mr-3 bg-info"><i class="fas fa-camera"></i></span>
          <div class="info-box-content">
            <h5 class="info-box-number">Profil rasmi</h5>
          </div>
        </div></a>
      </div>

      <div class="col-md-4 col-sm-6 col-12">
        <a href="{{ route('user.edit', auth()->user()->id) }}">
        <div class="info-box">
          <span class="info-box-icon mr-3 bg-warning"><i class="fas fa-pen"></i></span>
          <div class="info-box-content">
            <h5 class="info-box-number">Tahrirlash</h5>
          </div>
        </div></a>
      </div>

</x-layouts.backend.home>