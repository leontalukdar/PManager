@extends('layouts.app')
@section('content')

<div class="col-md-9 col-lg-9 col-sm-9 pull left">
    <!-- Example row of columns -->
    <div class="row col-md-12 col-lg-12 col-sm-12" style="background:white; margin: 5px;">
        <form method="post" action="{{ route('companies.update',[$company->id]) }}"><br style="clear:both">
        {{ csrf_field() }}

            <input type="hidden" name="_method" value="put">
            
            <div class="form-group">
                <label for="company_name">Name<span class="required">*</span></label>
                <input placeholder="Enter Name" id="company-name"  name="name" spellcheck="false" class="form-control" value="{{ $company->name }}" required>
            </div>
            
            <div class="form-group">
            <label for="company_description">Description</label>
                <textarea placeholder="Enter Description" style="resize:verticle" id="company-content" name="description" rows="10" spellcheck="false" class="form-control autosize-target text-left">{{ $company->description }}</textarea>
            </div>
        
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</div>

<div class="col-sm-3 col-md-3 col-lg-3 pull right">
    {{--  <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>  --}}
    <div class="sidebar-module">
        <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="/companies/{{$company->id}}">View Company</a></li>
            <li><a href="/companies">All Companies</a></li>
        </ol>
    </div>
    {{--  <div class="sidebar-module">
        <h4>Members</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>  --}}
</div>

@endsection