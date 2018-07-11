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
   </head>
   <body ng-app="myApp" ng-controller="myCtrl">
      <div class="container-scroller">
      <div class="container-fluid page-body-wrapper">
         <div class="main-panel">
            <div class="content-wrapper">
               <div class="page-header">
                  <h3 class="page-title">
                     <span class="page-title-icon bg-gradient-primary text-white mr-2">
                     <i class="mdi mdi-home"></i>
                     </span>
                     Dashboard
                  </h3>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                           <span></span>Overview
                           <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                     </ul>
                  </nav>
               </div>
               <div class="row">
                  <div class="col-md-3 stretch-card grid-margin">
                     <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                           <img src="<?php echo base_url();?>assets/admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                           <h4 class="font-weight-normal mb-3">Total Tenants
                             <i class="mdi mdi-diamond mdi-24px float-right"></i>
                           </h4>
                           <h2 class="mb-5">{{ total }}</h2>
                           <h6 class="card-text">Going good..</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 stretch-card grid-margin">
                     <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                           <img src="<?php echo base_url();?>assets/admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                           <h4 class="font-weight-normal mb-3">Applications
                             <i class="mdi mdi-diamond mdi-24px float-right"></i>
                           </h4>
                           <h2 class="mb-5">{{applications}}</h2>
                           <h6 class="card-text">Going good..</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 stretch-card grid-margin">
                     <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                           <img src="<?php echo base_url();?>assets/admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                           <h4 class="font-weight-normal mb-3">Total Buildings
                              <i class="mdi mdi-diamond mdi-24px float-right"></i>
                           </h4>
                           <h2 class="mb-5">5</h2>
                           <h6 class="card-text">Going good..</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 stretch-card grid-margin">
                     <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                           <img src="<?php echo base_url();?>assets/admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                           <h4 class="font-weight-normal mb-3">Total Rooms
                             <i class="mdi mdi-diamond mdi-24px float-right"></i>                           </h4>
                           <h2 class="mb-5">75</h2>
                           <h6 class="card-text">Going good..</h6>
                        </div>
                     </div>
                  </div>
               </div>






                 <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Tenants Lists</h4>
                              <div class="row">
                                <div class="col-9">
                                  <table id="order-listing" class="table">
                                    <thead>
                                      <tr>
                                          <th>Sl No. #</th>
                                          <th>Name</th>
                                          <th>Address</th>
                                          <th>Pan No.</th>
                                          <th>Adhar No.</th>
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr ng-repeat="r in records">
                                          <td>{{ $index + 1 }}</td>
                                          <td>{{ r.name }}</td>
                                          <td>{{ r.Address }}</td>
                                          <td>{{ r.Pan }}</td>
                                          <td>{{ r.Adhar }}</td>
                                          <td>
                                            <button class="btn btn-outline-primary" ng-click="update(r.id)" id="update">Update</button>
                                            <button class="btn btn-outline-danger" ng-click="delete(r.id)">Delete</button>
                                          </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="col-3">
                                  <div class="card">
                                     <div class="card-body">
                                       <h4>Update Tenants Records..</h4>
                                       <div class="form-group">
                                          <input type="hidden" class="form-control" ng-model="uid" ng-value="dict.id" name="uid">
                                       </div>
                                        <div class="form-group">
                                           <input type="text" class="form-control" ng-model="uname" ng-value="dict.name" name="uname">
                                        </div>
                                        <div class="form-group">
                                           <textarea ng-model="uaddress" ng-value="dict.Address" name="uaddress" class="form-control" rows="5">Address Here..</textarea>
                                        </div>
                                        <div class="form-group">
                                           <input type="text" class="form-control" ng-model="upan" ng-value="dict.Address" name="upan">
                                        </div>
                                        <div class="form-group">
                                           <input type="text" class="form-control" ng-model="uadhar" ng-value="dict.Address" name="uadhar">
                                        </div>
                                        <button type="Button" ng-click="updateNow()" name="update_now" class="btn btn-gradient-primary mr-2">Update</button>
                                     </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      <br><br>





