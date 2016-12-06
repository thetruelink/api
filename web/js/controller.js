app.controller('appCtrl', function(){
    
});

app.controller('homeCtrl', function($scope, conversations){
    $scope.conversations = conversations.getConversationsList();
    
});
app.controller('contactCtrl', function($scope, conversations, $stateParams, $window){
    $scope.phpVar = $window.contact;
    console.log(($scope.phpVar));
    $scope.conversation = conversations.findConversation($stateParams.contactId);
    /**
    $scope.loadPlugin = function(index){
        $scope.conversation = conversations.findConversation(index);
        
        jQuery('#chatSpace').load("newChat.html#chat1");
        
    }*///
});