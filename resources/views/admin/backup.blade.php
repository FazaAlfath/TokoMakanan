<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin-Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="https://kit.fontawesome.com/4d20f1062f.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

        i{pointer-events: none!important}

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active p-2">
                <a class="nav-link pb-0" href="/admin">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table</span></a>
            </li>

            <li class="nav-item active p-2" data-toggle="modal" data-target="#logoutModal">
                <a class="nav-link py-2">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Logout</span></a>
                    
            </li>
            
            <li class="nav-item active p-2">
                <a class="nav-link py-2" href="/backup">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Back-Up</span></a>
                    
            </li>
            

        </ul>
        <!-- End of Sidebar -->

        <div class="container mt-5 px-5">
            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">Tambah data</a>
      
            <div class="row">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Pesanan</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Pengiriman</th>
                      <th scope="col">Total Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($buyers as $byr)
                      <tr>
                        <td>{{ $byr->id }}</td>
                        <td>{{ $byr->nama_pembeli }}</td>
                        <td>{{ $byr->pesanan }}</td>
                        <td>{{ $byr->alamat }}</td>
                        <td>{{ $byr->pengiriman }}</td>
                        <td>{{ $byr->total_harga }}</td>
                        <td>
                          <a href="{{ $byr->id }}" class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-pen text-white"></i></a>
                          <a href="/buyers/{{$byr->id}}/delete" class="btn btn-danger btn-sm"><i class="fa fa-trash text-white"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
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
       
 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>
         <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
         <div class="modal-footer">
             <a class="btn btn-primary" href="{{ url('/admin-logout') }}">Logout</a>
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
        <form action="/buyers/post2" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nama Pembeli</label>
                <input type="text" name="name" class="form-control" placeholder="">
            </div>
            
            <div class="form-group">
              <label for="">Pesanan</label>
              <textarea class="form-control" name="description" placeholder=""></textarea>
            </div>
            
            <div class="form-group">
              <label for="">Alamat</label>
              <textarea class="form-control" name="description" placeholder=""></textarea>
            </div>

            <div class="form-group">
              <label for="">Pengiriman</label>
              <textarea class="form-control" name="description" placeholder=""></textarea>
            </div>
            
            <div class="row">
              <div class="form-group col-md-8">
                <label for="">Total Harga</label> 
                <input type="number" class="form-control" name="price" placeholder=""></input>
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
          url: '/buyer/'+id+'/edit',
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
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>