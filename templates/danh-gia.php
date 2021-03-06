<?php
/*
* Template Name: danh-gia
*/
?>
<!DOCTYPE html>
<html>

<head>
    <title>Trang chủ</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500&subset=latin,vietnamese,latin-ext" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/bootstrap.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/boostrap.css" />
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/jquery.mmenu.all.css" /> -->
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/fonts/font-awesome.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/slick.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/slick.css" />
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/common.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/common.css" />
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/css-hex.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/css-hex.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/jquery.mmenu.all.css">

    <!-- This site is optimized with the Yoast SEO plugin v7.9.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="Công ty Bảo hộ lao động tại Đà Nẵng, cung cấp bảo hộ lao động giá sĩ, miễn phí vận chuyển nội thành các mặt hàng. Quần áo Bảo hộ lao động. Giày bảo hộ lao động. Mũ bảo hộ lao động. Áo phản quang. Găng tay bảo hộ. Găng tay chống hóa chất. Găng tay phủ sơn. Khẩu trang hoạt tính. Mặt nạ phòng độc. Nút tai chống ồn. Bình chữa cháy. Vòi chữa cháy. Cọc tiêu giao thông. Cọc phân làn inox." />
    <link rel="canonical" href="https://baoholaodongdanang.com/" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="BẢO HỘ LAO ĐỘNG ĐÀ NẴNG - BẢO HỘ LAO ĐỘNG GIÁ SỈ" />
    <meta property="og:description" content="Công ty Bảo hộ lao động tại Đà Nẵng, cung cấp bảo hộ lao động giá sĩ, miễn phí vận chuyển nội thành các mặt hàng. Quần áo Bảo hộ lao động. Giày bảo hộ lao động. Mũ bảo hộ lao động. Áo phản quang. Găng tay bảo hộ. Găng tay chống hóa chất. Găng tay phủ sơn. Khẩu trang hoạt tính. Mặt nạ phòng độc. Nút tai chống ồn. Bình chữa cháy. Vòi chữa cháy. Cọc tiêu giao thông. Cọc phân làn inox." />
    <meta property="og:url" content="https://baoholaodongdanang.com/" />
    <meta property="og:site_name" content="Công ty TNHH Thương mại và Kỹ thuật Hưng Phương" />
    <meta property="og:image" content="https://baoholaodongdanang.com/wp-content/uploads/2021/12/Why-Workers-Dont-Wear-Personal-Protective-Equipment-PPE-1-e1639208371268.jpg" />
    <meta property="og:image:secure_url" content="https://baoholaodongdanang.com/wp-content/uploads/2021/12/Why-Workers-Dont-Wear-Personal-Protective-Equipment-PPE-1-e1639208371268.jpg" />
    <meta property="og:image:width" content="550" />
    <meta property="og:image:height" content="367" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Công ty Bảo hộ lao động tại Đà Nẵng, cung cấp bảo hộ lao động giá sĩ, miễn phí vận chuyển nội thành các mặt hàng. Quần áo Bảo hộ lao động. Giày bảo hộ lao động. Mũ bảo hộ lao động. Áo phản quang. Găng tay bảo hộ. Găng tay chống hóa chất. Găng tay phủ sơn. Khẩu trang hoạt tính. Mặt nạ phòng độc. Nút tai chống ồn. Bình chữa cháy. Vòi chữa cháy. Cọc tiêu giao thông. Cọc phân làn inox." />
    <meta name="twitter:title" content="BẢO HỘ LAO ĐỘNG ĐÀ NẴNG - BẢO HỘ LAO ĐỘNG GIÁ SỈ" />
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/html/images/cropped-logo-uchat-1-32x32.jpg" sizes="32x32" />




</head>

