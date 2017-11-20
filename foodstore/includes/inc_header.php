<div class="back_top"> <a class="btn-top" id="back-top" href="javascript:void(0);" title="Top" style="display: inline;"><span><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></span></a></div>
<div>
    <div class="extra_line"></div>
    <div class="wrapper">
            <div class="row_1">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="header">
                            <div class="box_languages">
                                <div class="languages">
                                    <label class="fl_left">Languages: </label>
                                    <a href="">
                                        <img src="../css/images/icon.gif" alt="English" title="English" width="28" height="20">
                                    </a>
                                    <a href="">
                                        <img src="../css/images/icon1.gif" alt="Russian" title="Russian" width="28" height="20">
                                    </a>
                                    <a href="">
                                        <img src="../css/images/icon2.gif" alt="German" title="German" width="28" height="20">
                                    </a>
                                    <a href="">
                                        <img src="../css/images/icon3.gif" alt="Spain" title="Spain" width="28" height="20">
                                    </a>
                                </div>
                            </div>
                            <div id="box_search" class="search">
                                <form class="get_grid_e" name="myForm" action="" onsubmit="return validatesreach()" method="post">
                                    <div class="input-width ">
                                        <input class="go fl_left" type="text" name="fsreach" placeholder="Sreach...">
                                        <button id="tdb1" type="submit" value="sreach">sreach</button>
                                    </div>
                                </form>
                                <script>
                                    function validatesreach() {
                                        var x = document.forms["myForm"]["fsreach"].value;
                                        if (x == "") {
                                            alert("Vui lòng nhập từ khóa tìm kiếm");
                                            return false;
                                        }
                                    }
                                </script>
                            </div>
                            <div class="box_header_cart destination">
                                <a class="cart_l" href="">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <label>My Cart:</label>
                                    <span><strong>0</strong> items</span></a>
                            </div>
                            <div class="box_header_user_menu">
                                <ul class="user_menu">
                                    <li class="first">
                                        <a href=""><div class="button-t"><span>Shipping &amp; Returns</span></div></a>
                                    </li>
                                    <li class="">
                                        <a href=""><div class="button-t"><span>Advanced Search</span></div></a>
                                    </li>
                                    <li class=""><a href="../home/register.php"><div class="button-t"><span>Create an Account</span></div></a
                                    </li>
                                    <li class="Log in last"><a href="../home/login.php">Log in</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="wrapper_menu"><?php include("../includes/inc_menu.php");?></div>
                            <a class="logo" href="../home/index.php">
                                <img src="../css/images/store_logo.png" alt="Food Store" title="Food Store" width="221" height="57">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
