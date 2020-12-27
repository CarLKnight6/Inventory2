<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->product_id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" name="product_name" value="<?php echo $row->product_name; ?>" aria-describedby="emailHelp" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="double" class="form-control" name="product_price" value="<?php echo $row->product_price; ?>" aria-describedby="emailHelp" placeholder="Enter Product Price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input type="number" class="form-control" name="product_quantity" value="<?php echo $row->product_quantity; ?>" aria-describedby="emailHelp" placeholder="Enter product_quantity">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Supplier</label>
                <input type="text" class="form-control" name="product_supplier" value="<?php echo $row->product_supplier; ?>" aria-describedby="emailHelp" placeholder="Enter Supplier">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" class="form-control" name="product_description" value="<?php echo $row->product_description; ?>" aria-describedby="emailHelp" placeholder="Enter product_description">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>