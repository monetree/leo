<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Leo</title>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/vendors/css/vendor.bundle.base.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css">
      <link rel="shortcut icon" href="<?php echo base_url();?>assets/admin/images/favicon.png" />
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <style media="screen">
      h1 {
    font: 600 3.5em 'Raleway', sans-serif;
    letter-spacing: .5em;
    width: 100%;
    text-align:center;
    font-size:60px;
    }
      </style>
   </head>
   <body ng-app="myApp" ng-controller="myCtrl"
   style="background-image:url('http://cdn.wonderfulengineering.com/wp-content/uploads/2014/01/beautiful-wallpaper-36.jpg');
   background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
   ">
      <div class="container-scroller">
      <div class="container-fluid page-body-wrapper">
         <div class="main-panel">












<h1>Contact Us</h1>

<div class="row">
<div class="col-4 grid-margin stretch-card">
</div>
      <div class="col-4 grid-margin stretch-card">
         <div class="card" style="background:none;border:2px-solid-white;">
            <div class="card-body">

               <div class="form-group">
                  <input type="text" class="form-control" ng-model="name" name="name" value="" placeholder="Name">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" ng-model="number" name="number" value="" placeholder="Number">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" ng-model="type" name="type" value="" placeholder="Room Type..">
               </div>
               <div class="form-group">
                  <textarea class="form-control" ng-model="message" name="message" value="">Your Message..</textarea>
               </div>
               <button type="Button" ng-click="submitForm()" name="submit" class="btn btn-gradient-primary mr-2">Submit</button>

            </div>
         </div>
      </div>

    </div>
</div>
</div>
</div>
</div>





<script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope,$http) {
    $scope.submitForm = function(){
      console.log('clicked');
      context = {
        "name" : $scope.name,
        "number" : $scope.number,
        "type" : $scope.type,
        "message" : $scope.message,
      }
    $http.post("http://[::1]/leo/index.php/Base_controller/contact_form",context)
    .then(function(response){
        swal("Thaks For Contact !!", {
        buttons: false,
        timer: 1000,
        });
        console.log(response.data);

    },function(response){
    console.log('SomeThing went wrong !');
    });
    }
});
</script>
       </body>
    </html>
