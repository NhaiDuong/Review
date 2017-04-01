<!--cachetime:1491037733--><?php
			App::uses('PostsController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToicG9zdHMiO3M6NjoiYWN0aW9uIjtzOjU6ImluZGV4IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MDp7fXM6ODoibGFuZ3VhZ2UiO3M6MzoidmllIjtzOjY6Im1vZGVscyI7YToyOntzOjQ6IlBvc3QiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiUG9zdCI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MTp7czo3OiJrZXl3b3JkIjtzOjI6ImRnIjt9czozOiJ1cmwiO3M6MTU6InZpZS9wb3N0cy9pbmRleCI7czo0OiJiYXNlIjtzOjc6Ii9SZXZpZXciO3M6Nzoid2Vicm9vdCI7czo4OiIvUmV2aWV3LyI7czo0OiJoZXJlIjtzOjIzOiIvUmV2aWV3L3ZpZS9wb3N0cy9pbmRleCI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new PostsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTozOntzOjQ6Ikh0bWwiO047czo0OiJGb3JtIjtOO3M6NToiQ2FjaGUiO047fQ=='));
				$controller->layout = $this->layout = 'layout';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjY6ImxhdGVzdCI7YToxMDp7aTowO2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6Mjg6InNmYXMgYXNoZiBqaHNkZmggYXNqa2hmIGFsc2siO3M6NDoic2x1ZyI7czoyODoic2Zhcy1hc2hmLWpoc2RmaC1hc2praGYtYWxzayI7fX1pOjE7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoyNDoiNFRuM1EgYWJSNWsgWjlMWHcgNDk5NzE4IjtzOjQ6InNsdWciO3M6MjQ6IjR0bjNxLWFicjVrLXo5bHh3LTQ5OTcxOCI7fX1pOjI7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoyNDoicG5Uc0EgOXk5aGQgdlpWRlkgNDk5NzE0IjtzOjQ6InNsdWciO3M6MjQ6InBudHNhLTl5OWhkLXZ6dmZ5LTQ5OTcxNCI7fX1pOjM7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoyNDoiQzNiOGsgM3U1YkkgT29qZzAgNDk5NzE1IjtzOjQ6InNsdWciO3M6MjQ6ImMzYjhrLTN1NWJpLW9vamcwLTQ5OTcxNSI7fX1pOjQ7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoyNDoiVFNiWVcgU2F5S1kgOU1hN0ogNDk5NzE3IjtzOjQ6InNsdWciO3M6MjQ6InRzYnl3LXNheWt5LTltYTdqLTQ5OTcxNyI7fX1pOjU7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoyNDoiNzRXY1AgbVllalMgZHRoWjUgNDk5NzIwIjtzOjQ6InNsdWciO3M6MjQ6Ijc0d2NwLW15ZWpzLWR0aHo1LTQ5OTcyMCI7fX1pOjY7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoyNDoicUxMeHcgZzNxbWEgSTh4YTUgNDk5NzE5IjtzOjQ6InNsdWciO3M6MjQ6InFsbHh3LWczcW1hLWk4eGE1LTQ5OTcxOSI7fX1pOjc7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoyNDoiVUNtZUsgdnZad20gVDVIaEogNDk5NzIyIjtzOjQ6InNsdWciO3M6MjQ6InVjbWVrLXZ2endtLXQ1aGhqLTQ5OTcyMiI7fX1pOjg7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoyNDoiSFpUa3cgcEN2cEogNE94TmMgNDk5NzE2IjtzOjQ6InNsdWciO3M6MjQ6Imh6dGt3LXBjdnBqLTRveG5jLTQ5OTcxNiI7fX1pOjk7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoyNDoiWTRmUksgTFdxRDAgS1FaaEogNDk5NzIxIjtzOjQ6InNsdWciO3M6MjQ6Ink0ZnJrLWx3cWQwLWtxemhqLTQ5OTcyMSI7fX19czo0OiJ1c2VyIjtzOjE6IjEiO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czo3Nzg6IjwhLS0gU1RBUlQgUEFHRSBTT1VSQ0UgLS0+DQogICAgPGRpdiBpZD0iY29udGVudCI+DQogICAgICAgIDxkaXYgY2xhc3M9Im5vdGlmaWNhdGlvbiI+DQogICAgICAgICAgICA8aDI+PGRpdiBpZD0ibm9SZXN1bHRNZXNzYWdlIiBjbGFzcz0ibWVzc2FnZSI+S2jDtG5nIHTDrG0gdGjhuqV5IGvhur90IHF14bqjITwvZGl2PjwvaDI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgICAgIDxoMj48L2gyPg0KICAgICAgICAgICAgPGgyPjwvaDI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgICAgIDxoMj48L2gyPg0KICAgICAgICAgICAgPGgyPjwvaDI+DQogICAgICAgIDwvZGl2Pg0KICAgICAgPGRpdiBpZD0ibGVmdCI+DQogICAgICAgIDxkaXYgY2xhc3M9InBvc3QiPg0KICAgICAgICAgICAgPCEtLW5vY2FjaGU6MDAxLS0+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgIDwhLS1ub2NhY2hlOjAwMi0tPg0KICAgICAgICA8ZGl2IGNsYXNzPSJwYWdpbmF0aW9uIGNsZWFyIj4NCiAgICAgICAgICA8ZGl2IGNsYXNzPSJwcmUiPg0KICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icHJldiBkaXNhYmxlZCI+PC9zcGFuPiAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICA8ZGl2IGNsYXNzPSJuZXh0Ij4NCiAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9Im5leHQgZGlzYWJsZWQiPjwvc3Bhbj4gICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZGl2Pg0KICAgICAgPC9kaXY+DQoNCg0KPCEtLSBFTkQgUEFHRSBTT1VSQ0UgLS0+DQoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6NToiUG9zdHMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$controller->constructClasses();
				$controller->startupProcess();
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?>

