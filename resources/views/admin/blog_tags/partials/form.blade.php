<div class="form-group col-sm-12 m-0">
  <label class="m-0"><strong>SEO</strong></label>
  </div>
  <div class="form-group col-sm-12">
    {{ Form::label('meta', 'Título de la página:') }} <code>*</code>
    {{ Form::text('meta[1]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
  </div>
  <div class="form-group col-sm-12">
    {{ Form::label('meta', 'Keywords de la página:') }} <code>*</code>
    {{ Form::text('meta[2]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
  </div>
  <div class="form-group col-sm-12">
    {{ Form::label('meta', 'Description de la página:') }} <code>*</code>
    {{ Form::text('meta[3]', null, ['class' => 'form-control', 'placeholder' => '', 'required']) }}
  </div>
  <hr style="width: 97%">

<div class="form-group col-sm-12">
  {{ Form::label('name', 'Nombre:') }} <code>*</code>
  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) }}
</div>

<div class="form-group col-sm-12">
  {{ Form::label('slug', 'URL amigable') }} <code>*</code>
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'required']) }}
</div>

@section('script')

<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
  $(document).ready(function(){
      $("#name, #slug").stringToSlug({
          callback: function(text){
              $('#slug').val(text);
          }
      });
  });
</script>

@endsection