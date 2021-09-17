console.clear();
//   Includes:
//   //ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js

var app = angular.module('App',[])
  .directive('tabMenu',[function(){
    return {
      restrict:'A',
      require: 'ngModel',                  
      scope: { modelValue: '=ngModel' },  // modelValue for $watch 
      link:function(scope, element, attr, ngModel){
         
          // Links collection
          var links=element.find('a');
        
          // Add click listeners
          links.on('click',function(e){
              e.preventDefault();
              ngModel.$setViewValue( angular.element(this).attr('href') );
              scope.$apply();
          })        

          // State handling (set active) on model change
          scope.$watch('modelValue',function(){
            for(var i=0,l=links.length;i<l;++i){
              var link = angular.element(links[i]);
              link.attr('href') === scope.modelValue ?
              link.addClass('active') : link.removeClass('active')
            }
          })
      }
    }
  }])
  .controller('AppCtrl',['$scope',function($scope){
    $scope.ui = {};
    $scope.ui.tabview = 'tab3.html';
  }])
    
    