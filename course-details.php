<!DOCTYPE html>
<html lang="en">

<head>
    <title> course details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/course-details-style.css">

    <link rel="stylesheet" href="css/duy.css">

    <link rel="stylesheet" href="css/switcher.css">

    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" class="js-glass-style" href="css/glass.css" disabled>

    <link rel="stylesheet" class="js-color-style" href="css/colors/color-2.css">

<body class="t-dark">
    <!-- page loader start -->
    <div class="page-loader js-page-loader">
        <div></div>
    </div>
    <!-- page loader end -->
    <!-- main start -->
    <!-- header start -->
    <header class="header">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="header-logo b">
                <a href="index"><span>Uni</span>Cou</a>
            </div>

            <button type="button" class="header-hamburger-btn js-header-menu-toggler">
                <span><i class="fa-solid fa-bars" style="font-size: 28px;color:var(--black-70);"></i></span>
            </button>

            <div class="header-backdrop js-header-backdrop"></div>

            <nav class="header-menu js-header-menu">
                <button type="button" class="header-close-btn js-header-menu-toggler">
                    <i class="fas fa-times"></i>
                </button>
                <ul class="menu">
                    <li class="menu-item"><a href="index">Home</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" class="js-toggle-sub-menu">Chuyên ngành <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu js-sub-menu">

                            <li class="sub-menu-item text-center"><a href="">AD</a></li>
                            <li class="sub-menu-item text-center"><a href="courses">DA</a></li>
                            <li class="sub-menu-item text-center"><a href="">NS</a></li>
                            <li class="sub-menu-item text-center"><a href="">BA</a></li>

                        </ul>
                    </li>
                    <li class="menu-item"><a href="contact">Liên hệ</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" class="js-toggle-sub-menu">Tài khoản <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu js-sub-menu">
                            <li class="sub-menu-item"><a href="log-in">Đăng Nhập</a></li>
                            <li class="sub-menu-item"><a href="sign-up">Đăng kí</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>

    </header>
    <!-- header end -->

    <!-- breadcrumb start -->
    <div class="breadcrumb-nav">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item"><a href="courses">Courses</a></li>
                    <li class="breadcrumb-item den" aria-current="page">Courses Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- course details section start -->
    <section class="course-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- course header start  -->
                    <div class="course-header box">
                        <h2 class="text-capitalize">Lập trình web/JS cơ bản</h2>
                        <div class="rating">
                            <span class="average-rating">(4.5)</span>
                            <span class="average-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="reviews">
                                (230 Reviews)
                            </span>
                        </div>
                        <ul>
                            <li>Số người đang học - <span>2200</span></li>
                            <li>Giảng viên -<span><a href="#">Nguyễn Văn Hùng</a></span></li>
                            <li>Cập nhật lần cuối -<span>10/06/2023</span></li>
                            <li>Ngôn ngữ -<span>Tiếng Anh</span></li>
                        </ul>
                    </div>
                    <!-- course header end  -->

                    <!-- course tabs start -->
                    <nav class="course-tabs">
                        <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="course-curriculum-tab" data-bs-toggle="tab"
                                data-bs-target="#course-curriculum" type="button" role="tab"
                                aria-controls="course-curriculum" aria-selected="true">Nội dung học tập</button>
                            <button class="nav-link" id="course-description-tab" data-bs-toggle="tab"
                                data-bs-target="#course-description" type="button" role="tab"
                                aria-controls="course-description" aria-selected="false">Mô tả</button>
                            <button class="nav-link" id="course-instructor-tab" data-bs-toggle="tab"
                                data-bs-target="#course-instructor" type="button" role="tab"
                                aria-controls="course-instructor" aria-selected="false">Về tác giả</button>
                            <button class="nav-link" id="course-reviews-tab" data-bs-toggle="tab"
                                data-bs-target="#course-reviews" type="button" role="tab" aria-controls="course-reviews"
                                aria-selected="false">Reviews</button>
                        </div>
                    </nav>
                    <!-- course tabs end -->

                    <!-- tab panes start -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- course curriculum start -->
                        <div class="tab-pane fade show active" id="course-curriculum" role="tabpanel"
                            aria-labelledby="course-curriculum-tab">
                            <div class="course-curriculum box">
                                <h3 class="text-capitalize mb-4">Nội dung học tập</h3>
                                <!-- accordion start -->
                                <div class="accordion" id="accordion">
                                    <!-- accordion item start -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="true"
                                                aria-controls="collapse-1">
                                                Cơ bản <span>4 bài | 24 phút</span>
                                            </button>
                                        </h2>
                                        <div id="collapse-1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading-1" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Lexical structure
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Values
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Types
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Variables
                                                        <span>06:00</span>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion item end -->
                                    <!-- accordion item start -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                                aria-expanded="false" aria-controls="collapse-2">
                                                Types <span>3 bài | 18 phút</span>
                                            </button>
                                        </h2>
                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            aria-labelledby="heading-2" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Strings
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Booleans
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Null and undefined
                                                        <span>06:00</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion item end -->
                                    <!-- accordion item start -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                aria-expanded="false" aria-controls="collapse-3">
                                                Control structure <span>3 bài | 18 phút</span>
                                            </button>
                                        </h2>
                                        <div id="collapse-3" class="accordion-collapse collapse"
                                            aria-labelledby="heading-3" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        If / else
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Switch
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Loops
                                                        <span>06:00</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion item end -->
                                    <!-- accordion item start -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                aria-expanded="false" aria-controls="collapse-4">
                                                Function <span>4 bài | 24 phút</span>
                                            </button>
                                        </h2>
                                        <div id="collapse-4" class="accordion-collapse collapse"
                                            aria-labelledby="heading-4" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Arrow function
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Parameters
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Return value
                                                        <span>06:00</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-play-circle"></i>
                                                        Recursion
                                                        <span>06:00</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion item end -->

                                </div>
                                <!-- accordion end -->

                            </div>
                        </div>
                        <!-- course curriculum end -->

                        <!-- course description start -->
                        <div class="tab-pane fade show active" id="course-description" role="tabpanel"
                            aria-labelledby="course-description-tab">
                            <div class="course-description box">
                                <h3 class="text-capitalize mb-4">Mô tả</h3>
                                <p>Với hơn hàng trăm videos được xây dựng kỹ càng và tỉ mỉ, trau chuốt nội dung. Mình
                                    tin rằng nội dung mà mình truyền đạt cho các bạn trong khoá học này sẽ giúp các bạn
                                    học được Javascript một cách hiệu quả và dễ dàng hơn bao giờ hết. Sau thành công 2
                                    khoá về HTML CSS mình tiếp tục làm ra khoá Javascript này, là ngôn ngữ tiếp theo mà
                                    các bạn cần phải học để trở thành một Frontend Developer thực thụ. Còn chờ gì nữa mà
                                    không sở hữu ngay khoá học chất lượng này nào.</p>
                                <h4>Khóa học này dành cho ai ?</h4>
                                <p>Bạn đang là sinh viên năm 2, 3 hoặc năm cuối Cao Đẳng hoặc Đại học CNTT đã vững kiến
                                    thức Tư duy lập trình & Lập trình hướng đối tượng. Bạn là người đi làm trái nghề
                                    nhưng yêu thích CNTT và muốn theo đuổi nó từ đầu, là sinh viên IT, Tester, Điện tử,
                                    Cơ điện tử, Kinh tế, Ngân hàng, ... mong muốn chuyển nghề, đam mê CNTT từ trước
                                    nhưng chưa có cơ hội học và đây là thời điểm bạn mong muốn được tham gia lại từ đầu.
                                </p>
                                <h4>Tại sao bạn nên tham gia khóa học này?</h4>
                                <p>JavaScript là ngôn ngữ lập trình phía client được sử dụng rộng rãi nhất trên web. Nó
                                    được sử dụng để tạo ra các chức năng tương tác, kiểm soát trang web và cải thiện
                                    trải nghiệm người dùng. Nếu bạn muốn trở thành một nhà phát triển web chuyên nghiệp,
                                    thì học JavaScript là rất quan trọng. Nếu bạn có kiến thức về JavaScript, bạn sẽ có
                                    thể tạo ra các trang web động, ứng dụng web và các tính năng tương tác phức tạp hơn.
                                    Cuối cùng, học JavaScript cũng sẽ giúp bạn tăng khả năng tìm việc làm và cơ hội phát
                                    triển sự nghiệp của mình trong lĩnh vực công nghệ. </p>
                            </div>
                        </div>
                        <!-- course description end -->

                        <!-- course instructor start -->
                        <div class="tab-pane fade show active" id="course-instructor" role="tabpanel"
                            aria-labelledby="course-instructor-tab">
                            <div class="course-instructor box">
                                <h3 class="text-capitalize mb-3">Tác giả</h3>
                                <div class="instructor-details">
                                    <div class="details-wrap d-flex align-items-center flex-wrap">
                                        <div class="left-box me-4">
                                            <div class="img-box">
                                                <img class="rounded-circle" src="./img/instructor/1.png"
                                                    alt="instructor img">
                                            </div>
                                        </div>
                                        <div class="right-box">
                                            <h4>Nguyễn Văn Hùng <span>(Giảng Viên DUT - ĐHĐN)</span></h4>
                                            <ul>
                                                <li><i class="fas fa-star"></i> 4.5 Rating</li>
                                                <li><i class="fas fa-play-circle"></i>10 Khóa học</li>
                                                <li><i class="fas fa-certificate"></i> 3000 Reviews</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="mb-0">Với hơn 10 năm kinh nghiệm giảng dạy, anh ta đã truyền đạt kiến thức và hướng dẫn hàng trăm sinh viên thành công trong lĩnh vực Công nghệ Thông tin. Anh ta có sự am hiểu sâu sắc về các nguyên tắc và khái niệm quan trọng, và biết cách truyền đạt chúng một cách dễ hiểu và thú vị.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- course instructor end -->

                        <!-- course reviews start -->
                        <div class="tab-pane fade show active" id="course-reviews" role="tabpanel"
                            aria-labelledby="course-reviews-tab">
                            <div class="course-reviews box">
                                <!-- rating summary start -->
                               
                                <!-- rating summary end -->

                                <!-- reviews filter start -->
                                <div class="reviews-filter">
                                    <h3 class="mb-4 text-capitalize">Đánh giá</h3>
                                    <form action="">
                                        <div class="form-group">
                                            <i class="fas fa-chevron-down select-icon"></i>
                                            <select class="form-control">
                                                <option value="">Tất cả đánh giá</option>
                                                <option value="1">1 Sao</option>
                                                <option value="2">2 Sao</option>
                                                <option value="3">3 Sao</option>
                                                <option value="4">4 Sao</option>
                                                <option value="5">5 Sao</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <!-- reviews filter end -->

                                <!-- reviews list start  -->
                                <div class="reviews-list">
                                    <!-- reviews item start -->
                                    <div class="reviews-item">
                                        <div class="img-box">
                                            <img src="./img/review/1.png" alt="review img">
                                        </div>
                                        <h4>Nguyễn Mạnh Hiếu</h4>
                                        <div class="stars-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="date"></span>
                                        </div>
                                        <p>Khóa học hay ạ, chi tiết dễ hiểu giảng viên tận tâm, chỉ tận tình, bài giảng
                                            chi tiết, không phàn nàn gì cả</p>
                                    </div>
                                    <!-- reviews item end -->
                                    <!-- reviews item start -->
                                    <div class="reviews-item">
                                        <div class="img-box">
                                            <img src="./img/review/1.png" alt="review img">
                                        </div>
                                        <h4>Định Đồng</h4>
                                        <div class="stars-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="date"></span>
                                        </div>
                                        <p>Khóa học tuyệt vời. Tôi đã học được rất nhiều điều về javascript trong khóa
                                            học này</p>
                                    </div>
                                    <!-- reviews item end -->
                                    <!-- reviews item start -->
                                    <div class="reviews-item">
                                        <div class="img-box">
                                            <img src="./img/review/1.png" alt="review img">
                                        </div>
                                        <h4>Quang Phan</h4>
                                        <div class="stars-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="date"></span>
                                        </div>
                                        <p>Khóa học thật tuyệt, giáo viên dạy chi tiết, dễ hiểu, đều có ví dụ bài tập
                                            thực tế, quá xứng đáng 5 sao. Sẽ ủng hộ các khóa học tiếp theo</p>
                                    </div>
                                    <!-- reviews item end -->
                                </div>
                                <!-- reviews list end  -->
                                <button type="button" class="btn btn-theme">Đánh giá mới</button>
                            </div>
                        </div>
                        <!-- course reviews end -->

                    </div>
                    <!-- tab panes end -->

                </div>
                <div class="col-lg-4">
                    <!-- course sidebar start -->
                    <div class="course-sidebar box">
                        <div class="img-box position-relative" data-bs-toggle="modal" data-bs-target="#video-modal">
                            <img src="img/courses/web-development/intro.jpg" class="w-100" alt="course img">
                            <div class="play-icon">
                                <i class="fas fa-play"></i>
                            </div>
                            <p class="text-center">Xem giới thiệu khóa học</p>
                        </div>
                        <div class="price d-flex align-items-center mb-3">
                            <span class="price-old">$100</span>
                            <span class="price-new">$49</span>
                            <span class="price-discount">51% Off</span>
                        </div>
                        <h3 class="mb-3">Tính năng của khóa học</h3>
                        <ul class="features-list">
                            <li>Tổng 15 bài học</li>
                            <li>Bài kiểm tra trực tuyến</li>
                            <li>Cộng đồng học tập lớn</li>
                            <li>Giấy chứng nhận hoàn thành</li>
                        </ul>
                        <div class="btn-wrap">
                            <button class="btn btn-theme btn-block" type="button">Enroll Now</button>
                        </div>
                    </div>
                    <!-- course sidebar end -->

                </div>
            </div>
        </div>
    </section>
    <!-- course details section end -->


    <!-- footer start -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <h3 class="footer-logo"><span>Uni</span>Cou - khoá học chuẩn Đại học</h3>
                            <ul>
                                <li>Điện thoại: <a href="">0236.3667.117</a></li>
                                <li>Email: <a href="">de@vku.udn.vn</a></li>
                                <li class="mb-1">Địa chỉ: 470 Trần Đại Nghĩa, Khu Đô Thị Đại Học, Quận Ngũ Hành Sơn,
                                    Tp
                                    Đà Nẵng</li>

                                <li><a href=""><img src="img/dmca-protected.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <h3 class="footer-logo">Về Unicou</h3>
                            <ul>
                                <li><a href="">Giới thiệu</a></li>
                                <li><a href="">Liên hệ</a></li>
                                <li><a href="">Điều khoản</a></li>
                                <li><a href="">Bảo mật</a></li>
                                <li><a href="">Cơ hội việc làm</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <h3 class="footer-logo">Sản phẩm</h3>
                            <ul>
                                <li><a href="#">Game Nester</a></li>
                                <li><a href="#">Game CSS Diner</a></li>
                                <li><a href="#">Game CSS Selectors</a></li>
                                <li><a href="#">Game Froggy</a></li>
                                <li><a href="#">Game Froggy Pro</a></li>
                                <li><a href="#">Game Scoops</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <h3 class="footer-logo">Trường Đại học CNTT và truyền thông Việt-Hàn</h3>
                            <ul>
                                <li>Mã số thuế: 0109922902</li>
                                <li>Ngày thành lập: 04/03/2022</li>
                                <li>Lĩnh vực: Công nghệ, giáo dục, lập trình</li>
                                <li>VKU: Nhân bản - Phụng sự - Khai phóng</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="m-0 py-4 text-center">Copyright &copy; 2023 Lorem</p>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    </div>
    <!-- main wrapper end -->

    <!-- course preview modal start -->
    <div class="modal fade video-modal js-course-preview-modal" id="video-modal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="ratio ratio-16x9">
                        <video controls class="js-course-preview-video">
                            <source src="video/course-preview.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course preview modal start -->

    <!--style switcher start -->
    <div class="style-switcher js-style-switcher">
        <div class="style-switcher-toggler js-style-switcher-toggler">
            <i class="fa fa-cog"></i>
        </div>
        <h3>Chuyển đổi phong cách</h3>
        <div class="style-switcher-item">
            <p class="mb-2">Màu chủ đề</p>
            theme colors
            <div class="theme-color js-theme-colors">
                <button type="button" data-js-theme-color="color-1" class="js-theme-color-item color-1">
                </button>
                <button type="button" data-js-theme-color="color-2" class="js-theme-color-item color-2">
                </button>
                <button type="button" data-js-theme-color="color-3" class="js-theme-color-item color-3">
                </button>
                <button type="button" data-js-theme-color="color-4" class="js-theme-color-item color-4">
                </button>
                <button type="button" data-js-theme-color="color-5" class="js-theme-color-item color-5">
                </button>
            </div>
        </div>
        <div class="style-switcher-item">
            <div class="form-check form-switch">
                <input class="form-check-input js-dark-mode" type="checkbox" role="switch" id="dark-mode">
                <label class="form-check-label" for="dark-mode">Chế độ tối</label>
            </div>
        </div>
        <div class="style-switcher-item">
            <div class="form-check form-switch">
                <input class="form-check-input js-glass-effect" type="checkbox" role="switch" id="glass-effect">
                <label class="form-check-label" for="glass-effect">Hiệu ứng thủy tinh</label>
            </div>
        </div>
    </div>
    <!--style switcher end -->
    <script src="js/switcher.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>