@if (Session::has('success'))
<div class="pt-3">
  <div class="alert alert-success">
    {{Session::get('success')}}
  </div>
</div>
@endif

@if (Session::has('delete'))
<div class="pt-3">
  <div class="alert alert-danger">
    {{Session::get('delete')}}
  </div>
</div>
@endif

@if ($errors->any())
<div class="pt-3">
  <div class="alert alert-danger">
      @foreach ($errors->all() as $item)
      <div>{{ $item }}</div>
          
      @endforeach

  </div>
</div>
@endif