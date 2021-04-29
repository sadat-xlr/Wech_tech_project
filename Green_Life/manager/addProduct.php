<?php include '../include/header.php';?>
<?php require_once '../controllers/addProductController.php'?>

        <div class="ProductAddContainer">
            <fieldset>
                <form action="" method="post" onsubmit=" return validateAddProduct()">
                    <table class="productTable">
                        <tr>
                            <td>
                                <span>Category</span>
                            </td>
                            <td>
                                <input id="category_name" type="text" placeholder="Category Name" name="newCategory"> 
					            <span id="err_catname"> <?php echo $err_newCategory; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span>Product</span>
                            </td>
                            <td>
                                <input id="product_name" type="text" placeholder="New Product Name" name="newProduct"> 
					            <span id="err_productName"> <?php echo $err_newProduct; ?></span>
                            </td>
                        </tr>
                        

                        <tr>
						    <td>
                                <span>Price</span>
                            </td>
                            <td>
                                <input id="price" type="text" placeholder="Enter Price" name="price">
                                <span id="err_price"><?php echo $err_price; ?></span>  
                            </td>
				        </tr>

                        <tr>
						    <td>
                                <span>Discount</span>
                            </td>
                            <td>
                                <select id="discount" name="discount">
                                    <option value="">Choose</option>
                                    
                                    <?php
                                        for($i=0;$i<=100;$i++){
                                            echo "<option value='$i'>{$i}</option>";	
                                        }
                                    ?>
                                </select>
                                <span id="err_discount"> <?php echo $err_discount; ?></span>
                            </td>
				        </tr>

                        <tr>
						    <td align="center" colspan="2">
                                <input type="submit" name="add" value="ADD">
                            </td>
				        </tr>

                    </table>
                </form>
            </fieldset>
        </div>
 
        
<script>
    function get_element(id){
        return document.getElementById(id);
    }

   function validateAddProduct() {
    cleanup();
        var hasError= false;

        if(get_element("category_name").value==""){ 	
        
            get_element("err_catname").innerHTML="Please Enter the category Name (From JS)";

            get_element("err_catname").style.color="red";
            hasError=true;
        }

        if(get_element("product_name").value==""){ 	
        
            get_element("err_productName").innerHTML="Please Enter product name (From JS)";

            get_element("err_productName").style.color="red";
            hasError=true;
        
        }

        if(get_element("price").value==""){ 	
        
            get_element("err_price").innerHTML="Please Enter Price (From JS)";

            get_element("err_price").style.color="red";
            hasError=true;
        }

        if(get_element("discount").value==""){ 	
            
            get_element("err_discount").innerHTML="Please select discount (From JS)";

            get_element("err_discount").style.color="red";
            hasError=true;
        }

        if (!hasError){
            return true;
        }
        return false;
   
    }

    function cleanup(){
        get_element("category_name").innerHTML ="";
        get_element("product_name").innerHTML ="";
        get_element("price").innerHTML ="";
        var discountText=get_element("discount").value;
        if(discountText==""){
            get_element("discount").selectedIndex =0;
        }
        else{
            get_element("discount").selectedIndex =parseInt(discountText)+1;
        }
    }

</script>