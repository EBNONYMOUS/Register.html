
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<style>
.txt {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 5vh; /* adjust the height to your needs */
 }

.register{
    background: -webkit-linear-gradient(left, #F87F00, #BD00F6);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 20% 10% 10% 10% ;
    border-bottom-left-radius: 20% 10% 10% 10%;
    border-top-right-radius: 20% 10% 10% 10%;
    border-bottom-right-radius: 20% 10% 10% 50%;
    width: 10%;


}
.register-left img{
    margin-top: 15%;
    margin-bottom: 10%;
    width: 100%;
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}

.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

.anchor-gradient {
  background: linear-gradient(to right, #F87F00, #BD00F6);
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
  text-decoration: none;
}
</style>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Company Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help Center</a>
            </li>
          </ul>
        </div>
      </nav>




      <div class="row register">
        <div class="col-md-3  ml-auto register-left">
            <img src="Travel-fotor-bg-remover-20240430125049.png" alt=""/>
        <h3>The Leading Online Instant Sharing Content Platform In the Philippines</h3>
         </div>
         <div class="col-md-6 offset-md-3 register-right">
            <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                       <h3 class="register-heading">Apply as a Sharer</h3>
                       <div class="row register-form">
                           
                        <div class="col-md-6">
                               <div class="form-group">
                                   <input type="text" class="form-control" placeholder="First Name *" value="" />
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control" placeholder="Last Name *" value="" />
                               </div>
           
                              
                              
                               <div class="form-group">
                                   <input type="password" class="form-control" placeholder="Password *" value="" />
                               </div>
                              
                               <div class="form-group">
                                   <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                              </div>
                              
                              <div class="form-group">
                                   <div class="maxl">
                                       <label class="radio inline"> 
                                           <input type="radio" name="gender" value="male" checked>
                                           <span> Male </span> 
                                       </label>
                                       <label class="radio inline"> 
                                           <input type="radio" name="gender" value="female">
                                           <span>Female </span> 
                                       </label>
                                   </div>
                               </div>
                           </div>
           
           
                           <div class="col-md-6">
                               <div class="form-group">
                                   <input type="email" class="form-control" placeholder="Your Email *" value="" />
                               </div>
                               <div class="form-group">
                                   <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                               </div>
           
                               <div class="form-group">
                                   <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                               </div>
                              
                               <div class="form-group">
                                   <select class="form-control">
                                       <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                       <option>What is your Birthdate?</option>
                                       <option>What is Your old Phone Number</option>
                                       <option>What is your Pet Name?</option>
                                   </select>
                               </div>
                              
           
                               <div class="form-group">
                                   <input type="Age" class="form-control" placeholder="Age *" value="" />
                               </div>
                               <input type="submit" class="btnRegister"  value="Register"/>
                           </div>
                       </div>
                   </div>
                                                       
           <p class="txt">You accept the <a href="#" class="anchor-gradient">Terms of Services</a>
               &<a href="#" class="anchor-gradient">Privacy Policy</a> by Registering. </p>
</body>
</html>
