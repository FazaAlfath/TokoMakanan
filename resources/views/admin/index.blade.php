@extends('admin.dashboard')

@section('content')
    <div class="container mt-5 px-5">
      <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">Tambah data</a>

      <div class="row">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Rating</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $prdct)
                <tr>
                  <td>{{ $prdct->id }}</td>
                  <td style="width: 100px"><img src="/product/{{ $prdct->img }}" width="100%" alt=""></td>
                  <td>{{ $prdct->name }}</td>
                  <td>{{ $prdct->description }}</td>
                  <td>{{ $prdct->price }}</td>
                  <td>{{ $prdct->stock }}</td>
                  <td>{{ $prdct->rating }}</td>
                  <td>
                    <a href="{{ $prdct->id }}" class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-pen text-white"></i></a>
                    <a href="/product/{{$prdct->id}}/delete" class="btn btn-danger btn-sm"><i class="fa fa-trash text-white"></i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
      {{ $products->links() }}
  </div>
  


  <!-- Modal -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/product/update" method="POST" id="formUpdate" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="updtId" >
          <div class="form-group">
              <label for="">Nama Produk</label>
              <input type="text" value="" name="name" id="updtName" class="form-control" placeholder="">
          </div>
          
          <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea class="form-control" name="desc" id="updtDesc" placeholder=""></textarea>
          </div>
          
          <div class="row">
            <div class="form-group col-sm-8">
              <label for="">Harga</label>
              <input type="number" name="price" id="updtPrice" class="form-control" placeholder="">
            </div>
            
            <div class="form-group col-sm-4">
              <label for="">Stok</label>
              <input type="number" name="stock" id="updtStock" class="form-control" placeholder="">
            </div>
          </div>

          <div class="form-group">
              <label for="">rating Produk</label>
              <input type="text" name="rating" id="updtrating" class="form-control" placeholder="">
          </div>
          
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" name="image" class="form-control" placeholder="">
          </div>

          {{-- <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" name="image" id="updtImage" class="form-control" placeholder="">
          </div> --}}
    
          <button type="submit" class="btn btn-success">Edit</button>
        </form>
      </div>
    </div>
  </div>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="/product/post" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="name" class="form-control" placeholder="">
            </div>
            
            <div class="form-group">
              <label for="">Deskripsi</label>
              <textarea class="form-control" name="description" placeholder=""></textarea>
            </div>
            
            <div class="row">
              <div class="form-group col-md-8">
                <label for="">Harga</label> 
                <input type="number" class="form-control" name="price" placeholder=""></input>
              </div>
              
              <div class="form-group col-md-4">
                <label for="">Stok</label>
                <input type="number" class="form-control" name="stock" placeholder=""></input>
              </div>
            </div>

            <div class="form-group">
                <label for="">rating Produk</label>
                <input type="text" name="rating" class="form-control" placeholder="">
            </div>

            <div class="form-group">
              <label for="">Gambar</label>
              <input type="file" name="image" class="form-control" placeholder="">
            </div>

            <button type="submit" class="btn btn-success">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>

    const btnUpdate = document.getElementsByClassName('btn-edit');

    const updtName = document.getElementById('updtName');
    const updtDesc = document.getElementById('updtDesc');
    const updtPrice = document.getElementById('updtPrice');
    const updtStock = document.getElementById('updtStock');
    const updtStock = document.getElementById('updtrating');
    const updtId = document.getElementById('updtId');

    const formUpdate = document.getElementById('formUpdate');

    Array.from(btnUpdate).forEach(el => {
      el.addEventListener('click', (e)=>{

        const id = e.target.getAttribute('href');

        $.ajax({
          url: '/product/'+id+'/edit',
          type: 'GET',
          success: function(res){

            updtName.value = res.name;
            updtDesc.value = res.description;
            updtPrice.value = res.price;
            updtStock.value = res.stock;
            updtRating.value = res.rating;
            
            updtId.value = res.id;
          }
        });

      });

    });

</script>

</body>
</html>
@stop
    