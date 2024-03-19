@extends('layout.app')

@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Create')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Form Level</h3>
              </div>
      
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="levelKode">Kode level</label>
                    <input type="text" class="form-control" id="levelKode" name="levelKode" placeholder="Contoh STF untuk Staff">
                  </div>
                  <div class="form-group">
                    <label for="levelNama">Nama level</label>
                    <input type="text" class="form-control" id="levelNama" name="levelNama" placeholder="Masukkan nama level">
                  </div>
                </div>
      
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
          </div>
    </div>
</div>
@stop