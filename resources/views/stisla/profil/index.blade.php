@extends('stisla.layouts.form')

@section('konten')
<div class="section-header">
  <h1>{{ $title }}</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
    <div class="breadcrumb-item">{{ $title }}</div>
  </div>
</div>

<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>{{ $title }}</h4>
        </div>
        <div class="card-body">
          <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @isset($d)
            @method('PUT')
            @endisset
            @csrf
            <div class="row">
              <div class="col-md-12">
                @input(['id'=>'nama', 'label'=>'Nama', 'ikon'=>'fas fa-user', 'value'=>isset($d)?$d->nama : ''])
              </div>
              <div class="col-md-12">
                @email(['value'=>isset($d)?$d->email : ''])
              </div>
              <div class="col-md-12">
                @input(['id'=>'password', 'label'=>'Password', 'ikon'=>'fas fa-key', 'no_required'=>true])
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <button type="reset" class="btn btn-secondary btn-block">Batal</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection