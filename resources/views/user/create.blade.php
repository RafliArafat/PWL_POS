@extends('layout.app')

@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Create')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form User</h3>
              </div>
      
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <select class="custom-select form-control" name="level" id="level">
                        <option value="1" selected>Administrator</option>
                        <option value="2">Manager</option>
                        <option value="3">Staff</option>
                        <option value="5">Cust</option>
                    </select>
                </div>
            </div>
    
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
    </div>
</div>
@stop