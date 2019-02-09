(function(){ 'use strict';

function UploadDirective(){

	return {
		restrict: 'A',
		require: 'ngModel',
		scope:{
			model: '=ngModel',
			ngChange: '&'
		},
		controller: function($scope, $element, $attrs){

			$scope.limit = Number($attrs.limit);
			$scope.accept = $attrs.upload;
			$scope.isMultiple = ( $attrs.limit > 1 ) ? true : false;

			/**
			 * Return if the file can be added with this format
			 * @param {Object} file
			 * @return {Boolean}
			 */
			$scope.canUploadFile = function(file){

				var regex = /(.+)/;

				if( $scope.accept ){
					regex = new RegExp('(' + $scope.accept + ')', 'i');
				}

				if( file.name && file.type.match(regex) ){
					return true;
				}

				return false;
			}

			/**
			 * Return if can add more files
			 * @param {Number} plus
			 * @return {void}
			 */
			$scope.canAddMoreFiles = function(plus){

				if( !$scope.limit ){
					return true;
				}

				if( $scope.limit == 1 && !$scope.model ){
					return true;
				}

				if( ($scope.model.length + plus) <= $scope.limit ){
					return true;
				}

				return false;
			}

			/**
			 * Add files to scope
			 * @param {Array} files
			 * @return {void}
			 */
			$scope.addFiles = function(files){

				var items = [];

				angular.forEach(files, function(file){

					if( !$scope.canAddMoreFiles( items.length + 1 ) ){
						return;
					}

					if( !$scope.canUploadFile(file) ){
						return;
					}

					items.push( file );

				});

				angular.forEach(items, function(file, index){

					$scope.$apply(function(){

						if( !$scope.isMultiple ){
							$scope.model = file;
						}else{
							$scope.model.push( file );
						}

					});

				});

				$scope.ngChange();

			}

			// Watch
			// $scope.$watch($attrs.ngModel, function(value){
			// 	$scope.model = value;
			// }, $scope.isMultiple);

			// $scope.$watch('model', function(value){
			// 	$scope.$eval($attrs.ngModel + ' = model');
			// }, $scope.isMultiple);

		},
		link: function($scope, element, attrs, controller){

			var parent = element.parents('.upload');

			// Drag-Drop Style
			parent.on('dragenter dragover', function(){
				parent.addClass('upload-drag-hover');
			});

			parent.on('dragleave drop', function(){
				parent.removeClass('upload-drag-hover');
			});

			// Drag Upload
			parent.on('drop', function(e){

				e.stopPropagation();
				e.preventDefault();

				if( e.originalEvent.dataTransfer.files !== undefined ){
					return $scope.addFiles(e.originalEvent.dataTransfer.files);
				}

			});

			// File Upload
			parent.find('input[type="file"]').on('change', function(e){
				$scope.addFiles(e.target.files);
				$(this).val('');
			});

		}
	}

};

APP.directive('upload', UploadDirective);

})();
