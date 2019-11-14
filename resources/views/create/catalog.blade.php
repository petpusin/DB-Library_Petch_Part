@extends('layouts.app')


@section('title')

Album example · Bootstrap

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
@endsection
    

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    Bootstrap core CSS -->
    <!-- <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


    <!-- Custom styles for this template -->
    <!-- <link href="album.css" rel="stylesheet"> -->

   


    @section('content')
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Catalog</strong>
      </a>

    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Catalog</h1>
      <p class="lead text-muted">Buy anything you like.</p>

      <!--
      <form action="{{url('catalog')}}" method="post">
        {{csrf_field()}}
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Vendor and Scale</span>
        </div>
        <input type="text" name="vendor" class="form-control" placeholder="Vendor">
        <input type="text" name="scale" class="form-control" placeholder="Scale">
        <input type="submit" class="btn btn-primary" name="" value="Find">
      </div>
      </form>
      -->

      <!-- <div class="form-group" align="center">
        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
      </div> -->

      <div class="form-group">
        <select name="filter_vendor" id="filter_vendor" class="form-control" required>
        <option value="">Select Vendor</option>
        @foreach($productVendor as $row)
        <option value="{{ $row->productVendor }}">{{ $row->productVendor }}</option>

        @endforeach
        </select>
      </div>

      <div class="form-group">
        <select name="filter_scale" id="filter_scale" class="form-control" required>
        <option value="">Select Scale</option>
        @foreach($productScale as $row)
        <option value="{{ $row->productScale }}">{{ $row->productScale }}</option>

        @endforeach
        </select>
      </div>

      <form action="{{url('catalog')}}" method="post">
        {{csrf_field()}}
      <div class="form-group" align="center">
        <input type="submit" name="filter" id="filter" class="btn btn-info" value="Filter">

        <input type="submit" name="reset" id="reset" class="btn btn-default" value="Reset">
      </div>
      </form>

      <!-- <form action="{{url('catalog')}}" method="post">
        {{csrf_field()}}
      <div class="form-group" align="center">
        <input type="submit" name="filter" id="filter" class="btn btn-info" value="Filter">

        <input type="submit" name="reset" id="reset" class="btn btn-default" value="Reset">
      </div>
      </form> -->

    </div>
  </section>

  <!-- <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Scale</th>
                            <th>Vendor</th>
                        </tr>
                    </thead>
                </table>
   </div> -->

   <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach($data as $row)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">{{ $row->productName }}<br>Scale : {{ $row->productScale }}<br>Vendor : {{ $row->productVendor }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Have a nice day.</p>

  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
@endsection

<!-- <script>
$(document).ready(function(){
    fill_datatable();

    function fill_datatable(filter_scale = '', filter_vendor = '')
    {
        var dataTable = $('#customer_data').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                      url: "{{ route('catalog.index') }}",
                      data:{filter_scale:filter_scale, filter_vendor:filter_vendor}
            },
            columns: [
                {
                    data:'productName',
                    name:'productName'
                },
                {
                    data:'productScale',
                    name:'productScale'
                },
                {
                    data:'productVendor',
                    name:'productVendor'
                }
            ]

            });
    }

    $('#filter').click(function(){
        var filter_scale = $('#filter_scale').val();
        var filter_vendor = $('#filter_vendor').val();

        if(filter_scale != '' &&  filter_vendor != '')
        {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_scale, filter_vendor);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#filter_scale').val('');
        $('#filter_vendor').val('');
        $('#customer_data').DataTable().destroy();
        fill_datatable();
    });

});
</script> -->

