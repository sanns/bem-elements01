var persons = [
     'Jhon'
    ,'Nill'
];


function CommentManager() {
    //
    // this = {}
    var commentsNum_ = 0;
    var comments = [
           
    ];
    
    
    function Comment(_person, _content, _lvl) {
        //
        // this = {}
        
        this.level = _lvl;
        this.likesNum ;
        
        this.person  = _person;     //строка?
        this.content = _content;    //строка?
        
        this.response = function() {
            
            
        }
        
        
        //return this
    }
    
    
    
    
    this.newComment = function(person, content){
        ++commentsNum_;
        var lvl = 0;
        
        //var person_ = person;
        //var content_ = content;
        
        comments.push( new Comment(person, content, lvl) );
    }
    this.consoleComments = function() {
        console.log(1, comments);
    }
    //this.drawComments = function() {
    //    //
    //}
    
    
    
    //return this
}


var commentManager1 = new CommentManager();

commentManager1.newComment(persons[0] , 'Content#1: lallal.');
commentManager1.newComment(persons[1] , 'Content#2: lallal.');
commentManager1.newComment(persons[1] , 'Content#3: lallal.');
commentManager1.newComment(persons[0] , 'Content#4: lallal.');

commentManager1.consoleComments();



