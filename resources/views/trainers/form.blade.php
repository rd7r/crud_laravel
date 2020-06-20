<!--<div class="row">
  <div class="col-lg-2">
    <label class="my-1" style="font-size: 20px;">Name:</label>
    <label class="my-1" style="font-size:20px;">Descripción</label>
    <label class="my-1" style="font-size: 20px; padding-top:120%;">Avatar:</label>
  </div>
  <div class="col-lg-8">
    <input name="name" type="text" class="form-control col-lg-6 my-2" placeholder="Enter Name">
    <textarea name="descripcion" rows="8" cols="80" class="form-control col-lg-6 my-2" placeholder="Enter Descripcion"></textarea>
    <input name="avatar" type="file" class="col-lg-6 my-2">
  </div>
</div>-->

@if($trainer->avatar!=null)
    <img src="/images/{{ $trainer->avatar }}"class="card-img-top img-fluid m-5 rounded-circle mx-auto d-block" style="width:250px; height:250px;">
@endif
{!! Field::text('name',$trainer->name,['label'=>'Name:','placeholder'=>'Enter Name']) !!}
{!! Field::textarea('name',$trainer->descripcion,['rows'=>4,'label'=>'Descripción:','placeholder'=>'Enter Descripcion']) !!}
{!! Field::file('name',['label'=>'Avatar:']) !!}


