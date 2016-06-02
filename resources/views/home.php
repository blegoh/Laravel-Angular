<html>
<head>
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <link href="/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/controllers/MainController.js"></script>
    <script src="/js/services/member.js"></script>
</head>
<body ng-app="myApp">
    <div class="container" ng-controller="MainController">
        <div class="row">
            <form class="form-inline" role="form">
                <div class="form-group">
                    <label for="email">Name:</label>
                    <input type="text" class="form-control" id="name" ng-model="member.name" >
                </div>

                <button class="btn btn-default" ng-click="seacrh()">Search</button>
            </form>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="member in members">
                    <td>{{member.name}}</td>
                    <td>{{member.address}}</td>
                    <td>{{member.email}}</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</body>
</html>