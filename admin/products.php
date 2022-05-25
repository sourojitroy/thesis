<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Insert Question</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Insert Question</a>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>question</th>
              <th>answer_params_1</th>
              <th>answer_params_2</th>
              <th>answer_params_3</th>
              <th>answer_params_4</th>
              <th>right_answer</th>
            </tr>
          </thead>
          <tbody id="product_list">
            <!-- <tr>
              <td>1</td>
              <td>ABC</td>
              <td>FDGR.JPG</td>
              <td>122</td>
              <td>eLECTRONCS</td>
              <td>aPPLE</td>
              <td><a class="btn btn-sm btn-info"></a><a class="btn btn-sm btn-danger">Delete</a></td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>



<!-- Add Product Modal start -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data">
        	<div class="row">
        		
        		<div class="col-12">
		        		<div class="form-group">
		        		   <label>task_id</label>
		        		   <input type="text" name="task_id" class="form-control" placeholder="Enter task_id">
		        	  </div>
		        	</div>
        		</div>
            <div class="col-12">
        			<div class="form-group">
		        		<label>question</label>
		        		<input type="text" name="question" class="form-control" placeholder="Enter question">
		        	</div>
        		</div>
            <div class="col-12">
        			<div class="form-group">
		        		<label>Answer Params 1</label>
		        		<input type="text" name="answer_params_1" class="form-control" placeholder="Enter Answer Params 1">
		        	</div>
        		</div>
            <div class="col-12">
        			<div class="form-group">
		        		<label>Answer Params 2</label>
		        		<input type="text" name="answer_params_2" class="form-control" placeholder="Enter Answer Params 2">
		        	</div>
        		</div>
            <div class="col-12">
        			<div class="form-group">
		        		<label>Answer Params 3</label>
		        		<input type="text" name="answer_params_3" class="form-control" placeholder="Enter Answer Params 3">
		        	</div>
        		</div>
            <div class="col-12">
        			<div class="form-group">
		        		<label>Answer Params 4</label>
		        		<input type="text" name="answer_params_4" class="form-control" placeholder="Enter Answer Params 4">
		        	</div>
        		</div>
            
            <div class="col-12">
        			<div class="form-group">
		        		<label>Right Answer</label>
		        		<input type="text" name="right_answer" class="form-control" placeholder="Enter Right Answer">
		        	</div>
        		</div>
            <!--
        		<div class="col-12">
        			<div class="form-group">
		        		<label>question</label>
		        		   <input type="text" name="question" class="form-control" placeholder="Enter question">
		        	  
		        	</div>
        		</div>
            <div class="col-12">
        			<div class="form-group">
		        		<label>answer_params</label>
		        		   <input type="text" name="answer_params" class="form-control" placeholder="Enter answer_params">
		        	  </div>
		        	</div>
        		</div>
            <div class="col-12">
              <div class="form-group">
                <label>answer_params</label>
                <input type="number" name="answer_params" class="form-control" placeholder="Enter answer_params">
              </div>
            </div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>question</label>
		        		<input type="number" name="question" class="form-control" placeholder="Enter question">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Keywords <small>(eg: apple, iphone, mobile)</small></label>
		        		<input type="text" name="product_keywords" class="form-control" placeholder="Enter Product Keywords">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Image <small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="product_image" class="form-control">
		        	</div>
        		</div>-->
        		<input type="hidden" name="add_product" value="1">
        		<div class="col-12">
        			<button type="submit" class="btn btn-primary add-product">Submit</button>
        		</div>
        	</div>
        	
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Add Product Modal end -->

<!-- Edit Product Modal start -->
<div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-product-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="e_product_name" class="form-control" placeholder="Enter Product Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Brand Name</label>
                <select class="form-control brand_list" name="e_brand_id">
                  <option value="">Select Brand</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Category Name</label>
                <select class="form-control category_list" name="e_category_id">
                  <option value="">Select Category</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Description</label>
                <textarea class="form-control" name="e_product_desc" placeholder="Enter product desc"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Qty</label>
                <input type="number" name="e_product_qty" class="form-control" placeholder="Enter Product Quantity">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Price</label>
                <input type="number" name="e_product_price" class="form-control" placeholder="Enter Product Price">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Keywords <small>(eg: apple, iphone, mobile)</small></label>
                <input type="text" name="e_product_keywords" class="form-control" placeholder="Enter Product Keywords">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file" name="e_product_image" class="form-control">
                <img src="../product_images/1.0x0.jpg" class="img-fluid" width="50">
              </div>
            </div>
            <input type="hidden" name="pid">
            <input type="hidden" name="edit_product" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary submit-edit-product">Add Product</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Product Modal end -->

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/products.js"></script>