<!DOCTYPE html>
<html>
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        <title>
                    </title>
        <link href="/Review/favicon.ico" type="image/x-icon" rel="icon" /><link href="/Review/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<link rel="stylesheet" type="text/css" href="/Review/css/main.css" />

	<script type="text/javascript" src="/Review/js/myScript.js"></script>
    </head>

    <div id="wrap">
        <div id="wrap-container">
            <div id="topnav">
                <h1 id="sitename">Blog</h1>
                <ul id="nav">
                    <li><a href="/Review/posts/index">Trang chủ</a></a></li>
                    <li><a href="/Review/posts/index">Liên hệ</a></a></li>
                    <li><a href="/Review/posts/index">Giới thiệu</a></a></li>
                    <!--nocache:003-->
                    <li>
                        <a href="/Review/users/logout">Đăng xuất</a>                    </li>
                </ul>
                <ul id="lang">
                    <li>
                        <a href="/Review/eng/posts/index">Eng</a>|<a href="/Review/vie/posts/index">Vie</a>                    </li>
                </ul>
                <!--nocache:004-->
            </div>
            <div id="header">
                <div id="featuredpost">
                    <div id="featuredthumb">
                        <img src="/Review/img/featuredimage.jpg" alt="featuredimage" class="shadow" width="200" height="135" />                    </div>
                    <div id="featuredcontent">
                        <h2><span>Hello World</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit facilisis viverra. Nullam id tristique arcu.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vehicula eros commodo est vestibulum cursus..
                            <span class="readmore">
                  <a href="#">đọc tiếp</a>
              </span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        <!-- START PAGE SOURCE -->
    <div id="content">
        <div class="notification">
            <h2><div id="noResultMessage" class="message">Không tìm thấy kết quả!</div></h2>
            <h2></h2>
            <h2></h2>
            <h2></h2>
            <h2></h2>
            <h2></h2>
            <h2></h2>
        </div>
      <div id="left">
        <div class="post">
            <!--nocache:001-->
                    </div>
          <!--nocache:002-->
        <div class="pagination clear">
          <div class="pre">
              <span class="prev disabled"></span>          </div>
          <div class="next">
              <span class="next disabled"></span>          </div>
        </div>
      </div>


