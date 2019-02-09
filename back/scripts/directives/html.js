(function(){ 'use strict';

function ToHtmlDirective(){

	var directive = {};

	/**
 	 * Transform an Markdown text in HTML
 	 * @param {String} string
 	 * @return {String}
 	 */
	directive.transformToHtml = function(string){

		string = string || '';

		if( !angular.isString(string) ){
			return string;
		}

		// Markdown
		string = string.replace(/(\*\*|__)(.*?)(\*\*|__)/g, '<strong>$2</strong>'); // Bold
		string = string.replace(/(\*|_)(.*?)(\*|_)/g, '<em>$2</em>'); // Italico
		string = string.replace(/\~\~(.*?)\~\~/g, '<del>$1</del>'); // Del

		string = string.replace(/\n\*(.*)/g, '<ul><li>$1</li></ul>'); // UL
		string = string.replace(/\n[0-9]+\.\s(.*)/g, '<ol><li>$1</li></ol>'); // OL

		string = string.replace(/<\/ul><ul>/g, ''); // UL fix
		string = string.replace(/<\/ol><ol>/g, ''); // OL fix
		string = string.replace(/\n<ul>/g, '<ul>'); // UL fix
		string = string.replace(/\n<ol>/g, '<ol>'); // OL fix

		// HTML
		string = string.replace(/(^|[\n ])([\w]*?)((ht|f)tp(s)?:\/\/[\w]+[^ \,\"\n\r\t<]*)/gi, '$1$2<a target="_blank" href="$3">$3</a>'); // HTTP
		string = string.replace(/(^|[\n ])([\w]*?)((www|ftp)\.[^ \,\"\t\n\r<]*)/gi, '$1$2<a target="_blank" href="http://$3" >$3</a>'); // WWW || FTP
		string = string.replace(/@(\w+)/g, '<a href="https://twitter.com/$1" target="_blank">@$1</a>'); // Twitter
		string = string.replace(/\\n/g, '<br/>');
		string = string.replace(/\n/g, '<br/>');

		return string;
	}

	return function(scope, element, attr) {
		element.addClass('to-html');
		scope.$watch(attr.toHtml, function(value){
			element.html( directive.transformToHtml(value) );
		});
	};

};

function InsertHtmlDirective(){

	return function(scope, element, attr) {
		element.addClass('to-html');
		scope.$watch(attr.insertHtml, function(value){
			element.html(value);
		});
	};

};

APP.directive('toHtml', ToHtmlDirective);
APP.directive('insertHtml', InsertHtmlDirective);

})();