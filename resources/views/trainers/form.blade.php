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


<div class="row">
  <div class="col-lg-2">
    <label class="my-1" style="font-size: 20px;">Name:</label>
    <label class="my-1" style="font-size:20px;">Descripción</label>
    <label class="my-1" style="font-size: 20px; padding-top:120%;">Avatar:</label>
  </div>
  <div class="col-lg-8">
    <input name="name" type="text" class="form-control col-lg-6 my-2" placeholder="Enter Name" value="{{ $trainer->name }}">
    <textarea name="descripcion" rows="8" cols="80" class="form-control col-lg-6 my-2" placeholder="Enter Descripcion">{{ $trainer->descripcion }}</textarea>
    <input name="avatar" type="file" class="col-lg-6 my-2" value="{{ $trainer->avatar }}">
  </div>
</div>
