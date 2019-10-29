<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-master.css" rel="stylesheet">
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }

    body {
      margin-top: 30px;
    }
  </style>`
  <title>BLACK_UNICORN</title>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <font color="white" class="navbar-brand">BLACK_UNICORN</font>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Stock-in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Employee Resource Management</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h1 class="display-4 text-center mb-4">ORDER</h1>
  <h3>
    <center>Total Data : <a id="total"></a></center>
  </h3>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search : &nbsp;<div class="btn btn-success" id="show_" color="white">OrderNumber</div>
          </h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" id="input" onkeyup="search()" class="form-control" placeholder="Search for...">
            </div>
          </div>
        </div>
        <div id="search">
          <div class="select">
            <a onclick="choose('OrderNumber')" class="btn btn-primary btn-sm" id="s0" href="#">OrderNumber</a>&nbsp;
            <a onclick="choose('OrderDate')" class="btn btn-primary btn-sm" id="s1" href="#">OrderDate</a>&nbsp;
            <a onclick="choose('RequiredDate')" class="btn btn-primary btn-sm" id="s2" href="#">RequiredDate</a>&nbsp;
            <a onclick="choose('ShippedDate')" class="btn btn-primary btn-sm" id="s0" href="#">ShippedDate</a>&nbsp;
            <a onclick="choose('Status')" class="btn btn-primary btn-sm" id="s1" href="#">Status</a>&nbsp;
            <a onclick="choose('Comments')" class="btn btn-primary btn-sm" id="s2" href="#">Comments</a>&nbsp;
            <a onclick="choose('FirstName')" class="btn btn-primary btn-sm" id="s0" href="#">FirstName</a>&nbsp;
            <a onclick="choose('LastName')" class="btn btn-primary btn-sm" id="s1" href="#">LastName</a>&nbsp;
          </div>
        </div><br>

        <div class="card my-4">
          <table id="myTR"><br>
            <tr style="background-color: black;color: white;">
              <th height="60">
                <center>
                  <font size="3">OrderNumber</font>
                </center>
              </th>
              <th width="10%">
                <center>
                  <font size="3">OrderDate</font>
                </center>
              </th>
              <th>
                <center>
                  <font size="3">RequiredDate</font>
                </center>
              </th>
              <th>
                <center>
                  <font size="3">ShippedDate</font>
                </center>
              </th>
              <th width="10%">
                <center>
                  <font size="3">Status</font>
                </center>
              </th>
              <th width="35%">
                <center>
                  <font size="3">Comments</font>
                </center>
              </th>
              <th width="10%">
                <center>
                  <font size="3">FirstName</font>
                </center>
              </th>
              <th width="10%">
                <center>
                  <font size="3">LastName</font>
                </center>
              </th>
              <th width="5%">
                <center>
                  <font size="3">Edit</font>
                </center>
              </th>
            </tr>
            @foreach($a as $aa)
            <tr>
              <td>
                <center>{{ $aa->orderNumber }}</center>
              </td>
              <td>
                <center>{{ $aa->orderDate }}</center>
              </td>
              <td>
                <center>{{ $aa->requiredDate }}</center>
              </td>
              <td>
                <center>{{ $aa->shippedDate }}</center>
              </td>
              <td>
                <center>{{ $aa->status }}</center>
              </td>
              <td>&nbsp;{{ $aa->comments }}</td>
              @foreach($b as $bb)
              @if( $bb->customerNumber == $aa->customerNumber )
              <td>
                <center>{{ $bb->contactFirstName }}</center>
              </td>
              <td>
                <center>{{ $bb->contactLastName }}</center>
              </td>
              <td>
                <center><a type="button" href="/admin/order/edit/{{$aa->orderNumber}}"><img src="/img/edit.png" width="40" height="40" alt="edit"></a></center>
              </td>
              @endif
              @endforeach
            </tr>
            @endforeach
          </table><br>
        </div>
      </div>
    </div>
    <table>
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="{{asset ('vendor/bootstrap/js/jquery.min.js')}}"></script>
  <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/forOrder.js')}}"></script>
</body>

</html>