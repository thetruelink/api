

var app = angular.module('linkApp', ['ui.router'])
.config( function($stateProvider, $urlRouterProvider){
    $stateProvider
    .state('state1', {
        url : '/newimchat/:contactId',
        controller : 'contactCtrl',
        templateUrl : 'newChat.html'
    })
})
.factory('conversations', function(){
     var conversations = [
        {
           dst : {
                nom : 'DIALLO',
                prenom : 'Dian'
           },
            date : 'Hier 12:30',
            statut : 'online'
        },
        {
            dst : {
                nom : 'SAWARE',
                prenom : 'Abdoulaye'
            },
            date : 'Aujourd\'hui 10:03',
            statut : 'offline'
        }
        
    ];
    return {
        getConversationsList : function(){
            return conversations;
        },
        findConversation : function(index){
            return conversations[index];
        }
    
    }
});
/*
.directive('imChatDir', function(){
    return {
        restrict : 'C',
        templateUrl : 'newChat.html',
        link : function(scope, element, attr){
            element.bind('click', function(){
                angular.element(document.getElementById('chatSpaceId')).append('<div>')
            })
            
        }
    }*/