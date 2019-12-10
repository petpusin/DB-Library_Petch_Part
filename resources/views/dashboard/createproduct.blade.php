@extends('create.master')

@section('title')
Stock | insert
@endsection

@section('content')
<!-- 'productCode','productName','productScale','productVendor','productLine','productDescription','quantityInStock','buyPrice','MSRP' -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form  style="display : block" method="post" action="{{ route('admin.stock.store') }}" id="add_product">
                {{ csrf_field() }}
                <h3>Add Product</h3>
                <div class="form-group">
                    <label for="title">productCode</label>
                    <input type="text" class="form-control" name="productcode" id="productcode" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="title">productName</label>
                    <input type="text" class="form-control" name="productname" id="productname" placeholder="Title" />
                </div>
                <div class="form-group">
                    <label for="title">productLine</label>
                    <select name="productline" id="productline" style="margin-left:90px">
                        @foreach($productlines as $data)
                        <option value="{{$data->productLine}}">{{$data->productLine}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="title">productScale</label>
                    <input type="text" class="form-control" name="productscale" id="productscale" placeholder="Title" />
                </div>
                <div class="form-group">
                    <label for="title">productVendor</label>
                    <input type="text" class="form-control" name="productvender" id="productvender" placeholder="Title" />
                </div>
                <div class="form-group">
                    <label for="body">productDescription</label>
                    <textarea class="form-control" name="productdes" id="productdes" cols="30" rows="10" placeholder="Body Text"></textarea>
                </div>
                <div class="form-group">
                    <label for="title">quantityInStock</label>
                    <input type="number" class="form-control" name="productqty" id="productqty" placeholder="Title" />
                </div>
                <div class="form-group">
                    <label for="title">buyPrice</label>
                    <input type="number" class="form-control" name="productprice" id="productprice" placeholder="Title" />
                </div>
                <div class="form-group">
                    <label for="title">MSRP</label>
                    <input type="number" class="form-control" name="productmsrp" id="productmsrp" placeholder="Title" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
