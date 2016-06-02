app.factory('member', ['$http', function($http) {
    return {
        getAll : function () {
            return $http.get('/api/member')
                .success(function(data) {
                    return data;
                })
                .error(function(err) {
                    return err;
                });
        },
        search : function (name) {
            return $http.get('/api/member/'+name)
                .success(function(data) {
                    return data;
                })
                .error(function(err) {
                    return err;
                });
        }
    }
}]);
