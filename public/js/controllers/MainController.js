app.controller('MainController', ['$scope', 'member', function($scope, member) {
    member.getAll().success(function(data) {
        $scope.members = data;
    });
    $scope.seacrh = function () {
        var name = $scope.member.name;
        member.search(name).success(function(data) {
            $scope.members = data;
        });
    }
}]);
