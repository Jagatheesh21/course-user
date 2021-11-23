@include('layouts.header')
<section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__right">
                        <div class="blog-one__single style2">
                            <div class="blog-one__single-img">
                                <img src="assets/images/blog/news-details-img1.jpg" alt=""/>
                            </div>
                            <div class="blog-one__single-content">
                                <div class="blog-one__single-content-overlay-mata-info">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><span class="icon-clock"></span>20 June</a></li>
                                        <li><a href="#"><span class="icon-user"></span>Admin </a></li>
                                        <li><a href="#"><span class="icon-chat"></span> Comments</a></li>
                                    </ul>
                                </div>
                                <h2 class="blog-one__single-content-title">Helping Answers Stand out in Discussions</h2>
                            </div>
                        </div>

                        <div class="news-details__text1">
                            <p>Tliq is notm hendr erit a augue insu image pellen tes que id erat quis sollicitud. Lorem ipsum dolor sit amet, consectetur adipiscing ullam blandit hendrerit faucibus suspendisse. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                        </div>
                        <div class="news-details__text2">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum ley of type and scrambled it to make a type specimen book.</p>
                        </div>

                        <div class="news-details__text3">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including version.</p>
                        </div>

                        <!--Start News Details Bottom -->
                        <div class="news-details__bottom">
                            <p class="news-details__tags">
                                <span>Tags</span>
                                <a href="#">Education</a>
                                <a href="#">Courses</a>
                            </p>
                            <div class="news-details__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!--End News Details Bottom -->

                        <!--Start Author One -->
                        <div class="author-one">
                            <div class="author-one__image">
                                <img src="assets/images/blog/news-details-author.jpg" alt="">
                            </div>
                            <div class="author-one__content">
                                <h3>Kevin Martin</h3>
                                <p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there.</p>
                            </div>
                        </div>
                        <!--End Author One -->

                        <!--Start Comment One -->
                        <div class="comment-one">
                            <h3 class="comment-one__title">2 Comments</h3>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-img1.png" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <div class="comment-one__content-top">
                                        <div class="comment-one__content-text">
                                            <h3>David Marks<span>3 hours ago</span></h3>
                                        </div>
                                        <div class="comment-one__content-btn">
                                            <a href="#" class="thm-btn">Reply</a>
                                        </div>
                                    </div>
                                    <p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs <br>condmentum lightly believable. If you are going to use a of <br> you need to be sure there.</p>
                                </div>
                            </div>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-img2.png" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <div class="comment-one__content-top">
                                        <div class="comment-one__content-text">
                                            <h3>David Marks<span>3 hours ago</span></h3>
                                        </div>
                                        <div class="comment-one__content-btn">
                                            <a href="#" class="thm-btn">Reply</a>
                                        </div>
                                    </div>
                                    <p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs <br>condmentum lightly believable. If you are going to use a of <br>you need to be sure there.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Comment One -->

                        <!--Start Comment Form -->
                        <div class="comment-form">
                            <h3 class="comment-form__title">Leave a Comment</h3>
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Comment Form -->
                    </div>
                </div>

                <!--Start Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search wow fadeInUp animated animated animated" data-wow-delay="0.1s" data-wow-duration="1200m">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.1s">
                            <h3 class="sidebar__title">Recent Posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/recent-posts-img1.png" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p><a href="#"><i class="far fa-user-circle"></i>Admin</a></p>
                                                <h3><a href="news-details.html">Learn how access to new courses</a></h3>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/recent-posts-img2.png" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p><a href="#"><i class="far fa-user-circle"></i>Admin</a></p>
                                                <h3><a href="news-details.html">Learn how access to new courses</a></h3>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/recent-posts-img3.png" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p><a href="#"><i class="far fa-user-circle"></i>Admin</a></p>
                                                <h3><a href="news-details.html">Learn how access to new courses</a></h3>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__category wow fadeInUp animated" data-wow-delay="0.3s">
                            <h3 class="sidebar__title">All Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Programing</a></li>
                                <li class="active"><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Teaching & Academics</a></li>
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Health & Fitness</a></li>
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Business</a></li>
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Art & Design</a></li>
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Education</a></li>
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__tags wow fadeInUp animated" data-wow-delay="0.5s">
                            <h3 class="sidebar__title">Tags</h3>
                            <ul class="sidebar__tags-list list-unstyled">
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Programing</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Teachings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
@include('layouts.footer')