<body data-rsssl="1" class="home blog woocommerce-no-js">
    <div id="wrapper">
        <?php get_header(); ?>
        <div id="content">
        <div id="main-content" class="wrap__page">
            <div class="container">
            <div class="bread-crumb">
                    <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a>','</a>' );
                            }
                        ?>
                    </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box_mucluc">
                            <div class="fix-toc">
                                <div class="toctitle" style="line-height: 25px;"><img class="toctoggle"
                                        src="https://cdn.thuvienphapluat.vn/images/mluc.png"
                                        alt="Mục lục bài viết" />Mục lục bài viết</div>
                                <ul>
                                    <li class="toclevel-1">
                                        <a href="javascript:void(0)" onclick="_scrollTo('ancho1')"><span
                                                class="id-list">1. Đánh giá tác động môi trường là gì?</span></a>
                                    </li>
                                    <li class="toclevel-1">
                                        <a href="javascript:void(0)" onclick="_scrollTo('ancho2')"><span
                                                class="id-list">2. Đối tượng phải thực hiện đánh giá tác động môi
                                                trường</span></a>
                                    </li>
                                    <li class="toclevel-1">
                                        <a href="javascript:void(0)" onclick="_scrollTo('ancho3')"><span
                                                class="id-list">3. Thời điểm, đối tượng thực hiện đánh giá tác động môi
                                                trường</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="newcontent">
                            <p>
                                <img alt="Đánh giá tác động môi trường là gì? Đối tượng nào phải thực hiện?"
                                    src="https://cdn.thuvienphapluat.vn//uploads/tintuc/2022/04/25/danh-gia-tac-dong-moi-truong.jpg"
                                    style="width: 560px; height: 467px;" />
                            </p>

                            <p><em>Đánh giá tác động môi trường là gì? Đối tượng nào phải thực hiện? (Ảnh
                                    minh họa)</em></p>
                        </div><br>

                        <h2 id="ancho1">
                            <span class="id-list" style="font-size: 14px;"><strong>1. Đánh giá tác động môi trường
                                    là gì?</strong></span>
                        </h2>
                        <p>Đánh giá tác động môi trường là quá trình phân tích, đánh giá, nhận dạng, dự báo tác động
                            đến môi trường của dự án đầu tư và đưa ra biện pháp giảm thiểu tác động xấu đến môi
                            trường.</p>

                        <p>(Khoản 7 Điều 3 <a
                                href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                target="_blank">Luật Bảo vệ môi trường 2020</a>)</p>
                        <br>
                        <h2 id="ancho2">
                            <span class="id-list" style="font-size: 14px;"><strong>2. Đối tượng phải thực hiện đánh giá
                                    tác động môi trường</strong></span>
                        </h2>

                        <p>Đối tượng phải thực hiện đánh giá tác động môi trường bao gồm:</p>

                        <p>- Dự án đầu tư nhóm I, bao gồm:</p>

                        <p>
                            + Dự án thuộc loại hình sản xuất, kinh doanh, dịch vụ có nguy cơ gây ô nhiễm môi trường
                            với quy mô, công suất lớn; dự án thực hiện dịch vụ xử lý chất thải nguy hại; dự án có
                            nhập khẩu phế liệu từ nước ngoài làm nguyên liệu sản
                            xuất;
                        </p>

                        <p>
                            + Dự án thuộc loại hình sản xuất, kinh doanh, dịch vụ có nguy cơ gây ô nhiễm môi trường
                            với quy mô, công suất trung bình nhưng có yếu tố nhạy cảm về môi trường; dự án không
                            thuộc loại hình sản xuất, kinh doanh, dịch vụ có nguy
                            cơ gây ô nhiễm môi trường với quy mô, công suất lớn nhưng có yếu tố nhạy cảm về môi
                            trường;
                        </p>

                        <p>+ Dự án sử dụng đất, đất có mặt nước, khu vực biển với quy mô lớn hoặc với quy mô trung
                            bình nhưng có yếu tố nhạy cảm về môi trường;</p>

                        <p>+ Dự án khai thác khoáng sản, tài nguyên nước với quy mô, công suất lớn hoặc với quy mô,
                            công suất trung bình nhưng có yếu tố nhạy cảm về môi trường;</p>

                        <p>+ Dự án có yêu cầu chuyển mục đích sử dụng đất quy mô trung bình trở lên nhưng có yếu tố
                            nhạy cảm về môi trường;</p>

                        <p>+ Dự án có yêu cầu di dân, tái định cư với quy mô lớn.</p>

                        <p>- Một số dự án đầu tư nhóm II, bao gồm:</p>

                        <p>+ Dự án sử dụng đất, đất có mặt nước, khu vực biển với quy mô trung bình hoặc với quy mô
                            nhỏ nhưng có yếu tố nhạy cảm về môi trường;</p>

                        <p>+ Dự án khai thác khoáng sản, tài nguyên nước với quy mô, công suất trung bình hoặc với
                            quy mô, công suất nhỏ nhưng có yếu tố nhạy cảm về môi trường;</p>

                        <p>+ Dự án có yêu cầu chuyển mục đích sử dụng đất với quy mô nhỏ nhưng có yếu tố nhạy cảm về
                            môi trường;</p>

                        <p>+ Dự án có yêu cầu di dân, tái định cư với quy mô trung bình.</p>

                        <p>
                            <strong><em>Lưu ý:</em></strong> Các đối tượng trên thuộc dự án đầu tư công khẩn cấp
                            theo quy định của pháp luật về đầu tư công không phải thực hiện đánh giá tác động môi
                            trường.
                        </p>

                        <p>(Điều 30 <a
                                href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                target="_blank">Luật Bảo vệ môi trường 2020</a>)</p>

                        <h2 id="ancho3">
                            <span class="id-list" style="font-size: 14px;"><strong>3. Thời điểm, đối tượng thực hiện
                                    đánh giá tác
                                    động môi trường</strong></span>
                        </h2>

                        <p>- Đánh giá tác động môi trường do chủ dự án đầu tư tự thực hiện hoặc thông qua đơn vị tư
                            vấn có đủ điều kiện thực hiện.</p>

                        <p>- Đánh giá tác động môi trường được thực hiện đồng thời với quá trình lập báo cáo nghiên
                            cứu khả thi hoặc tài liệu tương đương với báo cáo nghiên cứu khả thi của dự án.</p>

                        <p>- Kết quả đánh giá tác động môi trường được thể hiện bằng báo cáo đánh giá tác động môi
                            trường.</p>

                        <p>- Mỗi dự án đầu tư lập một báo cáo đánh giá tác động môi trường.</p>

                        <p>(Điều 31 <a
                                href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                target="_blank">Luật Bảo vệ môi trường 2020</a>)</p>

                    </div>
                </div>

                <!-- #secondary -->
            </div>
        </div>
    </div>
        <?php get_footer(); ?>