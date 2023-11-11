<!DOCTYPE html>
<html lang="en">

<head>
  <title> Courses </title>
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

<body class="t-white">
  <!-- page loader start -->
  <div class="page-loader js-page-loader">
    <div></div>
  </div>
  <!-- page loader end -->
  <!-- main start -->
  <!-- header start -->
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
          <li class="menu-item"><a href="index.php">Home</a></li>
          <li class="menu-item menu-item-has-children">
            <a href="#" class="js-toggle-sub-menu">Chuyên ngành <i class="fas fa-chevron-down"></i></a>
            <ul class="sub-menu js-sub-menu">

              <li class="sub-menu-item text-center"><a href="">AD</a></li>
              <li class="sub-menu-item text-center"><a href="courses">DA</a></li>
              <li class="sub-menu-item text-center"><a href="">NS</a></li>
              <li class="sub-menu-item text-center"><a href="">BA</a></li>

            </ul>
          </li>
          <li class="menu-item"><a href="contact.php">Liên hệ</a></li>
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


  <!-- Breadcrumb Start -->
  <div class="container-fluid">
    <div class="container">
      <nav class="breadcrumb bg-transparent m-0 p-0">
        <a class="breadcrumb-item" href="index.php">Home</i></a>
        <a class="breadcrumb-item" href="#">các khoá học</a>

      </nav>
    </div>
  </div>
  <!-- Breadcrumb End -->


  <!-- courses section start -->
  <section class="courses-section section-padding">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-md-8 ">
          <div class="section-title text-center">
            <p class="sub-title">Các môn cơ sở ngành</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <nav>
            <div class="nav nav-tabs border-0 justify-content-center mb-4" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">IT</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">BA</button>
  
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <!-- AD -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="row justify-content-center">
                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/web-development/webdeve.jpeg" alt="course img">
                        </div>
                        <h3 class="title">Thiết kế web</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Cô Huyền Trân - VKU</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>

                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end-->

                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/web-development/dataAlgorithms.jpg" alt="course img">
                        </div>
                        <h3 class="title">Cấu trúc dữ liệu và giải thuật</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Thầy Hiển - VKU</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>

                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end-->

                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/web-development/oop.jpg" alt="course img">
                        </div>
                        <h3 class="title">Lập trình hướng đối tượng</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Thầy Ngọc Thọ - VKU</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>

                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end-->

                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/web-development/webdeveloper.jpg" alt="course img">
                        </div>
                        <h3 class="title">Lập trình web/JS cơ bản</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Thầy Hùng - DUT</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>

                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end-->
              </div>

            </div>
            <!-- AD end -->
            <!-- IT -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="row justify-content-center">
                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/economic/11.png" alt="course img">
                        </div>
                        <h3 class="title">Kinh tế vĩ mô 1</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Thầy Thanh - VKU</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>

                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end-->

                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/economic/11.png" alt="course img">
                        </div>
                        <h3 class="title">Kinh tế vĩ mô 2</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Thầy Thanh - VKU</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>

                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end-->
                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/economic/22.png" alt="course img">
                        </div>
                        <h3 class="title">Kinh tế vi mô 1</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Thầy Thanh - VKU</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>

                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end-->
                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/economic/22.png" alt="course img">
                        </div>
                        <h3 class="title">Kinh tế vi mô 2</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Thầy Thanh - VKU</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>

                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end-->
              </div>
            </div>
            <!-- IT end-->
            <!-- BA -->
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <div class="row justify-content-center">
                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/web-development/webdeveloper.jpg" alt="course img">
                        </div>
                        <h3 class="title">Thiết kế web</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Cô Huyền Trân - VKU</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>

                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end-->



              </div>
              <!-- BA end -->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-4">
          <!-- pagination start -->
          <nav aria-label="Page navigation ">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <i class="fa fa-chevron-left"></i>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">20</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <i class="fa fa-chevron-right"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </section>
  <!-- courses section end -->

  <!-- courses section start -->
  <section class="courses-section section-padding">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-md-8 ">
          <div class="section-title text-center">
            <p class="sub-title">Các môn chuyên ngành</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <nav>
            <div class="nav nav-tabs border-0 justify-content-center mb-4" id="nav-tab1" role="tablist">
              <button class="nav-link active" id="nav-home-tab1" data-bs-toggle="tab" data-bs-target="#nav-home1" type="button" role="tab" aria-controls="nav-home1" aria-selected="true">AD</button>
              <button class="nav-link" id="nav-profile-tab1" data-bs-toggle="tab" data-bs-target="#nav-profile1" type="button" role="tab" aria-controls="nav-profile1" aria-selected="false">DA</button>
              <button class="nav-link" id="nav-contact-tab1" data-bs-toggle="tab" data-bs-target="#nav-contact1" type="button" role="tab" aria-controls="nav-contact1" aria-selected="false">NS</button>
            </div>
          </nav>
      
          <div class="tab-content" id="nav-tabContent1">
            <!-- AD -->
            <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab1">
              <div class="row justify-content-center">
                <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/chuyen/1.jpg" alt="course img">
                        </div>
                        <h3 class="title">Tổng quan khoa học dữ liệu</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Thầy Hùng - DUT</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>
                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end -->
                   <!-- courses item start -->
                   <div class="col-md-6 col-lg-3">
                    <div class="courses-item">
                      <a href="course-details.php" class="link">
                        <div class="courses-item-inner">
                          <div class="img-box">
                            <img src="img/courses/chuyen/1.jpg" alt="course img">
                          </div>
                          <h3 class="title">Tổng quan khoa học dữ liệu</h3>
                          <div class="instructor">
                            <img src="img/instructor/1.png" alt="instructor img">
                            <span class="instructor-name">Thầy Hùng - DUT</span>
                          </div>
                          <div class="rating">
                            <span class="average-rating">(4.5)</span>
                            <span class="average-stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="reviews">(230)</span>
                          </div>
                          <div class="price">$ 49</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- courses item end -->
                     <!-- courses item start -->
                <div class="col-md-6 col-lg-3">
                  <div class="courses-item">
                    <a href="course-details.php" class="link">
                      <div class="courses-item-inner">
                        <div class="img-box">
                          <img src="img/courses/chuyen/1.jpg" alt="course img">
                        </div>
                        <h3 class="title">Tổng quan khoa học dữ liệu</h3>
                        <div class="instructor">
                          <img src="img/instructor/1.png" alt="instructor img">
                          <span class="instructor-name">Thầy Hùng - DUT</span>
                        </div>
                        <div class="rating">
                          <span class="average-rating">(4.5)</span>
                          <span class="average-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>
                          <span class="reviews">(230)</span>
                        </div>
                        <div class="price">$ 49</div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- courses item end -->
                   <!-- courses item start -->
                   <div class="col-md-6 col-lg-3">
                    <div class="courses-item">
                      <a href="course-details.php" class="link">
                        <div class="courses-item-inner">
                          <div class="img-box">
                            <img src="img/courses/chuyen/1.jpg" alt="course img">
                          </div>
                          <h3 class="title">Tổng quan khoa học dữ liệu</h3>
                          <div class="instructor">
                            <img src="img/instructor/1.png" alt="instructor img">
                            <span class="instructor-name">Thầy Hùng - DUT</span>
                          </div>
                          <div class="rating">
                            <span class="average-rating">(4.5)</span>
                            <span class="average-stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="reviews">(230)</span>
                          </div>
                          <div class="price">$ 49</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- courses item end -->
              </div>
            </div>
            <!-- AD end -->
      
            <!-- IT -->
            <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab1">
              <div class="row justify-content-center">
                <!-- IT content here -->
                   <!-- courses item start -->
                   <div class="col-md-6 col-lg-3">
                    <div class="courses-item">
                      <a href="course-details.php" class="link">
                        <div class="courses-item-inner">
                          <div class="img-box">
                            <img src="img/courses/chuyen/2.jpg" alt="course img">
                          </div>
                          <h3 class="title">Đồ hoạ máy tính</h3>
                          <div class="instructor">
                            <img src="img/instructor/1.png" alt="instructor img">
                            <span class="instructor-name">Thầy Hùng - DUT</span>
                          </div>
                          <div class="rating">
                            <span class="average-rating">(4.5)</span>
                            <span class="average-stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="reviews">(230)</span>
                          </div>
                          <div class="price">$ 49</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- courses item end -->
                       <!-- courses item start -->
                       <div class="col-md-6 col-lg-3">
                        <div class="courses-item">
                          <a href="course-details.php" class="link">
                            <div class="courses-item-inner">
                              <div class="img-box">
                                <img src="img/courses/chuyen/2.jpg" alt="course img">
                              </div>
                              <h3 class="title">Đồ hoạ máy tính</h3>
                              <div class="instructor">
                                <img src="img/instructor/1.png" alt="instructor img">
                                <span class="instructor-name">Thầy Hùng - DUT</span>
                              </div>
                              <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                                </span>
                                <span class="reviews">(230)</span>
                              </div>
                              <div class="price">$ 49</div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <!-- courses item end -->
                           <!-- courses item start -->
                   <div class="col-md-6 col-lg-3">
                    <div class="courses-item">
                      <a href="course-details.php" class="link">
                        <div class="courses-item-inner">
                          <div class="img-box">
                            <img src="img/courses/chuyen/2.jpg" alt="course img">
                          </div>
                          <h3 class="title">Đồ hoạ máy tính</h3>
                          <div class="instructor">
                            <img src="img/instructor/1.png" alt="instructor img">
                            <span class="instructor-name">Thầy Hùng - DUT</span>
                          </div>
                          <div class="rating">
                            <span class="average-rating">(4.5)</span>
                            <span class="average-stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="reviews">(230)</span>
                          </div>
                          <div class="price">$ 49</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- courses item end -->
                       <!-- courses item start -->
                       <div class="col-md-6 col-lg-3">
                        <div class="courses-item">
                          <a href="course-details.php" class="link">
                            <div class="courses-item-inner">
                              <div class="img-box">
                                <img src="img/courses/chuyen/2.jpg" alt="course img">
                              </div>
                              <h3 class="title">Đồ hoạ máy tính</h3>
                              <div class="instructor">
                                <img src="img/instructor/1.png" alt="instructor img">
                                <span class="instructor-name">Thầy Hùng - DUT</span>
                              </div>
                              <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                                </span>
                                <span class="reviews">(230)</span>
                              </div>
                              <div class="price">$ 49</div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <!-- courses item end -->
              </div>
            </div>
            <!-- IT end -->
      
            <!-- BA -->
            <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">
              <div class="row justify-content-center">
                <!-- BA content here -->
                   <!-- courses item start -->
                   <div class="col-md-6 col-lg-3">
                    <div class="courses-item">
                      <a href="course-details.php" class="link">
                        <div class="courses-item-inner">
                          <div class="img-box">
                            <img src="img/courses/chuyen/3.png" alt="course img">
                          </div>
                          <h3 class="title">Mạng máy tính</h3>
                          <div class="instructor">
                            <img src="img/instructor/1.png" alt="instructor img">
                            <span class="instructor-name">Thầy Hùng - DUT</span>
                          </div>
                          <div class="rating">
                            <span class="average-rating">(4.5)</span>
                            <span class="average-stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="reviews">(230)</span>
                          </div>
                          <div class="price">$ 49</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- courses item end -->
                       <!-- courses item start -->
                       <div class="col-md-6 col-lg-3">
                        <div class="courses-item">
                          <a href="course-details.php" class="link">
                            <div class="courses-item-inner">
                              <div class="img-box">
                                <img src="img/courses/chuyen/3.png" alt="course img">
                              </div>
                              <h3 class="title">Mạng máy tính</h3>
                              <div class="instructor">
                                <img src="img/instructor/1.png" alt="instructor img">
                                <span class="instructor-name">Thầy Hùng - DUT</span>
                              </div>
                              <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                                </span>
                                <span class="reviews">(230)</span>
                              </div>
                              <div class="price">$ 49</div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <!-- courses item end -->
                           <!-- courses item start -->
                   <div class="col-md-6 col-lg-3">
                    <div class="courses-item">
                      <a href="course-details.php" class="link">
                        <div class="courses-item-inner">
                          <div class="img-box">
                            <img src="img/courses/chuyen/3.png" alt="course img">
                          </div>
                          <h3 class="title">Mạng máy tính</h3>
                          <div class="instructor">
                            <img src="img/instructor/1.png" alt="instructor img">
                            <span class="instructor-name">Thầy Hùng - DUT</span>
                          </div>
                          <div class="rating">
                            <span class="average-rating">(4.5)</span>
                            <span class="average-stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="reviews">(230)</span>
                          </div>
                          <div class="price">$ 49</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- courses item end -->
                       <!-- courses item start -->
                       <div class="col-md-6 col-lg-3">
                        <div class="courses-item">
                          <a href="course-details.php" class="link">
                            <div class="courses-item-inner">
                              <div class="img-box">
                                <img src="img/courses/chuyen/3.png" alt="course img">
                              </div>
                              <h3 class="title">Mạng máy tính</h3>
                              <div class="instructor">
                                <img src="img/instructor/1.png" alt="instructor img">
                                <span class="instructor-name">Thầy Hùng - DUT</span>
                              </div>
                              <div class="rating">
                                <span class="average-rating">(4.5)</span>
                                <span class="average-stars">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                                </span>
                                <span class="reviews">(230)</span>
                              </div>
                              <div class="price">$ 49</div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <!-- courses item end -->
              </div>
            </div>
            <!-- BA end -->
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12 mt-4">
          <!-- pagination start -->
          <nav aria-label="Page navigation ">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <i class="fa fa-chevron-left"></i>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">20</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <i class="fa fa-chevron-right"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </section>



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
                <li class="mb-1">Địa chỉ: 470 Trần Đại Nghĩa, Khu Đô Thị Đại Học, Quận Ngũ Hành Sơn, Tp Đà Nẵng</li>

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

  <!-- main end -->

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
        <input class="form-check-input js-dark-mode" type="checkbox" role="switch" id="dark-mode" checked>
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