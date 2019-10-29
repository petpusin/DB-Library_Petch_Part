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
    </div>
  </nav>
  <h1 class="display-4 text-center mb-4">EDIT</h1>
  <a href="/admin/orders">
    <center>
      <-back</center> </a> <div class="container">
        <div class="col-md-12">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">TEST</h5>
            <div class="card-body">
              <center>
                <table>
                  @foreach($or as $aaa)
                  <tr>
                    <td style="background-color: black;color: white;" width="12% width=" 12%" height="50">
                      <center>OrderNumber</center>
                    </td>
                    <td width="40% height=" 50">
                      <center>{{$aaa->orderNumber}}</center>
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: black;color: white;" height="50">
                      <center>OrderDate</center>
                    </td>
                    <td height="50">
                      <center>{{$aaa->orderDate}}</center>
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: black;color: white;" height="50">
                      <center>RequiredDate</center>
                    </td>
                    <td height="50">
                      <center>{{$aaa->requiredDate}}</center>
                    </td>
                  </tr>
                  @foreach($cus as $bbb)
                  @if($aaa->customerNumber == $bbb->customerNumber)
                  <tr>
                    <td style="background-color: black;color: white;" height="50">
                      <center>FirstName</center>
                    </td>
                    <td height="50">
                      <center>{{$bbb->contactFirstName}}</center>
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: black;color: white;" height="50">
                      <center>LastName</center>
                    </td>
                    <td height="50">
                      <center>{{$bbb->contactLastName}}</center>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                  <form action="update/{{$aaa->orderNumber}}" method="post" >
                  {{ method_field('put') }}
                  {{ csrf_field() }}
                    <tr>
                      <td style="background-color: black;color: white;" height="50">
                        <center>ShippedDate</center>
                      </td>
                      <td>
                        <center><input type="date" name="shippedDate" value={{$aaa->shippedDate}}></center>
                      </td>
                    </tr>
                    <tr>
                      <td style="background-color: black;color: white;" height="50">
                        <center>Status</center>
                      </td>
                      <td>
                        <center>
                          @if($aaa->status == "Cancelled")
                          <select name="status">
                            <option value="Cancelled" selected>Cancelled</option>
                            <option value="Disputed">Disputed</option>
                            <option value="In Process">In Process</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Resolved">Resolved</option>
                            <option value="Shipped">Shipped</option>
                          </select>
                          @elseif($aaa->status == "Disputed")
                          <select name="status">
                            <option value="Cancelled">Cancelled</option>
                            <option value="Disputed" selected>Disputed</option>
                            <option value="In Process">In Process</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Resolved">Resolved</option>
                            <option value="Shipped">Shipped</option>
                          </select>
                          @elseif($aaa->status == "In Process")
                          <select name="status">
                            <option value="Cancelled">Cancelled</option>
                            <option value="Disputed">Disputed</option>
                            <option value="In Process" selected>In Process</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Resolved">Resolved</option>
                            <option value="Shipped">Shipped</option>
                          </select>
                          @elseif($aaa->status == "On Hold")
                          <select name="status">
                            <option value="Cancelled">Cancelled</option>
                            <option value="Disputed">Disputed</option>
                            <option value="In Process">In Process</option>
                            <option value="On Hold" selected>On Hold</option>
                            <option value="Resolved">Resolved</option>
                            <option value="Shipped">Shipped</option>
                          </select>
                          @elseif($aaa->status == "Resolved")
                          <select name="status">
                            <option value="Cancelled">Cancelled</option>
                            <option value="Disputed">Disputed</option>
                            <option value="In Process">In Process</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Resolved" selected>Resolved</option>
                            <option value="Shipped">Shipped</option>
                          </select>
                          @else
                          <select name="status">
                            <option value="Cancelled">Cancelled</option>
                            <option value="Disputed">Disputed</option>
                            <option value="In Process">In Process</option>
                            <option value="On Hold">On Hold</option>
                            <option value="Resolved">Resolved</option>
                            <option value="Shipped" selected>Shipped</option>
                          </select>
                          @endif
                        </center>
                      </td>
                    </tr>
                    <tr>
                      <td style="background-color: black;color: white;" height="50">
                        <center>Comment</center>
                      </td>
                      <td>
                        <center><textarea rows="3" cols="60" name="comments">{{$aaa->comments}}</textarea></center>
                      </td>
                    </tr>
                    <tr>
                      <td style="background-color: black;color: white;" height="50">
                        <center>Confirm</center>
                      </td>
                      <td>
                        <center><input type="submit" onclick="success()" value="Confirm"></center>
                      </td>
                    </tr>
                  </form>
                  @endforeach
                </table>
              </center>
            </div>

          </div>


          <!-- Bootstrap core JavaScript -->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script>
            function success(){
              alert("Success !!!");
            }
          </script>
</body>

</html>