<div class="row">

      <div class="col-4 grid-margin stretch-card">

         <div class="card">

            <div class="card-body">
              <h4>Add Tenants Here..</h4>
               <div class="form-group">
                  <input type="text" class="form-control" ng-model="name" name="name" value="" placeholder="Name">
               </div>
               <div class="form-group">
                  <textarea name="address" ng-model="address" class="form-control" rows="5">Address Here..</textarea>
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" ng-model="pan" name="pan" placeholder="Pan No.">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" ng-model="adhar" name="adhar" placeholder="Adhar No.">
               </div>
               <button type="Button" ng-click="submitForm()" name="submit" class="btn btn-gradient-primary mr-2">Submit</button>

            </div>
         </div>
      </div>


      <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
                   <div class="card-body">
                     <h4 class="card-title">Contact Lists</h4>
                     <div class="row">
                       <div class="col-12">
                         <table id="order-listing" class="table">
                           <thead>
                             <tr>
                                 <th>Sl No. #</th>
                                 <th>Name</th>
                                 <th>Number</th>
                                 <th>Room Type</th>
                                 <th>Message</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr ng-repeat="c in contact">
                                 <td>{{ $index + 1 }}</td>
                                 <td>{{ c.name }}</td>
                                 <td>{{ c.number }}</td>
                                 <td>{{ c.type }}</td>
                                 <td>{{ c.message }}</td>
                             </tr>
                           </tbody>
                         </table>
                       </div>
                     </div>
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


  $scope.total = function(){
  $http.get("http://[::1]/leo/index.php/Base_controller/total_users")
  .then(function(response){
    $scope.total=response.data;
  }, function(response) {
    console.log('SomeThing went wrong !');
  });
}
  $scope.total();


  $scope.applications = function(){
  $http.get("http://[::1]/leo/index.php/Base_controller/total_applications")
  .then(function(response){
    $scope.applications=response.data;
  }, function(response) {
    console.log('SomeThing went wrong !');
  });
}
  $scope.applications();


  $scope.apps = function(){
  $http.get("http://[::1]/leo/index.php/Base_controller/get_contact")
  .then(function(response){
    $scope.contact = response.data.contact;
  }, function(response) {
    console.log('SomeThing went wrong !');
  });
}
  $scope.apps();



    $scope.records = function(){
    $http.get("http://[::1]/leo/index.php/Base_controller/get_user_data")
    .then(function(response){
      $scope.records = response.data.records;
    }, function(response) {
      console.log('SomeThing went wrong !');
    });
  }
    $scope.records();


    $scope.update = function(id){
     $http.post("http://[::1]/leo/index.php/Base_controller/single_records",id)
     .then(function(response){
       $scope.uid=response.data.single[0]['id'];
        $scope.uname=response.data.single[0]['name'];
        $scope.uaddress=response.data.single[0]['Address'];
        $scope.upan=response.data.single[0]['Pan'];
        $scope.uadhar=response.data.single[0]['Adhar'];

     },function(response){
       console.log('SomeThing went wrong !');
     });
   }


   $scope.updateNow = function(id){
     context = {
       "id" : $scope.uid,
       "name" : $scope.uname,
       "address" : $scope.uaddress,
       "pan" : $scope.upan,
       "adhar" : $scope.uadhar,
     }
    $http.post("http://[::1]/leo/index.php/Base_controller/update_now",context)
    .then(function(response){
          $scope.records = function(){
          $http.get("http://[::1]/leo/index.php/Base_controller/get_user_data")
          .then(function(response){
            $scope.records = response.data.records;
          }, function(response) {
            console.log('SomeThing went wrong !');
          });
        }
          $scope.records();
    },function(response){
      console.log('SomeThing went wrong !');
    });
  }






    $scope.delete = function(id){
      $http.post("http://[::1]/leo/index.php/Base_controller/delete_user",id)
      .then(function(response){
          swal("Deleted Successfully !!", {
          buttons: false,
          timer: 1000,
          });
          $scope.records = function(){
          $http.get("http://[::1]/leo/index.php/Base_controller/get_user_data")
          .then(function(response){
            $scope.records = response.data.records;
          }, function(response) {
            console.log('SomeThing went wrong !');
          });
        }
          $scope.records();
      });

    }

    $scope.submitForm = function(){
      console.log('clicked');
      context = {
        "name" : $scope.name,
        "address" : $scope.address,
        "pan" : $scope.pan,
        "adhar" : $scope.adhar,
      }
    $http.post("http://[::1]/leo/index.php/Base_controller/read_user_data",context)
    .then(function(response){

        swal("Form Submitted successfully !!", {
        buttons: false,
        timer: 1000,
        });
          $scope.records = function(){
          $http.get("http://[::1]/leo/index.php/Base_controller/get_user_data")
          .then(function(response){
            $scope.records = response.data.records;
          }, function(response) {
            console.log('SomeThing went wrong !');
          });
        }
        $scope.records();
    },function(response){
    console.log('SomeThing went wrong !');
    });
    }
});
</script>
       </body>
    </html>
