<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oswan - eCommerce HTML5 Template</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/icofont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="product-cart-area fluid-padding-3 pt-10 pb-130">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row" style="border-bottom: 1px solid #d8d8d8;color: #444;font-size: 15px;margin: 20px 0 20px;padding-bottom: 10px;text-transform: uppercase;
                                        background: #dadbd3 none repeat scroll 0 0;">
                                        <h3>order</h3>
                            </div>
                            <div class="table-content table-responsive">
                           
                                <table>
                                    <thead>
                                        <tr>
                                             
                                            <th class="product-price">products name</th>
                                            <th class="product-name">price</th>
                                            <th class="product-price">quantity</th>
                                            <th class="product-quantity">total</th>
                                             
                                        </tr>
                                    </thead>
                                    <tbody id="fact">
                                    <?php
                                            
                                            if(isset($_GET['line01'])){
                                            $nb =count($_GET);
                                          
                                            $line = array();
                                            $index1 ='';
                                            $index2 ='';
                                            $index3 ='';
                                            $index4 ='';
                                            for($i = 0 ; $i < $nb ; $i++){
                                                $index1 ='line'.$i.'1';
                                                $index2 ='line'.$i.'2';
                                                $index3 ='line'.$i.'3';
                                                $index4 ='line'.$i.'4';
                                                if(isset($_GET[$index1])){
                                                ?> 
                                                <tr>       
                                                <td class='product-name'><a href='#'><?php  echo $_GET[$index1]?></a></td>
                                                <td class='product-price'><span class='amount'><?php echo $_GET[$index2] ?> </span></td>
                                                <td class='product-quantity'><span class='amount'><?php echo $_GET[$index3] ?></span></td>
                                                <td class='product-subtotal'><?php echo $_GET[$index4] ?></td>
                                                </tr>
                                        <?php
                                                }
                                            }
                                        }    
                                        ?>   
                                    </tbody>
                                    </table>
                                    <div class="row" style="border-bottom: 1px solid #d8d8d8;color: #444;font-size: 15px;margin: 20px 0 20px;padding-bottom: 10px;text-transform: uppercase;
                                        background: #dadbd3 none repeat scroll 0 0;">
                                            <div class="col-md-6" >
                                                <span><?php echo  $_GET['name'] ?></span><br>
                                                <span><?php echo  $_GET['tel'] ?></span><br>
                                            </div>
                                            <div class="col-md-6">
                                                <span><?php echo  $_GET['ad1']?></span><br>
                                                <span><?php echo $_GET['ad2'] ?></span><br>
                                                <span><?php echo  $_GET['ad3']?></span><br>
                                                <span><?php echo  $_GET['ad4']?></span><br>
                                            </div>
                                    </div>
                                   
                                    
                                            <a class="btn-style cr-btn" href="#!" id="save-first-adresse" onclick="window.print()">
                                                <span style="color:white">print</span>
                                            </a>	
                                            
                                         
                                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
		
		
		
		
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    

     
    </body>
</html>