<!-- END PAGE SOURCE -->
            <div id="sidebar">
                <div id="search">
                    <h2>Tìm kiếm</h2>
                    <form action="#">
                        <div id="searchfield">
                            <input type="text" name="keyword" class="keyword" />
                        </div>
                    </form>
                </div>
                <div id="sb_container">
                                        <h2>
                        <span class="list_user">
                              <a href="/Review/posts/add">Thêm bài viết</a>                        </span>
                    </h2>
                                        <h2>
                          <span class="list_user">
                              <a href="/Review/users">Danh sách thành viên</a>                          </span>
                    </h2>
                    <h2><span class="list_user">
                            <a href="#" onclick="return false;">Bài viết trước</a>                        </span></h2>
                    <div class="posts">
                        <ul>
                                                                <li><a href="/Review/posts/tin-tuc/7jysk-jikqs-qas04-11">7JYsk JIkQS qAS04 11</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/jaros-yknsq-twwia-10">JaRoS yKnsQ TWwia 10</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/6vg42-9jlkv-k0fjg-9">6VG42 9JlKV k0FjG 9</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/qmtfo-ugsxq-jgcbw-8">qmtFo UgSxQ JgcBW 8</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/kzlm7-nze0k-esfvl-7">kzlm7 NZe0k ESFvL 7</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/tij2a-3ii15-ibnyt-6">tIj2A 3ii15 IbnyT 6</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/o64es-artpf-9gqdt-5">o64Es arTPF 9GqdT 5</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/pyzoz-b5iay-aagoo-4">pyzoz B5iAy aagoo 4</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/5nvtg-6sldm-wuaq5-3">5NVTG 6slDm wuaq5 3</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/sqhw3-wd2xr-ehf8b-2">Sqhw3 Wd2Xr eHF8b 2</a></a></li>
                                                        </ul>
                    </div>
                    <h2>
                        <span class="list_user">
                            <a href="#" onclick="return false;">Bài viết mới</a>                        </span>
                    </h2>
                    <!--nocache:005-->
                    <div class="posts" id="latest">
                        <ul>
                                                                <li><a href="/Review/posts/tin-tuc/sfas-ashf-jhsdfh-asjkhf-alsk">sfas ashf jhsdfh asjkhf alsk</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/4tn3q-abr5k-z9lxw-499718">4Tn3Q abR5k Z9LXw 499718</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/pntsa-9y9hd-vzvfy-499714">pnTsA 9y9hd vZVFY 499714</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/c3b8k-3u5bi-oojg0-499715">C3b8k 3u5bI Oojg0 499715</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/tsbyw-sayky-9ma7j-499717">TSbYW SayKY 9Ma7J 499717</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/74wcp-myejs-dthz5-499720">74WcP mYejS dthZ5 499720</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/qllxw-g3qma-i8xa5-499719">qLLxw g3qma I8xa5 499719</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/ucmek-vvzwm-t5hhj-499722">UCmeK vvZwm T5HhJ 499722</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/hztkw-pcvpj-4oxnc-499716">HZTkw pCvpJ 4OxNc 499716</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/y4frk-lwqd0-kqzhj-499721">Y4fRK LWqD0 KQZhJ 499721</a></a></li>
                                                        </ul>
                    </div>
                    <!--nocache:006-->
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="bottom">
        <div id="container">
            <div id="about">
                <div id="authorimage">
                    <img src="/Review/img/authorimg.png" width="108" height="108" alt="" />                    <!--            <img src="images/authorimg.png" width="108" height="108" alt="" /> -->
                </div>
                <div id="authorbio">
                    <h2>Giới thiệu</h2>
                    <p>Từ tiếng Anh hiện đại màu xanh đến từ tiếng Anh bleu hoặc blewe, từ tiếng Pháp bleu, một từ có nguồn gốc tiếng Đức liên quan đến Old Dutch, Old High German, [2] Old Saxon blāo và Old Frisian blāw, blau [3] 4] Bầu trời trong lành và biển sâu xuất hiện màu xanh vì có hiệu ứng quang học được gọi là tán xạ Rayleigh. Khi ánh sáng mặt trời đi qua bầu khí quyển, các bước sóng màu xanh được phân tán rộng rãi hơn bởi các phân tử oxy và nitơ.</p>
                </div>
            </div>
            <div id="tags">
                <h2 class="title">Nhãn</h2>
                <div class="content"> <a href="#" class="level6">inspiration</a> <a href="#" class="level5">daily inspiration</a> <a href="#" class="level4">photography</a> <a href="#" class="level4">tutorial</a> <a href="#" class="level4">illustration</a> <a href="#" class="level4">design</a> <a href="#" class="level3">best of the week</a> <a href="#" class="level3">iphone</a> <a href="#" class="level3">Typography</a> <a href="#" class="level3">photoshop</a> <a href="#" class="level3">wallpaper</a> <a href="#" class="level2">architecture</a> <a href="#" class="level2">web design</a> <a href="#" class="level2">interview</a> <a href="#" class="level2">video</a> <a href="#" class="level2">free</a> <a href="#" class="level2">wallpaper of the week</a> <a href="#" class="level2">sites of the week</a> <a href="#" class="level2">graphic design</a> <a href="#" class="level2">freebie</a> <a href="#" class="level2">fonts</a> <a href="#" class="level2">case study</a> <a href="#" class="level2">logo</a> <a href="#" class="level2">giveaway</a> <a href="#" class="level2">art</a> <a href="#" class="level1">hdr</a> <a href="#" class="level1">digital art</a> <a href="#" class="level1">poster</a> <a href="#" class="level1">fireworks</a> <a href="#" class="level1">posters</a> <a href="#" class="level1">illustrator</a> <a href="#" class="level1">gadgets</a> <a href="#" class="level1">photo manipulation</a> <a href="#" class="level1">ads</a> <a href="#" class="level1">logo design</a> <a href="#" class="level1">FFFF</a> <a href="#" class="level1">3d</a> <a href="#" class="level1">video of the week</a> <a href="#" class="level1">offices</a> <a href="#" class="level1">product design</a> </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="credits">
            <div class="leftalign">Copyright &copy; 2010 YourSiteName.com</div>
            <div class="rightalign">Thiết kế bởi <a href="http://cssheaven.org">CSSHeaven.org</a></div>
        </div>
    </div>
    </body>

</html>
