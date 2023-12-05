<!DOCTYPE html>
<html ng-app="adminApp">

<head>
  <!-- Include AngularJS -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body ng-controller="adminCtrl">
 
  <div ng-show="submittedData.length > 0">
    <h2>Admin View - Submitted Data</h2>
    
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
      </tr>
      <tr ng-repeat="data in submittedData">
        <td>{{ data.name }}</td>
        <td>{{ data.email }}</td>
        <td>{{ data.subject }}</td>
        <td>{{ data.message }}</td>
      </tr>
    </table>
  </div>

  <script>
    var adminApp = angular.module('adminApp', []);

    adminApp.controller('adminCtrl', function ($scope, $http) {
      $scope.submittedData = [];

      // Function to fetch submitted data for admin
      $scope.getAdminData = function () {
        // Make an HTTP request to fetch the submitted data for admin
        $http.get('get_admin_data.php')
          .then(function (response) {
            // Update the submittedData array with the fetched data
            $scope.submittedData = response.data;
          })
          .catch(function (error) {
            console.error('Error fetching admin data', error);
          });
      };

      // Fetch submitted data for admin when the page loads
      $scope.getAdminData();
    });
  </script>
</body>

</html>
