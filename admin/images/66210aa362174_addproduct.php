<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
            h2{
                font-family: Bookman Old Style;
                font-size: 35px;
            }
            label
            {
                font-family: Bookman Old Style;
            }
            body{
                background-color:;
            }
        </style>
        
        
</head>
<body>
<?php include 'sidebar2.html' ?>
<form action="c_addproduct.php" method="POST" enctype="multipart/form-data">
<div class="content">
    <div class="row">
        
        <div class="col-sm-12">
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">      
                              
                        <center><h2 class="title"><b>Add Product</b></h2></center><br>
                            </div>
                            <div class="content">
                                <form action="product" method="POST">
                                    
<div class="row ml-5">
      
        <div class="col-sm-4">
            <div class="form-group">
                <label>Category Name</label>
                 <select name="txt_category" class="form-control" id="txt_category">
                    <option>Select Category</option>
                    <option>Kulfi</option>
                    <option>Cone</option>
                    <option>Chakobar</option>
                    <option>Family Pack</option>
                    </select>
            </div>
       </div>
        
            <div class="col-sm-4">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text"name="txt_productname"placeholder="Enter Product Name"id="txt_productname"class="form-control" required ="">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Description</label>
                <textarea name="txt_desc" id="txt_desc" placeholder="Enter description" rows="2" col="20"class="form-control" required =""></textarea>
            </div>
        </div>
     </div>
   
    
    <div class="row ml-5">
     
        
        <div class="col-sm-4">
            <div class="form-group">
                <label>Image</label>
                 <input type="file"name="txt_image" id="txt_image" class="form-control" required ="">
                 
            </div>
            
        </div>
    
     
   
   
       
        <div class="col-sm-2">
            <div class="form-group">
                <label>Price/box</label>
                <input type="text"name="txt_price" id="txt_price" onkeyup="cal()"  placeholder="Enter Price"class="form-control" required ="">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label><b>Quantity</b></label>
                <input type="number"name="txt_quantity" id="txt_quantity"  placeholder="Enter Quantity"class="form-control" required ="">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>GST(%)</label>
                <input type="text"name="txt_gst" id="txt_gst" onkeyup="cal()"  placeholder="Enter GST"class="form-control">
            </div>
        </div>
        
    </div>
        
    
    
    
    
    <div class="row ml-5">
       
        <div class="col-sm-4">
            <div class="form-group">
                <label>Total Amount</label>
                <input type="text"name="txt_total"id="txt_total" onkeyup="cal()"placeholder="Enter Total Amount"class="form-control" required ="">
            </div>
        </div>
   
          <div class="col-sm-4">
            <div class="form-group">
                <label>Stock</label>
                <select name="txt_stock" id="txt_stock" class="form-control" >
                <option>Select Status</option>
                <option>YES </option>
                <option>NO</option>                
                 </select>
                </div> 
            </div>
    
      
        
            
    </div>
                
    
     <div class="row ml-5">
     <div class="col-sm-4"></div>
        <div class="col-sm-8">
            <div class="form-group">
               <input type="submit"name="btn_save"value="Save"class="btn btn-success btn-fill">&nbsp&nbsp&nbsp
              
               <a href="add_product.jsp" class="btn btn-danger btn-fill">Cancel</a>
            </div>
        </div>   
    </div>                              
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            </div>
       
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </form>
        <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>


