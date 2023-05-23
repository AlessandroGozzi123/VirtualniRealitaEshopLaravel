

<!DOCTYPE html>
<html lang="en">
  <head>
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

                <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding:15px;">
                    <label>Název produktu</label>
                    <input style="color:black;" type="text" name="title" placeholder="Give a product title" required="">
                </div>

                <div style="padding:15px;">
                    <label>Cena</label>
                    <input style="color:black;" type="text" name="price" placeholder="Napiste cenu" required="">
                </div>

                <div style="padding:15px;">
                    <label>Popis produktu</label>
                    <input style="color:black;" type="text" name="des" placeholder="Napiste popisek produktu" required="">
                </div>

                <div style="padding:15px;">
                    <label>Kvantita</label>
                    <input style="color:black;" type="text" name="quantity" placeholder="Kvantita produktu" required="">
                </div>
                
                <div style="padding:15px;">
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