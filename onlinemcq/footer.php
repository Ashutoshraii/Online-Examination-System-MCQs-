<!--footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="#" data-target="#aboutus" data-toggle="modal">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#alogin">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developer</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src=".\image\3.jpg" width=100 height=100 alt="Anish" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Instagram">Anish</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 1234567890</h4>
    <h4 style="font-family:'typo' ">anish@gmail.com</h4>
    <h4 style="font-family:'typo' ">SEACET Bengaluru</h4></div></div>
    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--Modal for about us-->
<div class="modal fade" id="aboutus">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">About Us</span></h4>
      </div>
        
    <div class="modal-body title1">
      <p>
        <div class="row">
          <div class="col-md"></div>
          <div class="col-md-12" style="font-family: 'typo';">
          MCQCAMP is a free online platform for students to gain knowledge and practice multiple-choice questions (MCQs). Our quizzes are created and managed by our site admin, ensuring quality and relevance. Students can create a free account and access our exams on any device. MCQCAMP is committed to providing a user-friendly and secure learning experience for all. Join us today and improve your MCQ skills!
          </div>
        </div>
      </p>
    </div>
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</div>
</div>
</div><!--modal for about us close-->


<!--Modal for admin login-->
   <div class="modal fade" id="alogin">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">ADMIN LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group text-center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->