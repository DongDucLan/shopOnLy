<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/InformationMember.css">
  <link rel="stylesheet" href="assets/css/InformationNews.css">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/menu.css">
  <script src="https://kit.fontawesome.com/017c8d7ce8.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php include 'Header.php' ?>
    <div>
      <div class="row ">
      <div class="col-sm-2 ">
                <div class="nav-head-content" style="    height: auto;">
                    <ul id="accordion" class="accordion">
                      <li>
                        <a href="index.php?controller=pages&action=home" style="text-decoration: none;"><div class="link"><i class="fa fa-home"></i>Trang Chủ</i></div></a>
                      </li>
                      <li>
                        <div class="link"><i class="fa fa-globe"></i>Quản lý trang web<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                          <li><a href="index.php?controller=pages&action=inforWebsite">Trang web</a></li>
                          <li class="color-text"><a href="index.php?controller=pages&action=inforSale">Khuyến mãi</a></li>
                          <li><a href="index.php?controller=pages&action=inforNews">Tin tức</a></li>
                        </ul>
                      </li>
                      <li>
                        <div class="link"><i class="fa fa-tshirt"></i>Quản lý sản phẩm<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                          <li><a href="index.php?controller=pages&action=inforCategory">Danh mục</a></li>
                          <li><a href="index.php?controller=pages&action=inforProduct">Sản phẩm</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="index.php?controller=pages&action=inforProfile"><div class="link"><i class="fa fa-user-circle"></i>Quản lý hồ sơ</div></a>
            
                      </li>
                      <li>
                        <a href="index.php?controller=pages&action=inforOrder" style="text-decoration: none;"><div class="link"><i class="fa fa-receipt"></i>Quản lý đơn hàng</div></a>
                      </li>
                      
                    </ul>
                  </div>
            </div>
        <div class="col-sm-10">
          <div class="title1">
            <nav class="navbar navbar-light bg-light">
              <div class="container-fluid">
                <a class="navbar-brand">Quản lý hồ sơ thành viên</a>
              </div>
            </nav>
          </div>

          <div class="content">
            <form action="" method="post">
            <nav class="navbar navbar-light bg-light">
              <div class="container-fluid title">
                <a class="navbar-brand">Thông tin thành viên</a>
              </div>

            </nav>
            <?php
            echo'<div class="container-fluid">
            <div class="row navbar">
              <div class="col-sm-9">
                <div class="row padd-infor">
                  <div class="col-sm-4 infor">
                    <div class="infor">ID Người Dùng:</div>
                    <div class="news news2 input-news">'.$infor_profile->UserID.'</div>
                    <input class="news news2 input-news" type="text"
                                            placeholder="Nhập mới" value="'.$infor_profile->UserID.'" name="UserID" style="display:none;">
                  </div>
                  <div class="col-sm-4 infor">
                    <div class="infor">Tên Người dùng:</div>
                    <div class="news news2 input-news">'.$infor_profile->UserName.'</div>
                  </div>
                  <div class="col-sm-4 infor">
                    <div class="infor">Email:</div>
                    <div class="news news2 input-news">'.$infor_profile->Email.'</div>
                  </div>
                </div>
                <div class="row padd-infor">
                  <div class="col-sm-4 infor">
                    <div class="infor">Họ:</div>
                    <div class="news news2 input-news">'.$infor_profile->Surname.'</div>
                  </div>
                  <div class="col-sm-4 infor">
                    <div class="infor">Tên:</div>
                    <div class="news news2 input-news">'.$infor_profile->Name.'</div>
                  </div>
                  <div class="col-sm-4 infor">
                    <div class="infor">Số Điện Thoại:</div>
                    <div class="news news2 input-news">'.$infor_profile->PhoneNumber.'</div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <img src="'.$infor_profile->Image.'" alt="" style="width:100%">
              </div>
              <div class="col-sm-6 infor">
                <div class="infor">Địa chỉ:</div>
                <div class="news news2 input-news">'.$infor_profile->Address.'</div>
              </div>
              <div class="col-sm-6">
                <div class="form-check">
                  
                  <label class="form-check-label infor" for="flexCheckIndeterminate">
                  '.$infor_profile->Note.'
                  </label>
                </div>
              </div>
              <div class="col-sm-6 infor padd-infor">
                <div class="infor">Ghi chú:</div>
                <select class="news news2 input-news" name="Note">
                      <option value="'.$infor_profile->Note.'">'.$infor_profile->Note.'</option>
                      <option value="Tài khoản đã mở">Tài khoản đã mở</option>
                      <option value="Tài khoản đã khóa">Tài khoản đã khóa</option>
                    </select>
              </div>
              <div class="col-sm " style="margin-top: 15px;"><input class="btn btn-sm btn-outline-secondary btnn" style="margin-right:0px" type="submit" value="Lưu">
        
        <a href="index.php?controller=pages&action=inforProfile"><input class="btn btn btn-sm btn-outline-secondary  " style="width:50px" value="Hủy"></a>
    </div>
            </div>
            </form></div>';
            ?>
          </div>
        </div>
      </div>
    </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
    $(function () {
      var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown)
      }

      Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
          $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
          $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
      }

      var accordion = new Accordion($('#accordion'), false);
    });
  </script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</body>

</html>