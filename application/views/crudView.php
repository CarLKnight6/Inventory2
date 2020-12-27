


<?php $this->load->view('includes/header');

?>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
     
     <div style="position: relative;">
    <h1 style="position: absolute; left: 0; top: 0">Hello, </h1>
    <div style="position: absolute; right: 0; top: 0; text-align: right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="location.href='http:/Inventory2'"> Logout </button>
    </div>
</div>
<div style="position: relative;">
    <div style="position: absolute; right: 0; top: 0; text-align: right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="location.href='http:/Inventory2'"> Logout </button>
    </div>
</div>
</body>
<br>
   
    <br>
    <br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Product
        </button>
    <br>
    <br>
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('CrudController/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" name="product_name" aria-describedby="emailHelp" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Price</label>
                        <input type="double" class="form-control" name="product_price" aria-describedby="emailHelp" placeholder="Enter Product Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <!-- type=date for date-->
                        <input type="number" class="form-control" name="product_quantity" aria-describedby="emailHelp" placeholder="Enter Quantity">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Supplier</label>
                        <input type="text" class="form-control" name="product_supplier" aria-describedby="emailHelp" placeholder="Enter Supplier">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" name="product_description" aria-describedby="emailHelp" placeholder="Enter Description">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>

        

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Supplier</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->product_id; ?></th>
                <td><?php echo $row->product_name; ?></td>
                <td><?php echo $row->product_price; ?></td>
                <td><?php echo $row->product_quantity; ?></td>
                <td><?php echo $row->product_supplier; ?></td>
                <td><?php echo $row->product_description; ?></td>
                <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->product_id;?>">Edit</a>  | 
                   <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->product_id;?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

  </body>
</html>