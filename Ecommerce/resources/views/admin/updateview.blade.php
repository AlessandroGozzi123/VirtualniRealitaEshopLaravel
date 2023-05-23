

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
      
      .title
      {
        color:white;
        padding-top: 25px;
        font-size: 25px;
      }

      label
      {
        display: inline-block;
        width: 200px;
      }
      </style>
  </head>
  <body>
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

<div class="container" align="center">
    <h1 class="title">Přidat produkt</h1>

    @if(session()->has('message'))
    <div class="alert alert-success">
    <button type="button" class="close" data-bs-dismiss="alert">x</button>
    {{(session()->get('message'))}}
    </div>
    @endif

    <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

    @csrf

    <div style="padding:15px;">
        <label>Název produktu</label>
        <input style="color:black;" type="text" name="title" value="{{$data->title}}" required="">
    </div>

    <div style="padding:15px;">
        <label>Cena</label>
        <input style="color:black;" type="text" name="price" value="{{$data->price}}" required="">
    </div>

    <div style="padding:15px;">
        <label>Popis produktu</label>
        <input style="color:black;" type="text" name="des" value="{{$data->description}}" required="">
    </div>

    <div style="padding:15px;">
        <label>Kvantita</label>
        <input style="color:black;" type="text" name="quantity" value="{{$data->quantity}}" required="">
    </div>

    <div style="padding:15px;">
        <label>Starý obrázek</label>
        <img height="100" width="100" src="/productimage/{{$data->image}}" alt="">
    </div>
    
    <div style="padding:15px;">
        <label>Změnit obrázek</label>
        <input type="file" name="file">
    </div>

    <div style="padding:15px;">
        <input class="btn btn-success" type="submit">
    </div>

    </form>
    
</div>
</div>
          <!-- partial -->
      @include('admin.script')
  </body>
</html>